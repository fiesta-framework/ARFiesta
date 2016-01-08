<?php

/**
* Smarty Templete class
*/
class Templete
{
	public static $smarty;


	public static function ini($root="")
	{
		require_once $root.'../core/Associates/Smarty/Smarty.class.php';
		//
		self::$smarty=new Smarty;
		//
		self::$smarty->compile_check 	= true;
		self::$smarty->force_compile 	= true;
		self::$smarty->debugging 	 	= false;
		self::$smarty->caching 			= false;
		self::$smarty->use_sub_dirs		= false;
		self::$smarty->cache_lifetime 	= 120;
		self::$smarty->left_delimiter 	= '{';
		self::$smarty->right_delimiter 	= '}';
		self::$smarty->smarty_debug_id 	= 'SMARTY_DEBUG';
		self::$smarty->clearAllCache(3600);
		// Smarty::muteExpectedErrors();

		self::$smarty->setCompileDir($root.'../app/storage/view/template');
		self::$smarty->setCacheDir($root.'../app/storage/view/cache');
		self::$smarty->setPluginsDir(array(
			$root.'../app/themes/'.Config::get('themes.name').'/_plugins',
			$root.'../core/Associates/Smarty/plugins'
		));
	}

	public static function show($view,$data=null,$items=null){
		if(!is_null($data)){
			if(!is_null($items)){
				self::Appends($data ,$items);
			}else{
				foreach ($data as $key => $value){
					self::$smarty->assign($key, $value);
				}
			}
		}
		return self::$smarty->display($view);
	}
	
	public static function Appends($data = array(),$item){
		foreach($data as $value){
			self::$smarty->append($item, $value);
		}
    }
}
