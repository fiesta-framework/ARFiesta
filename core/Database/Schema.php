<?php

namespace Fiesta\Core\Database;

use Fiesta\Core\Config\Config;


/**
* Database Schema class
*/
class Schema
{
	static $main_sql;
	static $sql;
	static $sql_rows = array();


	/*
	* Creating table functions
	*/
	public function inc($nom)
	{
		self::$sql_rows[]=$nom.' int primary key AUTO_INCREMENT';
	}

	public function string($nom,$length=255,$default=null)
	{
		$cmnd=$nom.' varchar('.$length.')';
		//
		if(!empty($default))
		{
			if(is_string($default)) $cmnd.=" DEFAULT '$default' ";
			else $cmnd.=" DEFAULT $default ";
		}
		//
		self::$sql_rows[]=$cmnd;
		return $this;
	}

	public function int($nom,$length=11)
	{
		$cmnd=$nom.' int('.$length.')';
		//
		if(!empty($default))
		{
			if(is_string($default)) $cmnd.=" DEFAULT '$default' ";
			else $cmnd.=" DEFAULT $default ";
		}
		//
		self::$sql_rows[]=$cmnd;

		return $this;
	}

	public function long($nom,$length=11)
	{
		$cmnd=$nom.' bigint('.$length.')';
		//
		if(!empty($default))
		{
			if(is_string($default)) $cmnd.=" DEFAULT '$default' ";
			else $cmnd.=" DEFAULT $default ";
		}
		//
		self::$sql_rows[]=$cmnd;

		return $this;
	}

	public function float($nom)
	{
		$cmnd=$nom.' float';
		//
		if(!empty($default))
		{
			if(is_string($default)) $cmnd.=" DEFAULT '$default' ";
			else $cmnd.=" DEFAULT $default ";
		}
		//
		self::$sql_rows[]=$cmnd;

		return $this;
	}

	public function text($nom)
	{
		self::$sql_rows[]=$nom.' text';
		//
		/*if(!empty($default))
		{
			if(is_string($default)) $cmnd.=" DEFAULT '$default' ";
			else $cmnd.=" DEFAULT $default ";
		}
		//
		self::$sql_rows[]=$cmnd;*/
		return $this;

	}

	public function bool($nom)
	{
		self::$sql_rows[]=$nom.' tinyint(1)';
		return $this;
	}

	public function datetime($nom)
	{
		self::$sql_rows[]=$nom.' DATETIME';
		return $this;
	}

	public function date($nom)
	{
		self::$sql_rows[]=$nom.' date';
		return $this;
	}

	public function time($nom)
	{
		self::$sql_rows[]=$nom.' time';
		return $this;
	}

	public function timestamp($nom)
	{
		self::$sql_rows[]=$nom.' int(15)';
		return $this;
	}

	public function timestamps()
	{
		self::$sql_rows[]='date_create int(15),date_edit int(15)';
		return $this;
	}

	public function remembreToken()
	{
		self::$sql_rows[]='rememberToken varchar(255)';
		return $this;
	}

	/*
	* Constrant
	*/

	public function ini($value)
	{
		$i=count(self::$sql_rows)-1;
		self::$sql_rows[$i].=" default '".$value."'";
	}
	public function inull()
	{
		$i=count(self::$sql_rows)-1;
		self::$sql_rows[$i].=" not null";
	}

	public function ref($table,$colmun=null)
	{
		$i=count(self::$sql_rows)-1;
		self::$sql_rows[$i].=" references ".$table;
		if(!empty($colmun)) self::$sql_rows[$i].="(".$colmun.")";
		echo self::$sql_rows[$i];
	}

	public function unique($name,$colmuns=array())
	{
		$sql='UNIQUE KEY `'.$name.'` (';
		for ($i=0; $i < count($colmuns); $i++) {
			if($i==count($colmuns)-1) $sql.=$colmuns[$i];
			else $sql.=$colmuns[$i].",";
		}
		$sql.=")";
		self::$sql_rows[]=$sql;
		return $this;
	}




	/*
	* Create function
	*/

	protected static function tableName($nom,$prefix=null)
	{
		$name="";
		if(is_null($prefix))
			if(Config::get('database.prefixing')) $name=Config::get('database.prefixe').$nom;
			else $name=$nom;

		else $name=$prefix.$nom;
		//
		return $name;
	}

	public static function create($nom,$script,$prefix=null)
	{
		$name=self::tableName($nom);
		//
		self::$main_sql="create table ".$name."(";
		//
		$c=new self();
		$script($c);
		//
		$sql="";
		for ($i=0; $i < count(self::$sql_rows); $i++)
		{
			if($i==(count(self::$sql_rows)-1))
			$sql.=self::$sql_rows[$i]."";
			else $sql.=self::$sql_rows[$i].",";
		}
		self::$main_sql.=$sql.") DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
		//
		return Database::exec(self::$main_sql);
	}


	public static function drop($nom,$prefix=null)
	{
		$nom=self::tableName($nom,$prefix);
		return Database::exec("DROP TABLE ".$nom);
	}

	public static function rename($from, $to)
	{
		$from=self::tableName($from);
		$to=self::tableName($to);
		//
		return Database::exec("RENAME TABLE ".$from." TO ".$to);
	}

	public static function existe($nom,$table=null)
	{
		$nom=self::tableName($nom);
		//
		$tab	=	is_null($table)?Config::get('database.database'):$table;
		$i		=	Database::countS("select * FROM information_schema.tables WHERE table_schema ='".$tab."' AND table_name = '".$nom."' LIMIT 1;");
		if($i>0) return true;
		else return false;
	}

	public static function table($name)
	{
		$name=self::tableName($name);
		//
		$h=new DBTable($name);
		return $h;
	}

	public static function add($nom,$script,$prefix=null)
	{
		$name=self::tableName($nom);
		//
		self::$main_sql="alter table ".$name." ";
		//
		$c=new self();
		$script($c);
		//
		$sql="";
		for ($i=0; $i < count(self::$sql_rows); $i++)
		{
			if($i==(count(self::$sql_rows)-1))$sql.= " add " . self::$sql_rows[$i]."";
			else $sql.= " add " . self::$sql_rows[$i].",";
		}
		self::$main_sql.=$sql;
		// self::$main_sql.=$sql.") DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
		//
		
		return Database::exec(self::$main_sql);
	}

	public static function remove($nom,$colmuns)
	{
		$name=self::tableName($nom);
		//
		self::$main_sql="alter table ".$name." ";
		//
		if(is_array($colmuns))
		{
			// foreach ($colmuns as $value) {
			for ($i=0; $i < count($colmuns); $i++)
			{
				if($i==(count($colmuns)-1)) self::$main_sql.=" drop ".$colmuns[$i];
				else self::$main_sql.=" drop ".$colmuns[$i] .",";
			}
		}
		else
		{
			self::$main_sql.=" drop ".$colmuns;
		}
		//
		return Database::exec(self::$main_sql);

	}


}
