<?php

//----------------------------------------
// Fiesta (http://ipixa.net)
// Copyright 2014 - 2015 Youssef Had, Inc.
// Licensed under Open Source
//----------------------------------------

namespace Fiesta\Core\Glob;

use Fiesta\Core\Storage\Session;
use Fiesta\Core\Access\ErrorHandler;
use Fiesta\Core\Config;
use Fiesta\Core\Config\Alias;
use Fiesta\Core\Objects\Sys;
use Fiesta\Core\Access\Url;
use Fiesta\Core\Access\Path;
use Fiesta\Core\MVC\View\Template;
use Fiesta\Core\Resources\Faker;
use Fiesta\Core\Http\Links;
use Fiesta\Core\Http\Menu;
use Fiesta\Core\Http\Errors;
use Fiesta\Core\Security\License;
use Fiesta\Core\Translator\Lang;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Security\Auth;
use Fiesta\Core\Router\Routes;


class App
{
	static $page;
	public static $root;
	public static $Callbacks = array('before'=>null,'after'=>null);

	public static function run($p=null,$root=null,$routes=true,$session=true,$whoops=true)
	{
		ob_start();
		//
		self::$page	=	$p;
		self::$root	=	$root;
		
		
		//
		require self::$root.'../core/Access/ErrorHandler.php';

		// Config
		require self::$root.'../core/Config/Config.php';
		require self::$root.'../core/Config/Exceptions/ConfigException.php';

		// Set the error log
		ini_set("log_errors", 1);
		ini_set("error_log", self::$root.'../app/storage/logs/Fiesta.log');

		// Set Whoops error handler
		if($whoops) ErrorHandler::ini(self::$root);

		//session
		require self::$root.'../core/Storage/Session.php';
		if($session)Session::start(self::$root.'../app/storage/session');

		//Maintenance
		require self::$root.'../core/Maintenance/Maintenance.php';

		//Objects
		require self::$root.'../core/Objects/Vars.php';
		require self::$root.'../core/Objects/String/String.php';
		require self::$root.'../core/Objects/String/Exceptions/StringOutIndexException.php';

		// Access
		require self::$root.'../core/Access/Path.php';

		//Alias
		require self::$root.'../core/Config/Alias.php';

		//
		//require self::$root.'../core/MVC/Templete.php';
		require self::$root.'../core/Objects/Exception.php';
		require self::$root.'../core/Resources/Faker.php';

		require self::$root.'../core/Storage/Cookie.php';

		// Routes
		require self::$root.'../core/Router/Routes.php';
		require self::$root.'../core/Router/Route.php';
		require self::$root.'../core/Router/Exceptions/RouteNotFoundException.php';

		// Caches
		require self::$root.'../core/Caches/Caches.php';
		require self::$root.'../core/Caches/Cache.php';
		require self::$root.'../core/Caches/FileCache.php';
		require self::$root.'../core/Caches/DatabaseCache.php';
		require self::$root.'../core/Caches/Exceptions/DriverNotFoundException.php';


		require self::$root.'../core/Storage/Storage.php';
		require self::$root.'../core/Security/Auth.php';
		require self::$root.'../core/Objects/Table.php';

		// Database
		require self::$root.'../core/Database/Schema.php';
		require self::$root.'../core/Database/Migration.php';
		require self::$root.'../core/Database/Seeder.php';
		require self::$root.'../core/Database/Database.php';
		require self::$root.'../core/Database/Drivers/MySql.php';
		require self::$root.'../core/Database/Exceptions/DatabaseArgumentsException.php';
		require self::$root.'../core/Database/Exceptions/DatabaseConnectionException.php';


		require self::$root.'../core/Access/Url.php';

		require self::$root.'../core/Objects/DateTime.php';
		require self::$root.'../core/Objects/Sys.php';
		require self::$root.'../core/Http/Links.php';
		require self::$root.'../core/Http/Menu.php';
		require self::$root.'../core/Objects/Base.php';
		require self::$root.'../core/Resources/Libs.php';
		require self::$root.'../core/Hypertext/Res.php';
		require self::$root.'../core/Hypertext/Input.php';
		require self::$root.'../core/Security/License.php';

		//Languages
		require self::$root.'../core/Lang/XMLUtilities.php';
		require self::$root.'../core/Lang/Lang.php';

		// MVC - model
		require self::$root.'../core/MVC/Model/Model.php';
		require self::$root.'../core/MVC/Model/ModelArray.php';
		require self::$root.'../core/MVC/Model/Exceptions/ForeingKeyMethodException.php';
		require self::$root.'../core/MVC/Model/Exceptions/ColumnNotEmptyException.php';
		require self::$root.'../core/MVC/Model/Exceptions/ManyPrimaryKeysException.php';
		require self::$root.'../core/MVC/Model/Exceptions/PrimaryKeyNotFoundException.php';

		// MVC - View

		require self::$root.'../core/MVC/View/View.php';
		require self::$root.'../core/MVC/View/Libs/Template.php';
		require self::$root.'../core/MVC/View/Libs/Views.php';
		require self::$root.'../core/MVC/View/Exceptions/ViewNotFoundException.php';

		require self::$root.'../core/Hypertext/ShortCode.php';
		require self::$root.'../core/Hypertext/HTML.php';
		require self::$root.'../core/Security/Encrypt.php';
		require self::$root.'../core/Security/Security.php';
		require self::$root.'../core/MVC/Controller.php';
		require self::$root.'../core/Http/Error.php';
		require self::$root.'../core/Http/Root.php';
		require self::$root.'../core/Mailing/Mail.php';
		require self::$root.'../core/Objects/DataCollection.php';
		require self::$root.'../core/Maintenance/Debug.php';

		// Filesystem
		require self::$root.'../core/Filesystem/Exceptions/FileNotFoundException.php';
		require self::$root.'../core/Filesystem/Exceptions/DirectoryNotFoundException.php';
		require self::$root.'../core/Filesystem/Filesystem.php';

		// Database files
		require self::$root.'../core/Database/DBTable.php';

		//


		Alias::ini(self::$root);
		Sys::ini();
		Url::ini();
		Path::ini();
		Template::ini(self::$root);
		Faker::ini();
		Links::ini($root);
		Menu::ini($root);
		Errors::ini($root);
		License::ini(self::$page);
		//langues
        Lang::setReplaceBlankTranslationBy(Lang::REPLACE_BY_BLANK);
        Lang::setReplaceNonExistingTranslationBy(Lang::REPLACE_BY_KEY_TRANSLATE_ME);
        Lang::initLanguage();
		Database::ini();
		Auth::ini();
		//
		
		if($root!=null){
			$getConfig = file_exists(self::$root."../app/modules/".self::getCurrentModule()."/config.php") ? include(self::$root."../app/modules/".self::getCurrentModule()."/config.php") : "";
			if(is_array($getConfig)){
				if(isset($getConfig['etat']) && $getConfig['etat'] == "active"){
					Lang::addDictionary(self::getCurrentModule(), "index");
					//functions 
					if(file_exists(self::$root."../app/modules/".self::getCurrentModule()."/function.php")){
						include_once(self::$root."../app/modules/".self::getCurrentModule()."/function.php");
					}
					// include models
					self::includeFiles(self::$root."../app/modules/".self::getCurrentModule()."/Models/*.php");
					//include the controllers files
					self::includeFiles(self::$root."../app/modules/".self::getCurrentModule()."/Controllers/*.php");
					//include the link files
					self::includeFiles(self::$root."../app/paths/*.php");
					//include the seeders files
					self::includeFiles(self::$root."../app/seeds/*.php");
					//include filters
					include_once self::$root."../app/http/Filters.php";
					//include for routes
					if($routes){
						include_once self::$root."../app/http/Routes.php";
						include_once self::$root."../app/modules/".self::getCurrentModule()."/Resources/config/Routes.php";
						Routes::run();
					}
				}else{
					Errors::r_403();
				}
			}else{
				Errors::r_404();
			}
		}else{
			$getConfig = file_exists("../app/modules/".self::getCurrentModule()."/config.php") ? include("../app/modules/".self::getCurrentModule()."/config.php") : "";
			if(is_array($getConfig)){
				if(isset($getConfig['etat']) && $getConfig['etat'] == "active"){
					Lang::addDictionary(self::getCurrentModule(), "index");
					//functions 
					if(file_exists("../app/modules/".self::getCurrentModule()."/function.php")){
						include_once("../app/modules/".self::getCurrentModule()."/function.php");
					}
					// include models
					self::includeFiles("../app/modules/".self::getCurrentModule()."/Models/*.php");
					//include the controllers files
					self::includeFiles("../app/modules/".self::getCurrentModule()."/Controllers/*.php");
					//include the seeders files
					self::includeFiles("../app/seeds/*.php");
					//include filters
					include_once "../app/http/Filters.php";
					//include for routes
					if($routes){
						include_once "../app/http/Routes.php";
						include_once "../app/modules/".self::getCurrentModule()."/Resources/config/Routes.php";
						Routes::run();
					}
				}else{
					Errors::r_403();
				}
			}else{
				Errors::r_404();
			}
		}
	}
	
	public static function includeFiles($dir){
		foreach(glob($dir) as $files){
			 include_once $files;
		}
	}

	public static function getCurrentModule(){
		$d = null;
		if(strpos($_SERVER["QUERY_STRING"], "=") !== false){
			$d = explode("=",$_SERVER["QUERY_STRING"]);
			$d = explode("/", $d[1]);
			$module = $d[0];
			return $module;
		}else{
			if(count(\Config::get('app.page_on_front'))>0){
				return "page";
			}else{
				return "welcom";
			}
		}
	}
	
	public static function before($fun)
	{
		self::$Callbacks['before']	=	$fun;
	}

	public static function after($fun)
	{
		self::$Callbacks['after']	=	$fun;
	}

	public static function root()
	{
		$sub	=	$_SERVER["PHP_SELF"];
		$r		=	explode("App.php", $sub);
		return "http://".$_SERVER["HTTP_HOST"].$r[0];
	}
}
