<?php

namespace Fiesta\Core\Objects;

/**
*
*/
class Base
{

	public static function full($value)
	{
		return (isset($value) and !empty($value));
	}

	public static function table($table)
	{
		echo "<pre>";
		print_r($table);
		echo "</pre>";
	}


	public static function picture($width=100,$height=100)
	{
		echo "http://lorempixel.com/$width/$height";
	}

	public static function redirect($url)
	{
		header("location:".$url);
	}
}
