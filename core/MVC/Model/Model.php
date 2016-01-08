<?php 

namespace Fiesta\Core\MVC\Model;

use Fiesta\Core\MVC\Model\Exception\ColumnNotEmptyException;
use Fiesta\Core\MVC\Model\Exception\ForeingKeyMethodException;
use Fiesta\Core\MVC\Model\Exception\ManyPrimaryKeysException;
use Fiesta\Core\MVC\Model\Exception\PrimaryKeyNotFoundException;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Config\Config;


/**
* Model class
*/
 class Model
{
	// protected $test;
	protected static $table;
	protected $DBtable;
	protected $columns= array();
	protected $key;
	// protected $object;
	//

	public function __construct($pk=null,$table=null) 
	{
		if(!is_null($table)) $this->setTable($table);
		else $this->setTable(static::$table);
		$this->setColmuns();
		$this->setKey();
		if( ! is_null($pk)) $this->setData($pk);
	}

	protected function setColmuns()
	{
		$data=array();
		//
		$rows = Database::read("select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".Config::get('database.database')."' AND TABLE_NAME = '".$this->DBtable."';");
		//
		foreach($rows as $key => $value)
			foreach($value as $key2 => $value2)
    			if(is_numeric($key2)) 
    			{
    				$data[]=$value2;
    				$this->setVars($value2);
    			}
    	//
    	$this->columns=$data;
    	$this->setForeign();
	}

	protected function setVars($key,$value = null)
	{
		$this->$key = $value ;
	}

	protected function setKey()
	{
		$data = array();
		//
		$rows=Database::read("SHOW INDEX FROM ".$this->DBtable." WHERE `Key_name` = 'PRIMARY'");
		//
		if(count($rows) > 1) throw new ManyPrimaryKeysException();
		else if(count($rows) == 0 ) throw new PrimaryKeyNotFoundException($this->DBtable);
		//
		$this->key=$rows[0]['Column_name'];
	}

	protected function setTable($table)
	{
		if(Config::get('database.prefixing')) $this->DBtable = Config::get('database.prefixe') . $table;
		else $this->DBtable=$table;
	}

	protected function putForeign()
	{
		if(isset(static::$foreignKeys))
		if( ! is_null(static::$foreignKeys)) 
		{
			$foreigns=static::$foreignKeys;
			//
			foreach ($foreigns as $key => $value) 
			{
				if(method_exists($this, $value)) $this->$value = $this->$value();
				else throw new ForeingKeyMethodException($value,get_class($this));
			}
		}
	}
	protected function setForeign()
	{
		if(isset(static::$foreignKeys))
		if( ! is_null(static::$foreignKeys)) 
		{
			$foreigns=static::$foreignKeys;
			//
			foreach ($foreigns as $key => $value) 
			{
				if(method_exists($this, $value)) $this->$value =  null;
				else throw new ForeingKeyMethodException($value,get_class($this));
			}
		}
	}

	protected static function instance()
	{
		$class=get_class();
		return new $class(null,static::$table);
	}

	protected function setData($pk)
	{
		$data=Database::read("select * from ".$this->DBtable." where ".$this->key."='".$pk."' ",1);
		//
		if(count($data)==1)
		{
			foreach ($data[0] as $key => $value) $this->setVars($key,$value);
			$this->putForeign();
		}
		//else if(count($data)==0) $this->setForeign();
	}

	public static function find($id)
	{
		$self=self::instance();
		//
		$data=Database::read("select * from ".$self->DBtable." where ".$self->key."='".$id."' ",1);
		//
		foreach ($data[0] as $key => $value) $self->$key = $value;
		//
		return $self;
	}

	protected function getDefaultVars()
	{
		return array('table','DBtable','columns','key');
	}

	protected function getData()
	{
		$vars = array();
		$defaultVars = $this->getDefaultVars();
		//
		foreach (get_object_vars($this) as $key => $value) 
			if(!in_array($key,$defaultVars))
				$vars[$key]=$value; 
		//
		return $vars;
	}

	public function emptyPK()
	{
		$key=$this->key;
		$this->$key=null;
	}

	public function add()
	{
		$sql="insert into ".$this->DBtable." ";
		$colmn_string="(";
		$value_string=" values(";
		//
		$this->emptyPK();
		$data=$this->getData();
		//
		$i=0;
		foreach ($data as $key => $value) {
			if($i==0) { $colmn_string.="".$key; $value_string.="'".$value."'"; }
			else { $colmn_string.=",".$key; $value_string.=",'".$value."'"; }
			$i++;
		}
		//
		$colmn_string.=")";
		$value_string.=")";
		//
		$sql.=$colmn_string.$value_string;
		//
		return Database::exec($sql);
		// return ($sql);
	}

	protected function getPKvalue()
	{
		$data = $this->getData();
		return $data[$this->key];
	}

	public function delete()
	{
		$key=$this->getPKvalue();
		$sql="delete from ".$this->DBtable." where ".$this->key."='".$key."'";
		//
		return Database::exec($sql);
	}

	public static function all()
	{
		$self=self::instance();
		//
		// Pagination
		//
		$sql="select * from ".$self->DBtable;
		return Database::read($sql,1);
		//return json_encode($data);
	}

	public function edit()
	{
		$sql="update ".$this->DBtable." set ";
		//
		$data=$this->getData();
		//
		$i=0;
		foreach ($data as $key => $value) 
		{
			if($i==0) { $sql.="$key='$value'"; }
			else { $sql.=",$key='$value'"; }
			$i++;
		}
		//
		$key=$this->getPKvalue();
		$sql.=" where ".$this->key."='".$key."'";
		//
		return Database::exec($sql);
	}

	public static function get($colmn,$condition,$value)
	{
		$self=self::instance();
		$rows = new ModelArray;
		$sql="select * from ".$self->DBtable." where $colmn $condition '$value'";
		$data = Database::read($sql,1);
		//
		foreach ($data as $key => $value) 
		{
			$row = self::instance();
			//
			foreach ($value as $key2 => $value2)
			{
				$row->$key2 = $value2;
			}
			//
			$rows->add( $row );
		}
		//
		return $rows;
	}

	public static function where($where)
	{
		$self=self::instance();
		$rows = new ModelArray;
		//
		$sql="select * from ".$self->DBtable." where $where ";
		$data = Database::read($sql,1);
		//
		foreach ($data as $key => $value) 
		{
			$row = self::instance();
			//
			foreach ($value as $key2 => $value2)
			{
				$row->$key2 = $value2;
			}
			//
			$rows->add( $row );
		}
		//
		return $rows;
	}

	public function hasOne($model , $local , $remote=null)
	{
		$val=$this->$local;
		if(is_object($val)) throw new ColumnNotEmptyException($local,$model);
		$mod=new $model($val);
		return $mod;
	}

	public function hasMany($model , $local , $remote)
	{
		$val=$this->$local;
		if(is_object($val)) throw new ColumnNotEmptyException($local,$model);
		$mod=new $model;
		$data=$mod->get($remote, '=' , $val);
		$data=$data->get();
		return $data;
		// //
		// if(!is_null($data))
		// {
		// 	if(count($data)==1) return $data[0];
		// 	else if(count($data)==0) return null;
		// }
		// else return null;



	}

	public function belongsTo($model , $local , $remote)
	{
		$val=$this->$local;
		$mod=new $model;
		$data=$mod->get($remote, '=' , $val);
		return $data->get();
	}

}