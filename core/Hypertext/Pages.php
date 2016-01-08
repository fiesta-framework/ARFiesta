<?php


/**
* 
*/
class Page
{


	public static function put($name,$f=null)
	{
		if(!empty($f))
		{
			if(is_array($f))
				foreach ($f as $key => $value) {
					$$key=$value;
				}
			else if(is_string($f))
			{
				$r=explode(".", $f);
				$$r[0]=$r[1];
			}
		}
		
		//
		//if(!empty($f)) $f();
		/*Sys::$app="../";
		$lnk=explode('.', $name);
		for ($i=0; $i < count($lnk)-1; $i++) 
		{
			Sys::$app.="../";
		}*/
		//Sys::$libs=Sys::$app."lib";
		//
		$name=str_replace(".", "/", $name);
		include "../app/pages/".$name.'.php';

	}

	public static function inc($link)
	{
		include $link;
	}
}