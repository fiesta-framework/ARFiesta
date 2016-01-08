<?php 

namespace Fiesta\Core\Access;

use Fiesta\Core\Filesystem\Filesystem;

/**
* System Class
*/
class Path
{
	public static $root;
	public static $host;
	public static $base;
	public static $path="1";
	//
	public static $app;
	public static $core;
	public static $public;
	//
	public static $libs;

	public static function ini()
	{
		$path="$_SERVER[REQUEST_URI]";
		$paths=explode('/', $path);
		$root="";
		$base="";
		//
		self::$root=self::getRoot();
		self::$host=self::getHost();
		self::$base=self::$host.self::$root;
		//
		self::$app=self::$host.self::$root."app";
		//self::$app="app";
		self::$core=self::$host.self::$root."core";
		self::$public=self::$host.self::$root."public";
		//
		self::$path="http://$_SERVER[HTTP_HOST]/";
	}

	public static function getRoot()
	{
		$root="$_SERVER[REQUEST_URI]";
		$parts=explode("/", $root);
		//
		$folder="";
		//
		for ($i=1; $i < count($parts) ; $i++) 
		{
			$folder.=$parts[$i]."/";
			if( ! (new Filesystem)->isDirectory($folder)) break;
		}
		//
		return $folder;
	}

	public static function getHost()
	{
		return "http://$_SERVER[HTTP_HOST]/";
	}

}

