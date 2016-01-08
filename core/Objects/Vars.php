<?php 

namespace Fiesta\Core\Objects;

/**
* Vars class
*/
class Vars
{

	public static function get($key)
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
		
		$files=include ("../app/vars/$link.php");
		//
		return $files[$k];
	}

}