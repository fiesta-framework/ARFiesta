<?php 

namespace Fiesta\Core\Http;

use Fiesta\Core\Config\Config;

/**
* erreur class
*/

class Errors
{

	public static $r_400;
	public static $r_401;
	public static $r_402;
	public static $r_403;
	public static $r_404;
	public static $r_405;
	public static $r_406;
	public static $r_407;
	public static $r_408;
	public static $r_409;
	public static $r_410;
	public static $r_411;
	public static $r_412;
	public static $r_413;
	public static $r_414;
	public static $r_415;
	public static $r_416;
	public static $r_417;
	public static $r_418;
	public static $r_422;
	public static $r_423;
	public static $r_424;
	public static $r_425;
	public static $r_426;
	//
	public static $r_500;
	public static $r_501;
	public static $r_502;
	public static $r_503;
	public static $r_504;
	public static $r_505;
	public static $r_507;
	public static $r_509;
	public static $r_db;
	//
	//
	public static function ini($root=null)
	{
		//
		self::$r_400=Config::get("error.400");
		self::$r_401=Config::get("error.401");
		self::$r_402=Config::get("error.402");
		self::$r_403=Config::get("error.403");
		self::$r_404=Config::get("error.404");
		self::$r_405=Config::get("error.405");
		self::$r_406=Config::get("error.406");
		self::$r_407=Config::get("error.407");
		self::$r_408=Config::get("error.408");
		self::$r_409=Config::get("error.409");
		self::$r_410=Config::get("error.410");
		self::$r_411=Config::get("error.411");
		self::$r_412=Config::get("error.412");
		self::$r_413=Config::get("error.413");
		self::$r_414=Config::get("error.414");
		self::$r_415=Config::get("error.415");
		self::$r_416=Config::get("error.416");
		self::$r_417=Config::get("error.417");
		self::$r_418=Config::get("error.418");
		self::$r_422=Config::get("error.422");
		self::$r_423=Config::get("error.423");
		self::$r_424=Config::get("error.424");
		self::$r_425=Config::get("error.425");
		self::$r_426=Config::get("error.426");
		//
		self::$r_500=Config::get("error.500");
		self::$r_501=Config::get("error.501");
		self::$r_502=Config::get("error.502");
		self::$r_503=Config::get("error.503");
		self::$r_504=Config::get("error.504");
		self::$r_505=Config::get("error.505");
		self::$r_507=Config::get("error.507");
		self::$r_509=Config::get("error.509");
		self::$r_db=Config::get("error.database");
		//
	}

	public static function r_db()
	{
		header("location:".self::$r_db);
	}

	public static function r_400()
	{
		header("location:".self::$r_400);
	}
	public static function r_401()
	{
		header("location:".self::$r_401);
	}
	public static function r_402()
	{
		header("location:".self::$r_402);
	}
	public static function r_403()
	{
		header("location:".self::$r_403);
	}
	public static function r_404()
	{
		header("location:".self::$r_404);
	}
	public static function r_405()
	{
		header("location:".self::$r_405);
	}
	public static function r_406()
	{
		header("location:".self::$r_406);
	}
	public static function r_407()
	{
		header("location:".self::$r_407);
	}
	public static function r_408()
	{
		header("location:".self::$r_408);
	}
	public static function r_409()
	{
		header("location:".self::$r_409);
	}
	public static function r_410()
	{
		header("location:".self::$r_410);
	}
	public static function r_411()
	{
		header("location:".self::$r_411);
	}
	public static function r_412()
	{
		header("location:".self::$r_412);
	}
	public static function r_413()
	{
		header("location:".self::$r_413);
	}
	public static function r_414()
	{
		header("location:".self::$r_414);
	}
	public static function r_415()
	{
		header("location:".self::$r_415);
	}
	public static function r_416()
	{
		header("location:".self::$r_416);
	}
	public static function r_417()
	{
		header("location:".self::$r_417);
	}
	public static function r_418()
	{
		header("location:".self::$r_418);
	}
	public static function r_422()
	{
		header("location:".self::$r_422);
	}
	public static function r_423()
	{
		header("location:".self::$r_423);
	}
	public static function r_424()
	{
		header("location:".self::$r_424);
	}
	public static function r_425()
	{
		header("location:".self::$r_425);
	}
	public static function r_426()
	{
		header("location:".self::$r_426);
	}
	public static function r_500()
	{
		header("location:".self::$r_500);
	}
	public static function r_501()
	{
		header("location:".self::$r_501);
	}
	public static function r_502()
	{
		header("location:".self::$r_502);
	}
	public static function r_503()
	{
		header("location:".self::$r_503);
	}
	public static function r_504()
	{
		header("location:".self::$r_504);
	}
	public static function r_505()
	{
		header("location:".self::$r_505);
	}
	public static function r_507()
	{
		header("location:".self::$r_507);
	}
	public static function r_509()
	{
		header("location:".self::$r_509);
	}
}