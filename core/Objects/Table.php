<?php

namespace Fiesta\Core\Objects;

/**
* List Class
*/
class Table
{
	public static function show($array)
	{
		echo "<pre>";
		print_r($array);
	}
	public static function count($array)
	{
		return count($array);
	}
	public static function any($array,$cond)
	{
		$t=false;
		foreach ($array as $y => $x) {
			$v='if('.$cond.' && !$t){$t=true;}';
			eval($v);
		}
		//
		return $t;
	}

	public static function all($array,$cond)
	{
		$t=true;
		foreach ($array as $y => $x) {
			$v='if('.$cond.' && $t){$t=true; } else { $t=false; }';
			eval($v);
		}
		//
		return $t;
	}

	public static function add(&$array,$value,$key)
	{
		$array[$key]=$value;

	}

	public static function push(&$array)
	{
		$params=func_get_args();
		//
		//self::show($params);
		for ($i=1; $i < count($params); $i++)
			array_push($array, $params[$i]);

	}

	public static function concat($array,$sep=' ')
	{
		$v="";
		foreach ($array as $value) {
			$v.=$value.$sep;
		}
		return $v;
	}

	public static function contains($array,$value1)
	{
		$ok=false;
		foreach ($array as $value) {

			if($value==$value1) {$ok=true;break;}
		}
		return $ok;
	}

	public static function copy($array1,&$array2)
	{
		$ok=false;
		foreach ($array1 as $key => $value) self::add($array2,$value,$key);
	}

	public static function distinct($array1)
	{
		return false;
	}

	public static function equals($array1,$array2)
	{
		$ok=true;
		if(count($array1)!=count($array2))
		{
			$ok=false;;
		}
		else
		{
			for ($i=0; $i <count($array1) ; $i++) {
				if($array1[$i]!=$array2[$i]) { $ok=false; break;}
			}
		}
		return $ok;
	}

	public static function except($array1,$array2)
	{
		$array = array();
		//
		foreach ($array1 as  $key => $value) {
			//echo $value."<br>";
			if(!self::contains($array2,$value))
				if(is_int($key)) self::add($array,$value,count($array));
				else self::add($array,$value,$key);
		}

		foreach ($array2 as  $key => $value) {
			//echo $value."<br>";
			if(!self::contains($array1,$value) && !self::contains($array,$value) )
				if(is_int($key)) self::add($array,$value,count($array));
				else self::add($array,$value,$key);
		}
		//
		return $array;
	}

	public static function find()
	{
		return false;
	}

	public static function findValue($array,$key)
	{
		return $array[$key];
	}

	public static function findKey($array,$value)
	{
		$val=null;
		//
		foreach ($array as $key => $v)
			if($value==$v){ $val=$key;break; }
		//
		return $val;
	}

	public static function first($array)
	{
		return $array[0];
	}

	public static function last($array)
	{
		$val=null;
		//
		for ($i=count($array); $i <= count($array) ; $i++) {
			$val=$array[$i];
		}
		//
		return $val;
	}


}
