<?php 

/**
* 
*/
 class EmptyClass
{
	
}

/**
* controler
*/
class Model2
{
	public $table="post";
	public $columns = array();
	public $keys = array();
	//
	private $pagination_info=array();

	/*public $keys2 = array();
	public $values = array();*/


	public function set($table)
	{
		$this->table=$table;
		//
		$this->keys();
		Base::table($this->keys);
		//
		$u=Database::read("select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".Config::get('database.database')."' AND TABLE_NAME = '".$this->table."';");
		//
		foreach ($u as $key => $value) {
			$this->columns[$value[0]]="";
		}
		//
		foreach ($this->columns as $key => $value)
		{
		    $this->key = $value;
		}
	}

	public function ini()
	{
		//
		$this->keys();
		//
		$u=Database::read("select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".Config::get('database.database')."' AND TABLE_NAME = '".$this->table."';");
		//
		foreach ($u as $key => $value) {
			$this->columns[$value[0]]="";
		}
		//
		foreach ($this->columns as $key => $value)
		{
		    $this->key = $value;
		}
		// echo "select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".Config::get('database.database')."' AND TABLE_NAME = '".$this->table."'";
		// die();
	}

	function __construct($id=null,$tbl=null)
	{
		//
		if(empty($tbl))$this->table=$this->tbl();
		else $this->table=$tbl;
		//
		$this->ini();

		if(empty($id))
		{
			
		}
		else
		{
			$sql="select * from ".$this->table." where ".$this->keys[0]."='".$id."' ";
			//echo "*".$sql;
			$u=Database::read($sql);
			
			foreach ($u[0] as $key => $value) {
				$this->columns[$key]="";
				$this->$key = $value;
			}

		}
	}


	function keys()
	{
		$this->keys=array();
		//
		$y=Database::read("SHOW INDEX FROM ".$this->table." WHERE `Key_name` = 'PRIMARY'");
		//

		foreach ($y as $key => $value) {
			array_push($this->keys, $y[$key]["Column_name"]);
		}
		
	}

	

	public static function find($id1=1,$id2=null,$id3=null)
	{
		$pp=static::$reference;
		//echo self::$table;

		//self::keys();
		//print_r(self::$keys);
		//self::$keys=array(); 
		$o=new self($pp);
		//print_r(get_object_vars($o));
		//echo "<br>";
		//print_r(self::$keys);
		//
		$ids = array($id1,$id2,$id3);
		//
		$sql=null;
		$sql="select * from ".$o->table." ";
		if(count($o->keys)<3)
		{
			$i=0;
			foreach ($o->keys as  $value) {
				if($i>0) $sql.=" and ";
				if($i==0) $sql.=" where ";
				$sql.=" ".$o->keys[$i]."='".$ids[$i]."' ";
				$i++;
			}
		}

		$r=Database::read($sql);
		//
		$nums = array();
		for ($i=0; $i < 201; $i++) $nums[]=$i; 
		
			$i=0;
		foreach ($r[0] as $key => $value)
		{
			if(($i%2)!=0)
			{
		    $o->$key = $value;
			$o->values[$key] = $value;
			}

		$i++;
		}
		//print_r(get_object_vars($o));
		//echo "<br><br>";

		
		return $o;		
	}

	function rows()
	{
		$vars = array();
		$default_keys = array('table','columns','keys','keys2','values','key','pagination_info');
		foreach (get_object_vars($this) as $key => $value) {
			if(!in_array($key,$default_keys))
			{
				$vars[$key]=$value; //echo $key."<br>";
			}
		}
		return $vars;
	}

	static function tbl()
	{
		return static::$reference;
	}

	public function add()
	{
		$sql="insert into ".$this->table." ";
		//
		$vars=$this->rows();
		//var_dump($vars);
		//
		$c="(";
		$v=" values(";
		//
		$i=0;
		foreach ($vars as $key => $value) {
			if($i==0) { $c.="".$key; $v.="'".$value."'"; }
			else { $c.=",".$key; $v.=",'".$value."'"; }
			$i++;
		}
		//
		$c.=")";
		$v.=")";
		//
		$sql.=$c.$v;
		//
		return Database::exec($sql);
	}

