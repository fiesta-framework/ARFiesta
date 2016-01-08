<?php 

namespace Fiesta\Core\Config\Exceptions;

/**
* Directory not fount exception
*/
class ConfigException extends \Exception
{
	protected $message;
	//
	function __construct($name,$part="") 
	{
		if($part=="")
		$this->message="There is no configuration parameter called '$name'";
		else $this->message="There is no configuration parameter in $part file called '$name'";
	}
}