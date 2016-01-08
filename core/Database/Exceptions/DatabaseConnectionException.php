<?php 

namespace Fiesta\Core\Database\Exception;

/**
* Directory not fount exception
*/
class DatabaseConnectionException extends \Exception{

	protected $message = "We cannot connect to database";
}