<?php 

namespace Fiesta\Core\Resources;

use Faker\Factory;
use Fiesta\Core\Glob\App;

/**
*  Faker class
*/
class Faker
{
	public static $Mainfaker;
	
	public static function ini()
	{
		if(is_null(App::$root))
		include_once '../core/Associates/FakerMaster/src/autoload.php';
		else include_once App::$root.'../core/Associates/FakerMaster/src/autoload.php';
		self::$Mainfaker = Factory::create();
	}

	public static function title()
	{
		return self::$Mainfaker->title;
	}

	public static function name()
	{
		return self::$Mainfaker->name;
	}

	public static function firstName()
	{
		return self::$Mainfaker->firstName;
	}

	public static function lastName()
	{
		return self::$Mainfaker->lastName;
	}

	public static function number()
	{
		return self::$Mainfaker->randomDigit;
	}

	public static function letter()
	{
		return self::$Mainfaker->randomLetter;
	}

	public static function word()
	{
		return self::$Mainfaker->word;
	}

	public static function sentence($nbWords = 6)
	{
		return self::$Mainfaker->sentence($nbWords);
	}

	public static function paragraph($nbSentences = 3)
	{
		return self::$Mainfaker->paragraph($nbSentences);
	}

	public static function text($nbParagraph = 3)
	{
		$str="";
		//
		for ($i=0; $i < $nbParagraph; $i++)
			$str.=self::$Mainfaker->paragraph(15)."<br><br>";
		//
		return $str;
	}

	public static function city()
	{
		return self::$Mainfaker->city;
	}

	public static function country()
	{
		return self::$Mainfaker->country;
	}

	public static function postcode()
	{
		return self::$Mainfaker->postcode;
	}

	public static function address()
	{
		return self::$Mainfaker->address;
	}

	public static function phone()
	{
		return self::$Mainfaker->phoneNumber;
	}

	public static function timestamp($max = 'now')
	{
		return self::$Mainfaker->unixTime($max);
	}

	public static function date($format = 'Y-m-d', $max = 'now')
	{
		return self::$Mainfaker->date($format,$max);
	}

	public static function time($format = 'H:i:s', $max = 'now')
	{
		return self::$Mainfaker->time($format,$max);
	}

	public static function ampm($max = 'now')
	{
		return self::$Mainfaker->amPm($max);
	}
	public static function day($max = 'now')
	{
		return self::$Mainfaker->dayOfWeek($max);
	}

	public static function month($max = 'now')
	{
		return self::$Mainfaker->monthName($max);
	}

	public static function year($max = 'now')
	{
		return self::$Mainfaker->year($max);
	}

	public static function century()
	{
		return self::$Mainfaker->century;
	}

	public static function timezone()
	{
		return self::$Mainfaker->timezone;
	}

	public static function email()
	{
		return self::$Mainfaker->freeEmail;
	}

	public static function user()
	{
		return self::$Mainfaker->userName;
	}

	public static function password()
	{
		return self::$Mainfaker->password;
	}

	public static function domain()
	{
		return self::$Mainfaker->domainNmae;
	}

	public static function url()
	{
		return self::$Mainfaker->url;
	}

	public static function ip()
	{
		return self::$Mainfaker->ipv4;
	}

	public static function mac()
	{
		return self::$Mainfaker->macAddress;
	}

	public static function hexcolor()
	{
		return self::$Mainfaker->hexcolor;
	}

	public static function rgb()
	{
		return self::$Mainfaker->rgbCssColor;
	}

	public static function color()
	{
		return self::$Mainfaker->safeColorName;
	}

	public static function image($width = 640, $height = 480, $categ="")
	{
		$cat="";
		$types=["abstract","animals","business","cats","city","food","nightlife","fashion","people","nature","sport","technics","transport"];
		if(in_array($categ, $types)) $cat=$categ;
		if($cat=="") return self::$Mainfaker->imageUrl($width, $height);
		else return self::$Mainfaker->imageUrl($width, $height, $categ);
	}

	public static function hash()
	{
		return self::$Mainfaker->sha1;
	}

	public static function countryCode()
	{
		return self::$Mainfaker->countryCode;
	}

	public static function languageCode()
	{
		return self::$Mainfaker->languageCode;
	}


}