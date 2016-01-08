<?php 

namespace Fiesta\Core\Maintenance;

use Fiesta\Core\MVC\View\View;
use Fiesta\Core\Config\Config;

/**
* Maintenance class
*/
class Maintenance
{
	public static function check(){
		if(!Config::get("maintenance.activate") || in_array(self::thisUrl(), Config::get("maintenance.outRoutes")))
			return true;
		else 
			return false;
	}

	public static function show(){
		$date_fin	=	Config::get("maintenance.date_fin");
		$firstLine	=	Config::get("maintenance.firstLine");
		$secondLine	=	Config::get("maintenance.secondLine");
		$mapText	=	Config::get("maintenance.mapText");
		$mapCoord	=	Config::get("maintenance.mapCoord");
		$view = array(
			"view"		=> 'maintenance.index',
			"backend"	=> true
		);
		$data = array(
			'date_fin' 		=> $date_fin,
			'firstLine' 	=> $firstLine,
			'secondLine' 	=> $secondLine,
			'mapText' 		=> $mapText,
			'mapCoord' 		=> $mapCoord,
		);
		View::make($view,$data);
	}

	protected static function thisUrl(){
		$url	=	isset($_GET['url']) ? explode("/", $_GET['url'])[0] :"/";
		return $url;
	}
}