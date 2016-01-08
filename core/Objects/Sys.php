<?php 

namespace Fiesta\Core\Objects;

/**
* System Class
*/
class Sys
{
	public static $root;
	public static $base;
	public static $path;
	public static $app;
	public static $libs;

	public static function ini()
	{
		$path="$_SERVER[REQUEST_URI]";
		$paths=explode('/', $path);
		$root="";
		$base="";
		
		self::$root=$root;
		self::$base=$base;
		self::$app="../app";
		//
		self::$path="http://$_SERVER[HTTP_HOST]/";
	}
}

