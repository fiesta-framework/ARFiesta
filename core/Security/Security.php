<?php 

namespace Fiesta\Core\Security;

/**
* Security class
*/
class Security
{
	// Short Token
	public static function stoken($value,$salt)
	{
		$token=sha1(md5($value."Df5@4".$salt)).md5($value.$salt);
		//
		return $token;
	}

	// Long Token
	public static function ltoken($value,$salt)
	{
		$token=sha1(md5($value."Df5@4".$salt)).md5($value.$salt."gF5#4").sha1(md5(md5($salt.$value."pO3%5")));
		//
		return $token;
	}

	// Encrypt string
	public static function encrypt($value,$salt)
	{
		$v=sha1(md5($value."Df5@4".$salt)).md5(sha1($value.$salt."gF5#4"));
		//
		return $v;
	}
}