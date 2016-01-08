<?php 

namespace Fiesta\Core\Database\Drivers;

use Fiesta\Core\Config\Config;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Database\Exception\DatabaseArgumentsException;
use Fiesta\Core\Database\Exception\DatabaseConnectionException;


/**
* Mysql Database Class
*/
class MysqlDatabase
{

	const URL_FAILD_MODE_EXCEPTION = '1';
	const EXCEPTION_FAILD_MODE = '2';
	//
	public $server;
	public $default;

	public function setDefault($faild=self::EXCEPTION_FAILD_MODE)
	{
		if(Config::get("database.host")=="" and Config::get("database.username")=="" and Config::get("database.password")=="" and Config::get("database.database")=="")
			throw new DatabaseArgumentsException();
			
		else
		{
			Database::$default=@mysqli_connect(Config::get("database.host"), Config::get("database.username"), Config::get("database.password"), Config::get("database.database"));
			//
		  	if(!Database::$default)
		  	{
	  			if($faild==2) throw new DatabaseConnectionException();
	  			else if($faild==1) \Errors::r_db();

	  		}
	  		else
	  		{
			  	mysqli_query(Database::$default,"SET NAMES ".Config::get("database.charset"));
			  	//
			  	Database::$server=Database::$default;
			  	//
			  	Database::$serverData=[
			  	'host' => Config::get("database.host") , 
			  	"username" => Config::get("database.username") , 
			  	"password" => Config::get("database.password") , 
			  	"database" => Config::get("database.database")];
			  	//
			  	Database::$defaultData=[
			  	'host' => Config::get("database.host") , 
			  	"username" => Config::get("database.username") , 
			  	"password" => Config::get("database.password") , 
			  	"database" => Config::get("database.database")];
	  		}
		  	
		  	return Database::$default;
		}
	}

	public function setNewServer($host,$user,$password,$database,$faild=self::EXCEPTION_FAILD_MODE)
	{
		//$this->server=null;
		//
		if($host=="" and $user=="" and $database=="")
			throw new DatabaseArgumentsException();
			
		else
		{
			Database::$server=mysqli_connect($host,$user,$password,$database);
		  	//
		  	if (!Database::$server)
	  		{ 
	  			if($faild==2) throw new DatabaseConnectionException();
	  			else if($faild==1) \Errors::r_db();
	  		}
		  	//
		  	mysqli_query(Database::$server,"SET NAMES ".Config::get("database.charset"));
		  	//
		  	Database::$serverData=[
			  	'host' => $host , 
			  	"username" => $user , 
			  	"password" => $password , 
			  	"database" => $database];
			  	//
		  	//
		  	return Database::$server;
		}
	}

	public function setDefaultDB()
	{
		$server=$this->setDefault();
	}

	public function ChangeDB($database,$server=null)
	{
		if(is_null($server)) 
		{
			mysqli_select_db(Database::$server,$database);
			Database::$serverData["database"]=$database;
		}
		else 
		{
			mysqli_select_db($server,$database);
			Database::$serverData["database"]=$database;
		}
	}

	public function exec($sql,$server=null)
	{
		return mysqli_query(Database::$server,$sql);
	}

	public function execErr()
	{
		$msg="";
		if(mysqli_error(Database::$server)!="")
		$msg="mysql error : ".mysqli_error(Database::$server);
		return $msg;
	}

	public function read($sql,$mode)
	{
		$vals = array();
		$res=@mysqli_query(Database::$server,$sql);
		if($mode == 1)
		while ($row=@mysqli_fetch_assoc($res))  $vals[]=$row;
		else if($mode == 2)
		while ($row=@mysqli_fetch_array($res)) $vals[]=$row;
		//
		return $vals;
	}

	public function countR($res)
	{
		return @mysqli_num_rows($res);
	}

	public function countS($sql)
	{
		$cnt=0;
		//
		if($res=mysqli_query(Database::$server,$sql))$cnt=@mysqli_num_rows($res);
		else $cnt=-1;
		//
		return $cnt;
	}

	public static function res($sql)
	{
		return @mysqli_query(Database::$server,$sql);
	}
}
