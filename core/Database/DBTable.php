<?php 

namespace Fiesta\Core\Database;

use Fiesta\Core\Config\Config;
use Fiesta\Core\Objects\Table;
use Fiesta\Core\HyperText\Res;

class DBTable
{
	public $name="null";
	public $columns=array();
	public $data=array();

	//pagination data

	public $nbRows;
	public $nbPages;
	public $CurrentPage;
	public $RowsPerPage;

	//
	function __construct($name) {
		$this->name = $name;
		//
		$columns=Database::read("select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".Config::get('database.database')."' AND TABLE_NAME = '".$name."';");
		//
		foreach ($columns as $key => $value) {
			Table::push($this->columns,$value['COLUMN_NAME']);
		}
	}

	public function insert($array)
	{
		$ok=false;
		
		if(count($array)>0)
		{
			foreach ($array as $subarray) {
				if(count($subarray)>0)
				{
					$sql="insert into ".$this->name." ";
					$col="(";
					$vals="(";
					//
					$i=0;
					foreach ($subarray as $key => $value) {
						if($i>0) { $col.=","; $vals.=",";}
						$col.=$key;
						$vals.="'$value'";
						$i++;
					}
					//
					$col.=")";
					$vals.=")";
					//
					$sql.=$col." values".$vals.";";
					//
					Database::exec($sql);
					//
					$ok=true;
					//
					
				}
			}
		}
		//
		return $ok;
	}

	public function update($cond,$array)
	{
		$ok=false;
		
		if(count($array)>0)
		{
			foreach ($array as $subarray) {
				if(count($subarray)>0)
				{
					$sql="update ".$this->name." set ";
					$val="";
					//
					$i=0;
					foreach ($subarray as $key => $value) {
						if($i>0) $val.=","; 
						$val.=$key."='".$value."'";
						$i++;
					}
					//
					$sql.=$val." where ".$cond.";";
					//
					Database::exec($sql);
					//
					$ok=true;
				}
			}
		}
		//
		return $ok;
	}

	public function delete($cond)
	{
		$ok=false;
		$sql="delete from ".$this->name." where ".$cond;
		Database::exec($sql);
		$ok=true;
		return $ok;
	}



	public function clear()
	{
		Database::exec('TRUNCATE TABLE '.$this->name.';');
	}

	public function all($sql="")
	{
		if(empty($sql)){
			$sql="select * from ".$this->name;
		}
		//
		$this->data=Database::read($sql);
		return $this->data;
	}
	
	public function paginate($RowsPerPage)
	{

		// count data
		$sql="select count(*) as nbRows from ".$this->name;
		$var=Database::read($sql);
		$this->RowsPerPage=$RowsPerPage;
		$this->nbRows=$var[0]['nbRows'];
		$this->nbPages=ceil($this->nbRows/$RowsPerPage);

		//if isset get
		$this->CurrentPage=1;
		if(isset($_GET[Config::get('view.pagination_param')]) && !empty($_GET[Config::get('view.pagination_param')]))
			if($_GET[Config::get('view.pagination_param')]>0 && $_GET[Config::get('view.pagination_param')]<=$this->nbPages)
				$this->CurrentPage=Res::get(Config::get('view.pagination_param'));

		//get Data
		$r = array();
		$sql="select * from ".$this->name." Limit ".(($this->CurrentPage-1)*$this->RowsPerPage).",$this->RowsPerPage";
		$this->data=Database::read($sql);
		//

		return $this;
	}

}