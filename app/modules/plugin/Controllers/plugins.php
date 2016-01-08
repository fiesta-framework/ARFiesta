<?php

use Fiesta\Core\MVC\Controller\Controller;
use Fiesta\Core\Config\Config;

/**
* class de controller Plugins
*/

class Plugins extends Controller
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
		// Menu::add(array(
			// "id"	=>	3,
			// "name"	=>	"Demo",
			// "menu"	=>	Menu::getMenuByGroup("FrontEnd")
		// ));
		// echo "<pre>",print_r(Menu::show()),"</pre>";
		$view = array(
			"view"		=> 'plugin.index',
			"backend"	=> true
		);
		View::make($view);
	}
	
	public static function getXmlData(){
		$page 			= isset($_POST['page']) ? $_POST['page'] : 1;
		$rp 			= isset($_POST['rp']) ? $_POST['rp'] : 10;
		$sortname 		= isset($_POST['sortname']) ? $_POST['sortname'] : 'name';
		$sortorder 		= isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
		$query 			= isset($_POST['query']) ? $_POST['query'] : false;
		$qtype 			= isset($_POST['qtype']) ? $_POST['qtype'] : false;
		if(!isset($usingSQL)){
			$rows = self::getArrayData();
			if($qtype && $query){
				$query = strtolower(trim($query));
				foreach($rows AS $key => $row){
					if(strpos(strtolower($row[$qtype]),$query) === false){
						unset($rows[$key]);
					}
				}
			}
			//Make PHP handle the sorting
			$sortArray = array();
			foreach($rows AS $key => $row){
				$sortArray[$key] = $row[$sortname];
			}
			$sortMethod = SORT_ASC;
			if($sortorder == 'desc'){
				$sortMethod = SORT_DESC;
			}
			array_multisort($sortArray, $sortMethod, $rows);
			$total = count($rows);
			$rows = array_slice($rows,($page-1)*$rp,$rp);
		}
		header("Content-type: text/xml");
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		$xml .= "<rows>";
		$xml .= "<page>$page</page>";
		$xml .= "<total>$total</total>";
		foreach($rows AS $row){
			$xml .= "<row id='".$row['iso']."'>";
			$xml .= "<cell><![CDATA[".$row['iso']."]]></cell>";
			$xml .= "<cell><![CDATA[".utf8_encode($row['name'])."]]></cell>";
			//$xml .= "<cell><![CDATA[".print_r($_POST,true)."]]></cell>";
			$xml .= "<cell><![CDATA[".utf8_encode($row['printable_name'])."]]></cell>";
			$xml .= "<cell><![CDATA[".utf8_encode($row['iso3'])."]]></cell>";
			$xml .= "<cell><![CDATA[".utf8_encode($row['numcode'])."]]></cell>";
			$xml .= "</row>";
		}
		$xml .= "</rows>";
		echo $xml;
	}
	
	public static function getArrayData(){
		$rows = array(
			array('iso'=>'AF',
			'name'=>'Afghanistan',
			'iso3'=>'AFG',
			'numcode'=>'4',
			),
			array('iso'=>'AL',
			'name'=>'Albania',
			'iso3'=>'ALB',
			'numcode'=>'8',
			),
			array('iso'=>'DZ',
			'name'=>'Algeria',
			'iso3'=>'DZA',
			'numcode'=>'12',
			),
			array('iso'=>'AS',
			'name'=>'American Samoa',
			'iso3'=>'ASM',
			'numcode'=>'16',
			),
			array('iso'=>'AD',
			'name'=>'Andorra',
			'iso3'=>'AND',
			'numcode'=>'20',
			),
			array('iso'=>'AO',
			'name'=>'Angola',
			'iso3'=>'AGO',
			'numcode'=>'24',
			),
			array('iso'=>'AI',
			'name'=>'Anguilla',
			'iso3'=>'AIA',
			'numcode'=>'660',
			),
			array('iso'=>'AQ',
			'name'=>'Antarctica',
			'iso3'=>'ART',
			'numcode'=>'0',
			),
			array('iso'=>'AG',
			'name'=>'Antigua and Barbuda',
			'iso3'=>'ATG',
			'numcode'=>'28',
			),
			array('iso'=>'AR',
			'name'=>'Argentina',
			'iso3'=>'ARG',
			'numcode'=>'32',
			)
		);
		foreach($rows AS $key => $row){
			$rows[$key]['printable_name'] = $row['name'];
		}
		return $rows;
	}
}