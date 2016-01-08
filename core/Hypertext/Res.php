<?php 

namespace Fiesta\Core\HyperText;

/**
* Ressources Clas
*/
class Res
{
	public static function post($key)
	{
		if(!empty($_POST[$key]) && isset($_POST[$key]))
			return $_POST[$key];
		else return null;
	}

	public static function get($key)
	{
		return $_GET[$key];
	}

	public static function session($key)
	{
		return $_SESSION[$key];
	}

	public static function stpost($key,$value)
	{
		$_POST[$key]=$value;
	}

	public static function stget($key,$value)
	{
		$_GET[$key]=$value;
	}

	public static function stsession($key,$value)
	{
		$_SESSION[$key]=$value;
	}

	public static function isPost()
	{
		if(!empty($_POST) && isset($_POST))
			return true;
		else return false;
	}
}