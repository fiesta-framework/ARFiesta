<?php 

/**
* Cookies Class
*/
class Cookie2
{
	public static function get($name)
	{
		$var=null;
		if(isset($_COOKIE[$name]))
		if(!empty($_COOKIE[$name])) $var=$_COOKIE[$name];
		return $var;
	}

	public static function create($name,$value=NULL,$time=NULL,$url='/')
	{
		if(empty($time)) $time=time()+3600;
		return setcookie($name,$value,$time,$url);
	}
}