<?php 

namespace Fiesta\Core\Database;

use Fiesta\Core\Config\Config;
use Fiesta\Core\Database\Drivers\MysqlDatabase;

/**
* Database Class
*/
class Database
{

	static $server=null;
	static $default=null;
	static $serverData=array();
	static $defaultData=array();
	private static $driver=null;

	public static function ini()
	{
		self::$driver=self::getDriver();
		self::$driver->setDefault();
	}

	public static function getDriver()
	{
		switch (Config::get('database.default')) {
			case 'sqlite':
				# code...
				break;

			case 'mysql':
					return (new MysqlDatabase);
				break;

			case 'pgsql':
				# code...
				break;

			case 'sqlsrv':
				# code...
				break;
		}
	}
	
	public static function setDefault($red=false,$url=null)
	{
		self::$driver->setDefault();
	}

	public static function setNewServer($host,$user,$password,$database)
	{
		self::$driver->setNewServer($host,$user,$password,$database);
	}

	public static function setDefaultDB()
	{
		self::$driver->setDefaultDB();
	}

	public static function ChangeDB($database,$server=null)
	{
		self::$driver->ChangeDB($database,$server);
	}



	public static function exec($sql)
	{
		return self::$driver->exec($sql);
	}

	public static function execErr()
	{
		return self::$driver->execErr();
	}

	//assoc : 1 , array : 2
	public static function read($sql,$mode=2)
	{
		return self::$driver->read($sql , $mode);
	}

	public static function countR($res)
	{
		return self::$driver->countR($res);
	}

	public static function countS($sql)
	{
		return self::$driver->countS($sql);
	}

	public static function res($sql)
	{
		return self::$driver->res($sql);
	}

}

