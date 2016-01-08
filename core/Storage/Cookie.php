<?php 

namespace Fiesta\Core\Storage;

/**
* cookies
*/
class Cookie
{
	public static function create($name,$value,$minute = 0,$path="/")
	{
		$expire=time()+self::time($minute);

		//
		if($path==null)
			setcookie($name,$value,$expire);
		else 
			setcookie($name,$value,$expire,$path);
	}

	public static function existe($name)
	{
		if(isset($_COOKIE[$name]) && !empty($_COOKIE[$name]))
			return true;
		else return false;
	}

	public static function get($name)
	{
		if(self::existe($name))
			return $_COOKIE[$name];
		else return null;
	}

	public static function forget($name)
	{
		echo $name;
		
		//setcookie($name, false, time()-3000);
		setcookie($name, '', time() - 999999, '/' );
		unset($_COOKIE[$name]);
	}

	private static function time($minute)
	{
		return $minute * 60;
	}
}