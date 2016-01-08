<?php

use Fiesta\Core\MVC\Controller\Controller;
use Fiesta\Core\Config\Config;

/**
* class de controller Welcoms
*/

class Welcoms extends Controller
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
		$data = array(
			"appOwner"			=> Base::full(Config::get("app.owner"))
		);
		$panelConfigurated	= Config::get("panel.configurated");
		if(!$panelConfigurated){
			$view = array(
				"view"		=> 'welcom.index',
				"backend"	=> true
			);
			View::make($view, $data);
		}else{
			$view = array(
				"view"		=> 'welcom.home',
				"backend"	=> true
			);
			View::make($view, $data);
		}
	}
	
	/**
	 * Get the resource by id
	 *
	 * @param id(mixed) id of the object 
	 * @return Response
	 */
	public static function show($id){
		if(!is_numeric($id)){
			echo "Error val get";
			exit;
		}
		switch($id){
			case 1:
				$name	=	$_POST['dev_name'];// ? "user" : $_POST['dev_name'];
				$langue	=	$_POST['langue'];
				// print_r($_SERVER);
				$content_app="<?php
				\treturn array( 
				\t/*
				\t|----------------------------------------------
				\t| Project version
				\t|----------------------------------------------
				\t*/
				\t'version'=>'V1.0', 
				\t/*
				\t|----------------------------------------------
				\t| Project name
				\t|----------------------------------------------
				\t*/
				\t'project'=>'Fiesta', 
				\t/*
				\t|----------------------------------------------
				\t| Project Posts Page
				\t|----------------------------------------------
				\t*/
				\t'page_on_front'=>array(), 
				\t/*
				\t|----------------------------------------------
				\t| Project Posts Blog
				\t|----------------------------------------------
				\t*/
				\t'page_for_posts'=>array(), 
				\t/*				
				\t|---------------------------------------------- 
				\t| Owner name 
				\t|---------------------------------------------- 
				\t*/ 
				\t'owner'=>'".$name."', 
				\t/* 
				\t|---------------------------------------------- 
				\t| Project parent folder 
				\t|---------------------------------------------- 
				\t| ila kenti khedm b local serveur ola kenti 7at 
				\t| l framework wset chi dossier khask tkteb smyt 
				\t| hadak dossier hana 
				\t*/ 
				\t'projectFolder'=>'Fiesta', 
				\t/* 
				\t|---------------------------------------------- 
				\t| Project url 
				\t|---------------------------------------------- 
				\t| hena kteb lien dial site dilak ila kenti 
				\t| khedam f localhost kteb lien dial local host 
				\t| o men b3d smyt dossier li khedam fih 
				\t*/ 
				\t'url'=>App::root(), 
				\t/* 
				\t|---------------------------------------------- 
				\t| Project url 
				\t|---------------------------------------------- 
				\t| le lien vers la racine du dossier projet 
				\t*/ 
				\t'base_url'=> str_replace('public/index.php', '', App::root()),
				\t/* 
				\t|---------------------------------------------- 
				\t| HTML Default title 
				\t|---------------------------------------------- 
				\t| hena blast titlre par default dial site 
				\t*/ 
				\t'title'=> 'Fiesta PHP Framework', 
				\t/* 
				\t|---------------------------------------------- 
				\t| Routing inexists event 
				\t|---------------------------------------------- 
				\t| hena ila kan route makynch ,true bach 
				\t| yafficher exception ,sinon false bach 
				\t| ymchi l 404 
				\t*/ 
				\t'unrouted'=> true, 
				\t/* 
				\t|---------------------------------------------- 
				\t| Default Character Set 
				\t|---------------------------------------------- 
				\t| hena encode dial l'application meni 
				\t| tkhdem l methode HTML::charset() 
				\t| 
				\t*/ 
				\t'charset'=> 'utf-8', 
				);";
				file_put_contents("../app/config/app.php", $content_app, 0);
				//
				$contect_lang="<?php 
				return array(
				\t/*
				\t|----------------------------------------------
				\t| Default lang
				\t|----------------------------------------------
				\t| hena kteb la langue par default dila l site 
				\t| dialk o t9der tbdelo men be3d
				\t*/
				\t'default'=>'".$langue."',
				\t/*
				\t|----------------------------------------------
				\t| Lang Cookie name
				\t|----------------------------------------------
				\t| hena smyt l cookie dial langue
				\t*/
				\t'cookie'=>'ArFramework_lang',
				);";
				file_put_contents("../app/config/lang.php", $contect_lang, 0);
				echo "ok";
			break;
			case 2:
				$host		= empty($_POST['db_host']) ? "localhost" : $_POST['db_host'] ;
				$name		= empty($_POST['db_name']) ? "test" : $_POST['db_name'];
				$usr		= empty($_POST['db_usr']) ? "root" : $_POST['db_usr'];
				$pass		= empty($_POST['db_pass']) ? "" : $_POST['db_pass'];
				$prefix		= $_POST['db_prefix'];

				if(empty($prefix)) { 
					$prefixing	= "false"; 
					$prefix		= "ysf"; 
				}else{ 
					$prefixing	= "true";  
				}
				$contect="<?php 
				return array(
					/*
					|----------------------------------------------
					| Default Database Connection
					|----------------------------------------------
					*/
					'default' => 'mysql', 
					/*
					|----------------------------------------------
					| Database Connections
					|----------------------------------------------
					*/
					'connections' => array(
						'sqlite' => array(
							'driver'   => 'sqlite',
							'database' => __DIR__.'/../database/production.sqlite',
						),
						'mysql' => array(
							'driver'    => 'mysql',
							'host'      => '".$host."',
							'database'  => '".$name."',
							'username'  => '".$usr."',
							'password'  => '".$pass."',
							'charset'   => 'utf8',
							'collation' => 'utf8_unicode_ci',
						),
						'pgsql' => array(
							'driver'   => 'pgsql',
							'host'     => 'localhost',
							'database' => 'forge',
							'username' => 'forge',
							'password' => '',
							'charset'  => 'utf8',
							'schema'   => 'public',
						),
						'sqlsrv' => array(
							'driver'   => 'sqlsrv',
							'host'     => 'localhost',
							'database' => 'database',
							'username' => 'root',
							'password' => '',
						),
					),
					/*
					|----------------------------------------------
					| Schemas Table
					|----------------------------------------------
					*/
					'migration' => 'arframework_migrations',
					/*
					|----------------------------------------------
					| Table prefixe 
					|----------------------------------------------
					| for your security change the prefix value to
					| another value
					|
					*/
					'prefixing' => ".$prefixing.",
					'prefixe' => '".$prefix."_',
				);";
				file_put_contents("../app/config/database.php", $contect, 0);
				//
				echo "ok";
			break;
			case 3:
				$sec_1		=	$_POST['sec_1'];
				$sec_2		=	$_POST['sec_2'];
				$contect	=	"<?php 
				return array(
					/*
					|--------------------------------------------------------------------------
					| Encryption Keys
					|--------------------------------------------------------------------------
					| 
					| Hna cle lwla dial l cryptage dial les donnes.khas tkoon string 32 bit(car)
					| o cle taniya 7eta hiya dial l cryptage dial les donnes.khas tkoon au minimum string 10 bit(car)
					| had les cles important pour security dial site dialk
					|
					*/
					'key1' => '".$sec_1."',
					'key2' => '".$sec_2."',
				);";
				file_put_contents("../app/config/security.php", $contect, 0);
				//
				echo "ok";
			break;
			case 4:
				$state		=	$_POST['state'];
				$username	=	empty($_POST['username']) ? "admin" : $_POST['username'];
				$pass		=	empty($_POST['password']) ? "123" : $_POST['password'];
				$contect="<?php 
				return array(
					/*
					|----------------------------------------------
					| Panel Activation
					|----------------------------------------------
					| hna true ila bghiti l panel tb9a kheda
					| meni tsali menha redha false...pour 
					| votre sécurité
					| 
					*/
					'enable'=> ".$state.",
					/*
					|----------------------------------------------
					| Panel Route
					|----------------------------------------------
					| hna route dial l panel
					| route khas ikon diffrent 3la had les valeurs:
					| 
					| 
					*/
					'route'=>'backend',
					/*
					|----------------------------------------------
					| Panel Folder
					|----------------------------------------------
					| pour la securité dial l app dialk
					| khask tbdel l nom dial dossier li fih l panel
					| li kayn f 'public/panel'
					| Le nom par défaut howa panel
					| 
					*/
					'folder'=>'home',
					/*
					|----------------------------------------------
					| Panel passwords
					|----------------------------------------------
					| hna katktb les mot de passe dial panel bach 
					| bihom t9der tdkhol l panel dialk par default
					| fihom 1234 o 5678 nta t9der tbdlhom
					*/
					'username'=>'".$username."',
					'password'=>'".$pass."',
					/*
					|----------------------------------------------
					| First Configuration
					|----------------------------------------------
					| 
					*/
					'configurated' => true
				);";
				file_put_contents("../app/config/panel.php", $contect, 0);
				$user = new Welcom;
				$user->user_login   		= $username;
				$user->user_pass    		= md5($pass);
				$user->user_nicename    	= $username;
				$user->user_email    		= "admin@admin.com";
				$user->user_url	    		= "";
				$user->user_registered 		= date("Y-m-d H:i:s");
				$user->user_activation_key 	= "";
				$user->user_status	 		= 1;
				$user->display_name	 		= $username;
				$user->add();
				echo "ok";
			break;
			default:
				echo "error";
			break;
		}
	}
}