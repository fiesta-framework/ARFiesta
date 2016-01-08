<?php

namespace Fiesta\Core\HyperText;

use Fiesta\Core\Config\Config;

/**
* HTML class
*/
class Html
{
	static $tag;

	public static function charset($encode=null)
	{
		if( is_null($encode)) $encode = Config::get( 'app.charset' );
		echo "\r\n".'<meta charset="'.$encode.'"/>';
	}

	public static function meta_description($keys=NULL)
	{
		echo "\r\n".'<meta name="keywords" content="'.$keys.'">';
	}

	public static function meta_keywords($desc)
	{
		echo "\r\n".'<meta name="description" content="'.$desc.'">';
	}


	public static function title($value=NULL)
	{
		if(empty($value)) $value=Config::get('app.title');
		echo "\r\n".'<title>'.$value.'</title>'."\r\n";
	}

	public static function open($name,$class=null,$style=null)
	{
		echo "\r\n"."<$name";
		if(!empty($class))echo " class='$class'";
		if(!empty($style))
		{
			echo " style='";
			foreach ($style as $key => $value) {
				echo $key.":".$value.";";
			}
			echo "'";
		}
		echo ">";

	}

	public static function close($name)
	{
		echo "\r\n"."</".$name.">";
	}

	public static function topen($name,$params=null,$self=false)
	{
		echo "\r\n"."<$name ";
		//if(!empty($class))echo " class='$class'";
		if(!empty($params))
		{
			//echo " style='";
			foreach ($params as $key => $value) {
				echo $key.'="'.$value.'" ';
			}
		}
		if(!$self)echo " >"."\r\n";
		else echo " />"."\r\n";

	}

	public static function tclose($name)
	{
		echo "\r\n"."</".$name.">";
	}

	public static function favicon($link)
	{
		echo '<link rel="icon" type="image/png" href="'.$link.'">';

	}



}
