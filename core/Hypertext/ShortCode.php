<?php

namespace Fiesta\Core\HyperText;
use Fiesta\Core\Config\Config;
use Fiesta\Core\Database\DBTable;
use Fiesta\Core\MVC\View\View;

/**
* ShortCode class
*/
class ShortCode {
	
	public static function add_shortcode($string){
		$shortcode = self::get($string);
		if(is_array($shortcode) && $shortcode != false){
			if(count($shortcode)>1){
				
			}else{
				if(!self::checkModule($shortcode[0]['module'],$shortcode[0]['backend'])){
					echo "[View introuvable]";
				}else{
					$view = array(
						"view"		=> $shortcode[0]['module'].".".$shortcode[0]['view'],
						"backend"	=> $shortcode[0]['backend']
					);
					$content = View::get($view, null);
					echo $content;
				}
			}
		}else{
			echo ("Erreur");
		}
	}
	
	public static function checkModule($name,$backend = true){
		$themename 		= Config::get('themes.name');
		$themenameFront = Config::get('themes.nameFrontEnd');
		if($backend){
			if(is_dir("../app/themes/$themename/modules/$name/shortcode")){
				return true;
			}
			return false;
		}else{
			if(is_dir("../themes/$themenameFront/modules/$name/shortcode")){
				return true;
			}
			return false;
		}
	}
	
	public static function get($string=null){
		if(!is_null($string)){
			preg_match_all("/module id=([0-9]+) name=([a-zA-Z]+) view=([a-zA-Z.]+) backend=([0-9]+)?]/", $string, $output_array);
			$array = array();
			foreach($output_array[1] as $key => $val){  
				$array[] = array(
					"id"		=> $val,
					"module"	=> $output_array[2][$key],
					"view"		=> $output_array[3][$key],
					"backend"	=> $output_array[4][$key],
				);
			}
			return $array;
		}
		return false;
	}
}
