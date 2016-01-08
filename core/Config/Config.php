<?php

namespace Fiesta\Core\Config;

use Fiesta\Core\Glob\App;
use Fiesta\Core\Config\Exceptions\ConfigException;

/**
* Config Class
*/
class Config {

	public static function get($value){
		$ret=null;
		$val=explode('.', $value);
			//
		switch ($val[0]) {
			case 'database':
				if(is_null(App::$root)) $tbl=(include '../app/config/database.php');
				else $tbl=(include App::$root.'../app/config/database.php');
				if($val[1]=="default"){
					$ret=$tbl[$val[1]];
				}else if($val[1]=="host"){
					$ret=$tbl['connections'][$tbl['default']]['host'];
				}else if($val[1]=="database"){
					$ret=$tbl['connections'][$tbl['default']]['database'];
				}else if($val[1]=="username"){
					$ret=$tbl['connections'][$tbl['default']]['username'];
				}else if($val[1]=="password"){
					$ret=$tbl['connections'][$tbl['default']]['password'];
				}else if($val[1]=="migration"){
					$ret=$tbl['migration'];
				}else if($val[1]=="prefixing"){
					$ret=$tbl['prefixing'];
				}else if($val[1]=="prefixe"){
					$ret=$tbl['prefixe'];
				}else{
					if(count($val)>=3)
					{
						switch ($tbl['default']) {
							case 'sqlite':
								if(count($val)==3){
									$ret=$tbl['connections']['sqlite'];
								}else if(count($val)==4){
									$ret=$tbl['connections']['sqlite'][$val[3]];
								}
								break;
							case 'mysql':
								if(count($val)==3){
									$ret=$tbl['connections']['mysql'];
								}else if(count($val)==4){
									$ret=$tbl['connections']['mysql'][$val[3]];
								}
								break;

							case 'pgsql':
								if(count($val)==3){
									$ret=$tbl['connections']['pgsql'];
								}else if(count($val)==4){
									$ret=$tbl['connections']['pgsql'][$val[3]];
								}
								break;

							case 'sqlsrv':
								if(count($val)==3){
									$ret=$tbl['connections']['sqlsrv'];
								}else if(count($val)==4){
									$ret=$tbl['connections']['sqlsrv'][$val[3]];
								}
								break;
						}
					}
				}
				break;
			case 'panel':
				if(is_null(App::$root)) { $tbl=(include '../app/config/panel.php'); }
				else { $tbl=(include App::$root.'../app/config/panel.php'); }
				//
				if($val[1]=="route") $ret=$tbl['route'];
				else if($val[1]=="folder") $ret=$tbl['folder'];
				else if($val[1]=="username") $ret=$tbl['username'];
				else if($val[1]=="password") $ret=$tbl['password'];
				else if($val[1]=="enable") $ret=$tbl['enable'];
				else if($val[1]=="configurated") $ret=$tbl['configurated'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'app':
				if(is_null(App::$root)) $tbl=(include '../app/config/app.php');
				else $tbl=(include App::$root.'../app/config/app.php');
				//
				if($val[1]=="version") $ret=$tbl['version'];
				else if($val[1]=="project") $ret=$tbl['project'];
				else if($val[1]=="page_on_front") $ret=$tbl['page_on_front'];
				else if($val[1]=="page_for_posts") $ret=$tbl['page_for_posts'];
				else if($val[1]=="projectFolder") $ret=$tbl['projectFolder'];
				else if($val[1]=="url") $ret=$tbl['url'];
				else if($val[1]=="base_url") $ret=$tbl['base_url'];
				else if($val[1]=="lang") $ret=$tbl['lang'];
				else if($val[1]=="owner") $ret=$tbl['owner'];
				else if($val[1]=="charset") $ret=$tbl['charset'];
				else if($val[1]=="title") $ret=$tbl['title'];
				else if($val[1]=="unrouted") $ret=$tbl['unrouted'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'themes':
				if(is_null(App::$root)) 
					$tbl=(include '../app/config/themes.php');
				else 
					$tbl=(include App::$root.'../app/config/themes.php');
				//
				if($val[1]=="name") 
					$ret=$tbl['name'];
				else if($val[1]=="nameFrontEnd")
					$ret=$tbl['nameFrontEnd'];
				else if($val[1]=="path")
					$ret=$tbl['path'];
				else if($val[1]=="pathFront")
					$ret=$tbl['pathFront'];
				else if($val[1]=="basepath")
					$ret=$tbl['basepath'];
				else if($val[1]=="basepathFrontEnd")
					$ret=$tbl['basepathFrontEnd'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'license':
				if(is_null(App::$root)) $tbl=(include '../app/config/license.php');
				else $tbl=(include App::$root.'../app/config/license.php');
				//
				if($val[1]=="authorized") $ret=$tbl['authorized'];
				else if($val[1]=="pageblock") $ret=$tbl['pageblock'];
				else if($val[1]=="webMsg") $ret=$tbl['webMsg'];
				else if($val[1]=="pageMsg") $ret=$tbl['pageMsg'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'maintenance':
				if(is_null(App::$root)) $tbl=(include '../app/config/maintenance.php');
				else $tbl=(include App::$root.'../app/config/maintenance.php');
				//
				if($val[1]=="activate") $ret=$tbl['activate'];
				else if($val[1]=="maintenanceEvent") $ret=$tbl['maintenanceEvent'];
				else if($val[1]=="maintenanceResponse") $ret=$tbl['maintenanceResponse'];
				else if($val[1]=="date_fin") $ret=$tbl['date_fin'];
				else if($val[1]=="firstLine") $ret=$tbl['firstLine'];
				else if($val[1]=="secondLine") $ret=$tbl['secondLine'];
				else if($val[1]=="mapText") $ret=$tbl['mapText'];
				else if($val[1]=="mapCoord") $ret=$tbl['mapCoord'];
				else if($val[1]=="outRoutes") $ret=$tbl['outRoutes'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'lang':
				if(is_null(App::$root)) $tbl=(include '../app/config/lang.php');
				else $tbl=(include App::$root.'../app/config/lang.php');
				//
				if($val[1]=="default") $ret=$tbl['default'];
				else if($val[1]=="cookie") $ret=$tbl['cookie'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'security':
				if(is_null(App::$root)) $tbl=(include '../app/config/security.php');
				else $tbl=(include App::$root.'../app/config/security.php');
				//
				if($val[1]=="key1") $ret=$tbl['key1'];
				else if($val[1]=="key2") $ret=$tbl['key2'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'auth':
				if(is_null(App::$root)) $tbl=(include '../app/config/auth.php');
				else $tbl=(include App::$root.'../app/config/auth.php');
				//
				if($val[1]=="table") $ret=$tbl['table'];
				else if($val[1]=="hashed_fields") $ret=$tbl['hashed_fields'];
				else if($val[1]=="saved_fields") $ret=$tbl['saved_fields'];
				else if($val[1]=="rememeber_cookie") $ret=$tbl['rememeber_cookie'];
				else if($val[1]=="login") $ret=$tbl['login'];
				else if($val[1]=="csrf_token") $ret=$tbl['csrf_token'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'mail':
				if(is_null(App::$root)) $tbl=(include '../app/config/mail.php');
				else $tbl=(include App::$root.'../app/config/mail.php');
				//
				if($val[1]=="host") $ret=$tbl['host'];
				else if($val[1]=="port") $ret=$tbl['port'];
				else if($val[1]=="from")
				{
					if(count($val)==2) $ret=$tbl['from'];
					else if(count($val)==3)
					{
						if($val[2]=="adresse") $ret=$tbl['from']['adresse'];
						else if($val[2]=="name") $ret=$tbl['from']['name'];
					}
				}
				else if($val[1]=="encryption") $ret=$tbl['encryption'];
				else if($val[1]=="username") $ret=$tbl['username'];
				else if($val[1]=="password") $ret=$tbl['password'];
				else if($val[1]=="subject") $ret=$tbl['subject'];
				else throw new ConfigException($val[1],$val[0]);
				//
				break;
			case 'view':
				if(is_null(App::$root)) $tbl=(include '../app/config/view.php');
				else $tbl=(include App::$root.'../app/config/view.php');
				//
				if($val[1]=="pagination_param") $ret=$tbl['pagination_param'];
				else if($val[1]=="pagination_style") $ret=$tbl['pagination_style'];
				else if($val[1]=="pagination_class") $ret=$tbl['pagination_class'];
				else if($val[1]=="paginationSimpleNext") $ret=$tbl['paginationSimpleNext'];
				else if($val[1]=="paginationSimplePrevious") $ret=$tbl['paginationSimplePrevious'];
				else throw new ConfigException($val[1],$val[0]);

				//
				break;

			case 'loggin':
				if(is_null(App::$root)) $tbl=(include '../app/config/loggin.php');
				else $tbl=(include App::$root.'../app/config/loggin.php');
				//
				if($val[1]=="debug") {$ret=$tbl['debug'];}
				else if($val[1]=="msg") $ret=$tbl['msg'];
				else if($val[1]=="log") $ret=$tbl['log'];
				else if($val[1]=="bg") $ret=$tbl['bg'];
				else throw new ConfigException($val[1],$val[0]);
				break;

			case 'error':
				if(is_null(App::$root)) $tbl=(include '../app/config/errors.php');
				else $tbl=(include App::$root.'../app/config/errors.php');
				if(array_key_exists($val[1],$tbl))
					$ret=$tbl[$val[1]];
				else throw new ConfigException($val[1],$val[0]);
				break;

			case 'storage':
				if(is_null(App::$root)) $tbl=(include '../app/config/storage.php');
				else $tbl=(include App::$root.'../app/config/storage.php');
				$ret=$tbl[$val[1]];
				//
				if($val[1]=="default") {$ret=$tbl['default'];}
				else throw new ConfigException($val[1],$val[0]);
				break;

			case 'cache':
				if(is_null(App::$root)) $tbl=(include '../app/config/cache.php');
				else $tbl=(include App::$root.'../app/config/cache.php');
				$ret=$tbl[$val[1]];
				//
				if($val[1] == "default") { $ret=$tbl['default']; }
				else if($val[1] == "options") { $ret=$tbl['options']; }
				else throw new ConfigException($val[1],$val[0]);
				break;

			case 'alias':
				if(is_null(App::$root)) $tbl=(include '../app/config/alias.php');
				else $tbl=(include App::$root.'../app/config/alias.php');
				$ret=$tbl[$val[1]];
				//
				if($val[1] == "enable") { $ret=$tbl['enable']; }
				else if($val[1] == "aliases") { $ret=$tbl['aliases']; }
				else throw new ConfigException($val[1],$val[0]);
				break;

			default: throw new ConfigException($value);
				break;

		}
		return $ret;
	}
}
