<?php

namespace Fiesta\Core\MVC\View;

/**
* View mother class
*/
class View
{

	public static function make($value,$data=null,$items=null){
		Views::make($value,$data,$items);
	}

	public static function get($value,$data=null,$items=null){
		return Views::get($value,$data,$items);
	}


}
