<?php 

namespace Fiesta\Core\Database;

use Fiesta\Core\Filesystem\Filesystem;
use Fiesta\Core\Objects\Table;
/**
* migaration class
*/
class Migration
{
	
	protected static $schemas;
	public static function getAll($name, $module)
	{
		$r	=	glob("../app/modules/$module/Schemas/*.php");
		$r2	=	array();
		foreach ($r as $value) {
			
			$temp=explode("_",$value);
			
			$temp2=explode(".",$temp[1]);
			
			$r2[]=$temp2[0];
			
		}
		$r3	=	array_unique($r2);
		//
		$content =  "<div class='form-group col-md-7' style='display:block'><select name=".$name." class='form-control'>";
		foreach ($r3 as $value) {
			$content .= "<option value='".$value."'>".$value."</option>";
		} 
		$content .= "</select></div>";
		return $content;
	}

	protected static function createRegister($root,$module)
	{
		if(!(new Filesystem)->exists($root.'../app/modules/'.$module.'/Schemas/.register'))
			(new Filesystem)->put($root.'../app/modules/'.$module.'/Schemas/.register',"");
	}
	
	protected static function setRegister($array,$root,$module)
	{
		self::createRegister($root,$module);
		//
		$s = serialize($array);
		//
		file_put_contents($root.'../app/modules/'.$module.'/Schemas/.register', $s);
		//
		
	}

	protected static function getRegister($root, $module)
	{
		self::createRegister($root, $module);
		//
		$f=file_get_contents($root.'../app/modules/'.$module.'/Schemas/.register');
		$data = @unserialize($f);
		$data = !($data) ? array() : $data ;
		//
		return $data;
	}

	public static function updateRegister($name,$state="init",$root, $module)
	{
		$data = self::getRegister($root, $module);
		
		//
		$existe=false;
		//

		for ($i=0; $i < count($data); $i++) { 
			if($data[$i]["name"]==$name)
			{
				$existe=true;
				$data[$i]["state"]=$state;
				$data[$i]["exec"]=time();
				
			}
		}
		//
		if(!$existe) $data[]=array("name" => $name , "state" => $state , "exec" => time()); 
		
		//
		self::setRegister($data,$root,$module);
		self::checkRegister($root,$module);
		//
		return $data;
	}

	public static function checkRegister($root,$module)
	{
		$data = self::getRegister($root,$module);
		//
		$schemas = self::getSchemas($root,$module);
		//
		// contains
		for ($i=0; $i < Table::count($data); $i++)
		{ 
			if( ! Table::contains($schemas,$data[$i]['name']))
			{
				$data[$i]['state']="droped";
				$data[$i]['exec']=time();
			}
		}
		//
		self::setRegister($data,$root,$module);
		

	}

	protected static function getSchemas($root,$module)
	{
		$f=glob($root.'../app/modules/'.$module.'/Schemas/*.php');
		$sch = array();
		//
		foreach ($f as $value) {
			$t=explode("/", $value);
			$t=$t[Table::count($t)-1];
			$t=explode(".php", $t);
			$t=$t[0];
			$sch[]=$t;
		}
		//
		return $sch;
	}


	
}