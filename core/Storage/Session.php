<?php

namespace Fiesta\Core\Storage;

use Fiesta\Core\Security\Hash;

/**
* Session class
*/
class Session
{
	public static function start($link=null)
	{
		//ini_set('session.save_path', '/app/storage/seesion');
		session_save_path ($link);
		session_start();
	}

	public static function put($key,$value)
	{
		$_SESSION[$key]=$value;
		return $value;
	}

	public static function get($key)
	{
		self::expire();
		//
		if(self::existe($key))
		return $_SESSION[$key];
		//else return null;
	}

	public static function expire($minutes=15)
	{
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutes*60))) {
		    session_unset();     // unset $_SESSION variable for the run-time 
		    session_destroy();   // destroy session data in storage
		}
		$_SESSION['LAST_ACTIVITY'] = time();
	}

	public static function forget($key)
	{
		self::expire();
		//
		if(self::existe($key))
		unset($_SESSION[$key]);
	}

	public static function existe($key)
	{
		self::expire();
		//
		$ok=false;
		if(isset($_SESSION[$key]) && !empty($_SESSION[$key])) $ok=true;
		return $ok;
	}

	public static function all()
	{
		self::expire();
		//
		return $_SESSION;
	}

	public static function token()
	{
		$token_name="#eyuD#BR@w";
		$token="";
		//
		if(self::existe($token_name))
		{
			$token=self::get($token_name);
		}
		else
		{
			$token=Hash::token();
			//
			self::put($token_name,$token);
		}
		return $token;
	}
}