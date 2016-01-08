<?php 

namespace Fiesta\Core\Http;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Config\Config;

/**
* Menu class
*/
class Menu
{
	public static $bigOne = array();
	
	
	public static function ini($root=""){ 
		$files	=	glob($root."../app/modules/*", GLOB_ONLYDIR);
		$T		=	array();
		foreach ($files as $key => $filename){
			$T[$key] = include $root.$filename."/config.php";
		}
		self::$bigOne = $T;
		return self::$bigOne; 
	}
			
	public static function MenuContainer(){ 
		return include "../app/config/menu.php"; 
	}
	
	public static function getMenuByGroup($group){ 
		if(!is_array($group)){
			$files	=	glob("../app/modules/*", GLOB_ONLYDIR);
			$T		=	array();
			foreach ($files as $key => $filename){
				$F = include $filename."/config.php";
				if(count($F['menu'])>0)
					if($F['container'] == $group)
						if($F['etat'] == "active")
							$T[$key] = $F['menu'];
			}
			return  array_values($T); 
		}else{
			if(Config::get('database.prefixing')){
				$data = Database::read("select * from  ".Config::get('database.prefixe').$group['table']." where id='".$group['id']."'", 1);
				$data = $data[0];
				$menu = unserialize(base64_decode($data["content"]));
			}else{
				$data = Database::read("select * from  ".$group['table']." where id='".$group['id']."'", 1);
				$data = $data[0];
				$menu = unserialize(base64_decode($data["content"]));
			}
			if(count($menu)>0){
				return $menu;
			}else{
				return "Error";
			}
		}
	}
	
	public static function add($menu = null){
		if(!is_null($menu) && is_array($menu))
		self::$bigOne = array_merge(include "../app/config/menu.php",$menu);
	}
	
	public static function show(){
		return self::$bigOne;
	}

}