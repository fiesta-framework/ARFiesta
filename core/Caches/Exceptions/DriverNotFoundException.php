<?php 

namespace Fiesta\Core\Caches\Exception;

/**
* Directory not fount exception
*/
class DriverNotFoundException extends \Exception{

	protected $message = "The Drive cache that you select in config cache file is doesn't supported";   // exception message
	
}