<?php 

namespace Fiesta\Core\Security;

use Fiesta\Core\Config\Config;

/**
* licence class
*/
class License
{


	public static $accessed = array(
		'test1' => 'true',
		'test2' => 'true'
		);

	public static function check()
	{
		return Config::get('license.authorized');
	}

	public static function execut()
	{
		if(Config::get('license.authorized')!="true")
	  	{
	    	die (Config::get('license.webMsg'));
	  	}
	  	return "ok";
	}

	public static function access($page)
	{
		if(self::$accessed[$page]!="true")
	  	{
	    	die (Config::get('license.pageMsg'));
	  	}
	}

	public static function ini($page=null)
	{
		if(self::execut()=="ok" and Config::get('license.pageblock')=="true")
		{
			self::access($page);
		}
	}
}