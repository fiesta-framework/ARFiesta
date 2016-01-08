<?php 

namespace Fiesta\Core\Http;

/**
* Links class
*/
class Links
{
	static $bigOne = array();
	public static $ext;
	public static $social;
	public static $css;
	public static $js;
	public static $gen;

	public static function ini($root="")
	{ 
		$files=glob($root."../app/links/*.php");
		//
		foreach ($files as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
			}
		}
	}

	public static function get($key)
	{
		return self::$bigOne[$key];
	}

	public static function in($key)
	{
		$url=explode('.', $key);
		$k="";
		$link="";
		if(count($url)>=3)
		{
			$j=0;
			for ($i=0; $i < count($url)-2 ; $i++) { 
				$link.=$url[$i]."/";
				$j=$i;
			}
			$j++;
			$link.=$url[$j];
			$k=$url[$j+1];
		}
		else
		{
			$link.=$url[0];
			$k=$url[1];
		}
		
		$files=include ("../app/links/$link.php");
		//
		return $files[$k];
	}

	public static function popup($link='',$title="",$width=200,$height=100)
	{
		echo ('onclick="window.open(\''.$link.'\', \''.$title.'\', \'width='.$width.', height='.$height.',top=\'+top+\', left=\'+left+\')"') ;
	}
}