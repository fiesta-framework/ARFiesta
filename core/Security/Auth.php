<?php 

namespace Fiesta\Core\Security;

use Fiesta\Core\Config\Config;
use Fiesta\Core\Objects\Table;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Storage\Session;
use Fiesta\Core\Storage\Cookie;

/**
* Authentification class
*/
class Auth
{
	
	private static $hashedFields;
	private static $table;

	public static function ini()
	{
		self::$hashedFields	=	Config::get('auth.hashed_fields');
		self::$table		=	Config::get('auth.table');
	}

	public static function attempt($array,$remember=false)
	{

		//Table::show(self::$hashedFields);
		//
		$hashed = array();
		//
		foreach ($array as $key => $value) {
			if(Table::contains(self::$hashedFields,$key))
			{
				Table::add($hashed,Hash::make($array[$key]),$key);
			}
		}
		//
		//Table::show($hashed);
		//
		$where="";
		$ok=false;
		//
		$i=0;
		foreach ($array as $key => $value) {
			if($i>0) $where.=" and ";
			if(Table::contains(self::$hashedFields,$key))
			{
				$where.="$key='".$hashed[$key]."' ";
			}
			else
			{
				$where.="$key='$value' ";
			}
			$i++;
		}
		$sql="select * from ".self::$table." where ".$where;
		//echo $sql;
		//
		if(Database::countS($sql)>0) 
		{
			//returning true value
			$ok=true;
			//
			// session
			$user=Database::read($sql);
			$saved=Config::get('auth.saved_fields');
			//
			$static=array();
			//
			foreach ($user[0] as $key => $value) {
				if(array_key_exists($key, $saved))
				$static[$key]=$value;
			}
			//
			Session::put('auths',$static);
			//
			// remember cookie

			if($remember)
			{
				Cookie::create(Config::get('auth.rememeber_cookie'),$user[0]["rememberToken"],time()+(3600*24*7));
			}
		}
		//
		return $ok;
	}

	public static function logout()
	{
		Session::forget("auths");
		Cookie::forget(Config::get('auth.rememeber_cookie'));
		//
		//Url::redirect("@".Config::get('auth.login'));
	}

	public static function user()
	{
		if(self::check())
		{
			if(Session::existe('auths'))
			{
				$user=new userM(Session::get("auths")[0]);
				//
				return $user;
			}
			else if(Cookie::existe(Config::get('auth.rememeber_cookie'))) 
			{
				$usr=new userM();
				$user=Table::first($usr->get("rememberToken",Cookie::get(Config::get('auth.rememeber_cookie'))));
				//
				return $user;
			}
		}
		else return null;
		
	}

	/*
	* Auth check
	*
	* ila kan true rah mloger
	* sinon rah guest
	*/
	public static function check()
	{
		if(Session::existe('auths'))
			return true;
		else if(Cookie::existe(Config::get('auth.rememeber_cookie'))) 
			{
				$y=Database::countS('select * from '.Config::get('auth.table').' where rememberToken="'.Cookie::get(Config::get('auth.rememeber_cookie')).'"');
				if($y==1) return true;
				else return false;
			}
		else return false;
	}

	public static function guest()
	{
		//if(self::check())
		/*if(isset($_SESSION['auths']) && count($_SESSION['auths'])==1)
			return false;
		else return true;*/


		if(self::check()) return false;
		else return true;
	}




}
