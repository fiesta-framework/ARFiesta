<?php

namespace Fiesta\Core\MVC\View;
use Fiesta\Core\Config\Config;
use Fiesta\Core\MVC\View\Exception\ViewNotFoundException;

/**
* View mother class
*/
class Views {
	public static $showed;

	public static function make($value,$data,$items=null){
		if(is_array($data)){
			foreach ($data as $key => $value2) {
				$$key=$value2;
			}
		}
		if(is_array($value)){
			//getFile
			if($value['backend']){
				$themename = Config::get('themes.name');
				
				$simpleFile = Config::get('themes.path');
				$simpleFile = str_replace('{themeName}', $themename, $simpleFile);
				$smartyFile = Config::get('themes.path');
				$smartyFile = str_replace('{themeName}', $themename, $smartyFile);
			}else{
				$themename =  Config::get('themes.nameFrontEnd');
				
				//PHP VIEW
				$simpleFile = Config::get('themes.pathFront');
				$simpleFile = str_replace('{themeName}', $themename, $simpleFile);
				
				//TPL VIEW
				$smartyFile = Config::get('themes.pathFront');
				$smartyFile = str_replace('{themeName}', $themename, $smartyFile);
			}
			$name		= str_replace('.', '/', $value['view']);
			$simpleFile = str_replace('{viewName}', $name, $simpleFile);
			$simpleFile = str_replace('{fileExtention}', "php", $simpleFile);
			
			$smartyFile = str_replace('{viewName}', $name, $smartyFile);
			$smartyFile = str_replace('{fileExtention}', "tpl", $smartyFile);
			//
			$link1		= $simpleFile;
			$link2		= $smartyFile;
			//
			$tpl=false;
			//
			if(file_exists($link1)) { $link3=$link1; $tpl=false; }
			else if(file_exists($link2)) { $link3=$link2; $tpl=true; }
			else { throw new ViewNotFoundException($name); }

			if($tpl){
				self::$showed="tpl";
				Template::show($link3,$data,$items);
			}else{
				self::$showed="smpl";
				include($link3);
			}
		}
	}

	public static function get($value_DGFSrtfg5,$data_kGdfgdf,$items=null){
		if(is_array($data_kGdfgdf))
		{
			foreach ($data_kGdfgdf as $key => $value2) {
				$$key=$value2;
			}
		}
		if(is_array($value_DGFSrtfg5)){
			if($value_DGFSrtfg5['backend']){
				$themename = Config::get('themes.name');
				
				$simpleFile = Config::get('themes.path');
				$simpleFile = str_replace('{themeName}', $themename, $simpleFile);
				$smartyFile = Config::get('themes.path');
				$smartyFile = str_replace('{themeName}', $themename, $smartyFile);
			}else{
				$themename =  Config::get('themes.nameFrontEnd');
				
				//PHP VIEW
				$simpleFile = Config::get('themes.pathFront');
				$simpleFile = str_replace('{themeName}', $themename, $simpleFile);
				
				//TPL VIEW
				$smartyFile = Config::get('themes.pathFront');
				$smartyFile = str_replace('{themeName}', $themename, $smartyFile);
			}
			ob_start();    // start output buffering
			//get File
			$name_fgdfgdf=str_replace('.', '/', $value_DGFSrtfg5['view']);
			$simpleFile = str_replace('{viewName}', $name_fgdfgdf, $simpleFile);
			$simpleFile = str_replace('{fileExtention}', "php", $simpleFile);
			$smartyFile = str_replace('{viewName}', $name_fgdfgdf, $smartyFile);
			$smartyFile = str_replace('{fileExtention}', "tpl", $smartyFile);
			$link1		= $simpleFile;
			$link2		= $smartyFile;
			$tpl		= false;
			if(file_exists($link1)){ 
				$link3	=	$link1; 
				$tpl	=	false; 
			}else if(file_exists($link2)){ 
				$link3	= $link2; 
				$tpl	= true; 
			}else{ 
				$link3	= $name_fgdfgdf; 
				$tpl	= false; 
			}
			//Show the output
			if($tpl){
				self::$showed="tpl";
				Template::show($link3,$data_kGdfgdf,$items);
			}else{
				self::$showed="smpl";
				include($link3);
			}
			$returned_value = ob_get_contents();    // get contents from the buffer
			ob_end_clean();
			return $returned_value;
		}else{
			return false;
		}
	}


}
