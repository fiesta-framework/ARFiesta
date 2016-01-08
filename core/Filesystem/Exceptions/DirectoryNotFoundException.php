<?php 

namespace Fiesta\Core\Filesystem\Exception;

/**
* Directory not fount exception
*/
class DirectoryNotFoundException extends \Exception
{
	protected $message;
	//
	function __construct($path) 
	{
		$this->message="Directory does not existe in ($path)";
	}
}