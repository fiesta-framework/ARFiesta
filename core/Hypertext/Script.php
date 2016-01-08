<?php 

/**
* scripts
*/
class Script
{
	public static function make($name)
	{
		$name=str_replace(".", "/", $name);
		include "../app/scripts/".$name.".php";
	}
}