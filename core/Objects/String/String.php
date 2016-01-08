<?php

namespace Fiesta\Core\Objects;

use Fiesta\Core\Objects\String\Exception\StringOutIndexException;
use Fiesta\Core\Objects\Table;

/**
* String Trim Consts
**/
define('TRIM_BOTH', 'both');
define('TRIM_END', 'end');
define('TRIM_START', 'start');


/**
* String cLass
*/
class String
{
	public static function lenght($string)
		{
			return strlen($string);
		}

	public static function splite($string,$limit)
		{
			return explode($limit, $string);
		}

	public static function concat()
		{
			$args=func_get_args();
			$string="";
			foreach ($args as $value) {
				$string.=$value;
			}
			return $string;
		}

	public static function compare($string1,$string2,$ignoreCase=true)
		{
			if($ignoreCase)
			{
				if(strcasecmp($string1,$string2)==0) return true;
				else return false;
			}
			else
			{
				if(strcmp($string1,$string2)==0) return true;
				else return false;
			}
		}

	public static function join($array,$separator,$startIndex=0,$count=-1)
		{
			$string="";
			//
			$end= $count==-1 ? Table::count($array) : $count;
			//
			for ($i=$startIndex; $i < $end ; $i++) {
				if($i==($end-1)) $string.=$array[$i];
				else echo $string.=$array[$i].$separator;
			}
			//
			return $string;
		}

	public static function replace($target,$search,$object)
		{
			return str_replace($search, $object, $target);
		}

	public static function contains($string,$substring)
		{
			if(strpos($string,$substring) !== false) return true;
			else return false;
		}

	public static function at($string,$index)
		{
			if(self::lenght($string)>=($index+1))
				return $string[$index];
			else return false;
		}

	public static function insert($string,$new,$index)
		{
			$str1="";
			$str2="";
			//
			if(self::isIndexIN($string,$index))
			{
				for ($i=0; $i < ($index) ; $i++) {
					$str1.=$string[$i];
				}
				//
				for ($i=($index); $i < String::lenght($string) ; $i++) {
					$str2.=$string[$i];
				}
				//
				return $str1.$new.$str2;
			}
			else throw new StringOutIndexException();
		}

	public static function subString($string,$indexStart,$count)
		{
			if(self::checkIndex($string,$indexStart))
			{
				$str="";
				for ($i=$indexStart; $i < ($indexStart+$count) ; $i++) {
					$str.=$string[$i];
				}
				return $str;
			}
		}

	static function checkIndex($string,$index)
		{
			if(self::isIndexIN($string,$index)) return true;
			else throw new StringOutIndexException();
		}

	static function isIndexIN($string,$index)
		{
			if(String::lenght($string)>($index+1)) return true;
			else return false;
		}

	static function trimCollShars($param)
		{
			$string="";
			if(is_array($param)) foreach ($param as $value) $string.=$value;
			else if(is_string($param)) $string=$param;
			return $string;
		}

	public static function trim($string,$chars=null,$side=TRIM_BOTH)
		{
			if( $side == TRIM_START)
			{
				if(is_null($chars)) return ltrim($string);
				else return ltrim($string,self::trimCollShars($chars));
			}
			else if( $side == TRIM_END)
			{
				if(is_null($chars)) return rtrim($string);
				else return rtrim($string,self::trimCollShars($chars));
			}
			else if( $side == TRIM_BOTH)
			{
				if(is_null($chars)) return trim($string);
				else return trim($string,self::trimCollShars($chars));
			}
		}

	public static function toLower($value)
		{
			return strtolower($value);
		}

	public static function toUpper($value)
		{
			return strtoupper($value);
		}

	public static function firstUpper($value)
		{
			return ucfirst($value);
		}

	public static function firstsUpper($value)
		{
			return ucwords($value);
		}
}