	public function edit($where=null)
	{
		//print_r(get_object_vars($this));

		$sql="update ".$this->table." set ";
		//
		//$vars=get_object_vars($this->values);
		$vars = array();
		$default_keys = array('table','columns','keys','keys2','values','key');
		foreach (get_object_vars($this) as $key => $value) {
			if(!in_array($key,$default_keys))
			{
				if(!is_int($key))
				$vars[$key]=$value; //echo $key."<br>";
			}
		}
		//
		$i=0;
		$c="";
		//
		foreach ($vars as $key => $value) 
		{
			if($i==0) { $sql.="$key='$value'"; }
			else { $sql.=",$key='$value'"; }
			$i++;
		}


		//
		//
		if(!empty($where))
		{
			$sql.=" where ".$where;
		}
		else
		{
			$sql.=" where ";
			//
			$i=0;
			//
			
			//
			foreach ($this->keys as $key => $value) {
				if($i==0) { $sql.="$value='".$vars[$value]."'"; }
				else { $sql.=" && $value='".$vars[$value]."'"; }
				$i++;
			}
		}
		//
		//echo $sql."<br><br>";
		/*echo "<pre>";
		print_r($vars);
		echo "</pre>";*/
		//echo $sql;
		//Database::exec($sql)."*<br>$sql";
		return Database::exec($sql);
		//echo $sql."<br><br><br>";
	}

	public function delete($where=null)
	{
		//print_r(self::$keys);
		$vars=$this->rows();
		if(empty($where))
		{
			$sql="delete from ".$this->table." where ";
			//
			$i=0;
			//
			foreach ($this->keys as $key => $value) {
				if($i==0) { $sql.="$value='".$vars[$value]."'"; }
				else { $sql.=" && $value='".$vars[$value]."'"; }
				$i++;
			}

		}
		else
		{
			$sql="delete from ".$this->table." where ";
			$sql.=$where;
			//
		}
		//echo $sql;
		return Database::exec($sql);
	}

	public function get($key,$value,$order_c=null,$order_mtd="asc",$limit=null)
	{
		$r = array();

		$sql="select ".$this->keys[0]." from ".$this->table." where ".$key."='".$value."' ";
		if(!empty($order_c)) $sql.=" order by ".$order_c." ".$order_mtd;
		if(!empty($limit)) $sql.=" limit ".$limit;
		//echo $sql;
		$var=Database::read($sql);

		foreach ($var as $key => $value) {
			//echo $value[0];
				$o=new self($value[0],$this->table);
				//print_r(get_object_vars($o));
				array_push($r, $o);
			}

		return $r;
	}

	public function all()
	{
		$r = array();
		$this->pagination_info["activated"]=false;
		//
		$sql="select * from ".$this->table;
		//echo $sql;
		//
		$var=Database::read($sql);
		//
		foreach ($var as $key => $value) {
				$o=new self($value[0],$this->table);
				array_push($r, $o);
			}
		//
		return $r;
	}

	public function paginate($num)
	{
		
		//
		// count data
		$sql="select count(*) as nbRows from ".$this->table;
		$var=Database::read($sql);
		$nbRows=$var[0]['nbRows'];
		$nbPages=ceil($nbRows/$num);
		//
		//if isset get
		$page=1;
		if(isset($_GET[Config::get('view.pagination_param')]) && !empty($_GET[Config::get('view.pagination_param')]))
			if($_GET[Config::get('view.pagination_param')]>0 && $_GET[Config::get('view.pagination_param')]<=$nbPages)
				$page=Res::get(Config::get('view.pagination_param'));
		//
		$r = array();
		//
		$sql="select * from ".$this->table." Limit ".(($page-1)*$num).",$num";
		$var=Database::read($sql);

		foreach ($var as $key => $value) {
			//echo $value[0];
				$o=new self($value[0],$this->table);
				//print_r(get_object_vars($o));
				array_push($r, $o);
			}
		//
		// call the data array
		$g=new DataArray($r,true,$nbRows,$num,$page);
		return $g;
	}

	public function pagination($RowsPerPage)
	{
		$table=new DBTable($this->table);
		//
		$dbtable=$table->paginate($RowsPerPage);
		//
		//Table::show($dbtable);
		$data = array();
		foreach ($dbtable->data as $key => $value) {
			$row=new self($value[0],$this->table);
			array_push($data, $row);
		}
		//params
		$nbRows=$dbtable->nbRows;
		//
		$collection=new DataCollection($data,true,$dbtable->nbRows,$RowsPerPage,$dbtable->CurrentPage);
		//
		return $collection;
	}

	public function hasOne($model,$local,$remote)
	{
		$val=$this->$local;
		$mod=new $model;
		return $mod->get($remote,$val);
	}

	public function belongsTo($model,$local,$remote)
	{
		$val=$this->$local;
		$mod=new $model;
		return $mod->get($remote,$val);
	}
}



