<?php

namespace Fiesta\Core\Security;

use Fiesta\Core\Config\Config;

/**
*
*/
class Hash
{
	public static function make($value)
	{
		$salt1=Config::get('security.key1');
		$salt2=Config::get('security.key2');
		//
		$v=sha1(md5($value."Ysfhad".$salt1)).md5(sha1($value."Fiesta".$salt2).md5(sha1($value."ipixa".$salt2.$salt1)));
		//
		return $v;
	}

	public static function check($value,$hash)
	{
		$ok=false;
		if(self::make($value)==$hash) $ok=true;
		return $ok;
	}

	public static function rememberToken($array=null)
	{
		$str="";
		//
		if(is_array($array))
		foreach ($array as $key => $value) {
			$str=$key.$value;
		}
		else if(is_string($array) || is_numeric($array)) $str=str_shuffle("Youssef Had".$array.time()."token".Config::get('security.key1'));
		else if(is_null($array) || empty($array)) {$str="Youssef Had".$array.time()."token".Config::get('security.key1')."Fiesta".Config::get('security.key2').time().self::random();$str=str_shuffle($str);}
		//
		$token=self::make($str);
		return $token;
	}

	public static function random($length = 32) {
	    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ+-*#&@!?";
	    $validCharNumber = strlen($validCharacters);

	    $result = "";

	    for ($i = 0; $i < $length; $i++) {
	        $index = mt_rand(0, $validCharNumber - 1);
	        $result .= $validCharacters[$index];
	    }

	    return $result;
	}

	public static function token()
	{
		$str=self::random(32);
		//
		$token=self::make($str);
		return $token;
	}
}
