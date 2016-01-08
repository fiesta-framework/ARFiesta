<?php

namespace Fiesta\Core\MVC\View\Exception;

/**
* Directory not fount exception
*/
class ViewNotFoundException extends \Exception{

	function __construct($view) {
		$this->message = "There is no view call '$view' in Views folder";
	}

}
