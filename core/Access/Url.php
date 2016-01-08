<?php 

namespace Fiesta\Core\Access;

use Fiesta\Core\Config\Config;

/**
* Url class
*/
class Url
{
	public static $css;
	public static $js;
	public static $img;

	public static function redirect($url)
	{
		$link="";
		if ($url[0] == "@") {
		    $link=Config::get('app.url').substr($url, 1);;
		    echo $link."<br>";
		    echo $url;
		}
		else
		{
			$link=$url;
		    echo $link;
		}
		header("location:".$link);
	}

	public static function ini()
	{
		// self::$css=Config::get('app.url')."app/resources/css/";
		// self::$js=Config::get('app.url')."app/resources/js/";
		// self::$img=Config::get('app.url')."app/resources/images/";

		self::$css="../app/resources/css/";
		self::$js="../app/resources/js/";
		self::$img="../app/resources/images/";
	}
}
