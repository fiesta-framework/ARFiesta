<?php

use Fiesta\Core\MVC\Controller\Controller;

/**
* class de controller Formbuilds
*/

class Formbuilds extends Controller
{
	
	
	public static $id = null;
	public static $object = null;


	/**
	 * Display a listing of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function index(){
		$view = array(
			"view"		=> 'formbuild.index',
			"backend"	=> true
		);
		View::make($view);
	}
	
	public static function build(){
		$view = array(
			"view"		=> 'formbuild.build',
			"backend"	=> true
		);
		View::make($view);
	}
	
}