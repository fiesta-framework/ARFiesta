<?php

namespace Fiesta\Core\Objects;

/**
* datetime class
*/
class Date_Time
{
	public static function now()
	{
		return time();
	}

	public static function date($timestamp=null,$vars=false)
	{
		$o1 = array();
		$o2=null;
		//
		if($vars)
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o1["year"]=date("Y",$timestamp);
			$o1["month"]=date("n",$timestamp);
			$o1["day"]=date("j",$timestamp);
			//
			return $o1;
		}
		else
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o2=date("Y/n/j",$timestamp);
			//
			return $o2;

		}

	}

	public static function time($timestamp=null,$vars=false)
	{
		$o1 = array();
		$o2=null;
		//
		if($vars)
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o1["hours"]=date("G",$timestamp);
			$o1["minutes"]=date("i",$timestamp);
			$o1["second"]=date("s",$timestamp);
			//
			return $o1;
		}
		else
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o2=date("G:i:s",$timestamp);
			//
			return $o2;
		}
	}

	public static function both($timestamp=null,$vars=false)
	{
		$o1 = array();
		$o2=null;
		//
		if($vars)
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o1["year"]=date("Y",$timestamp);
			$o1["month"]=date("n",$timestamp);
			$o1["day"]=date("j",$timestamp);
			$o1["hours"]=date("G",$timestamp);
			$o1["minutes"]=date("i",$timestamp);
			$o1["second"]=date("s",$timestamp);
			//
			return $o1;
		}
		else
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o2=date("Y/n/j G:i:s",$timestamp);
			//
			return $o2;
		}
	}
}
