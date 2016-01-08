<?php

use Fiesta\Core\Mailing\Mail;
use Fiesta\Core\MVC\Controller\Controller;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Database\Schema;
use Fiesta\Core\Database\Migration;
use Fiesta\Core\Database\Seeder;
use Fiesta\Core\Config\Config;
use Fiesta\Core\Security\Auth;

/**
* class de controller Cadeaux
*/

class Backends extends Controller
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
				
		$PathTheme = '../app/modules/';
		$t 		   = null;
		foreach(scandir($PathTheme, 1) as $key => $dir){
			if($dir === "." or $dir === "..")
				continue;
			$t .= self::listFolderShemas($PathTheme.$dir, $dir);
		}
		
		$exec_cos_migrate_select = Migration::getAll('exec_cos_migrate_select', 'backend');
		$ggg 					 = Migration::getAll('ggg', 'backend');
		$data = array(
			"exec_cos_migrate_select" => $exec_cos_migrate_select,
			"ggg" 					  => $ggg,
			"modules"	 			  => glob("../app/modules/*", GLOB_ONLYDIR),
			"listeview"				  => $t
		);
		// $dataview = array(
			// "name" 		=> "Mr Youssef Had",
			// "baseUrl"	=> Config::get('app.base_url')."app/themes/".Config::get('themes.name')."/assets/mail/"
		// );
		// Mail::send("backend.mail.index",$dataview, function($ob){
			// $ob->to(array("amineabri@gmail.com"));
		// });
		if(!isset($_SESSION['ArFramework_pnl_fst_username']) || empty($_SESSION['ArFramework_pnl_fst_username'])){
			$view = array(
				"view"		=> 'user.login',
				"backend"	=> true
			);
			View::make($view, $data);
		}else{
			$view = array(
				"view"		=> 'backend.shema',
				"backend"	=> true
			);
			View::make($view, $data);
		}
	}
	
	/**
	 * Display a links of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function links(){
		$data = array(
			"glob"	 => glob("../app/links/*.php")
		);
		$view = array(
			"view"		=> 'backend.links',
			"backend"	=> true
		);
		View::make($view, $data);
	}
	
	/**
	 * Display a Model of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function mvcModel(){
		$data = array(
			"glob"	 	=> glob("../app/modules/*", GLOB_ONLYDIR),
			"modules"	=> glob("../app/modules/*", GLOB_ONLYDIR)
		);
		$view = array(
			"view"		=> 'backend.mvc_model',
			"backend"	=> true
		);
		View::make($view, $data);
	}
	
	/**
	 * Display a View of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function mvcView(){
		$PathThemeBackEnd = Config::get('themes.basepath');
		$PathThemeBackEnd = str_replace('{themeName}', Config::get('themes.name'), $PathThemeBackEnd);
		
		$PathThemeFrontEnd = Config::get('themes.basepathFrontEnd');
		$PathThemeFrontEnd = str_replace('{themeName}', Config::get('themes.nameFrontEnd'), $PathThemeFrontEnd);
		$backend   = null;
		$frontend  = null;
		foreach(scandir($PathThemeBackEnd, 1) as $key => $dir){
			if($dir === "." or $dir === "..")
				continue;
			$backend .= self::listFolderFiles($PathThemeBackEnd.$dir, $dir);
		}
		foreach(scandir($PathThemeFrontEnd, 1) as $key => $dir){
			if($dir === "." or $dir === "..")
				continue;
			$frontend .= self::listFolderFilesFront($PathThemeFrontEnd.$dir, $dir);
		}
		$data = array(
			"modules"	=> glob("../app/modules/*", GLOB_ONLYDIR),
			"listeviewBackend"	=> $backend,
			"listeviewFrontend"	=> $frontend
		);
		
		$view = array(
			"view"		=> 'backend.mvc_view',
			"backend"	=> true
		);
		View::make($view, $data);
	}
	
	/**
	 * Display a Controller of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function mvcController(){
		$data = array(
			"glob"	 	=> glob("../app/modules/*", GLOB_ONLYDIR),
			"modules"	=> glob("../app/modules/*", GLOB_ONLYDIR),
		);
		$view = array(
			"view"		=> 'backend.mvc_controller',
			"backend"	=> true
		);
		View::make($view, $data);
	}
	
	/**
	 * Display a Langues of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function langues(){
		$data = array(
			"glob"	 => glob("../app/Local/*", GLOB_ONLYDIR)
		);
		$view = array(
			"view"		=> 'backend.langs',
			"backend"	=> true
		);
		View::make($view, $data);
	}
	
	/**
	 * Display a Seeds of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function seeds(){
		$data = array(
			"glob"	 => glob("../app/seeds/*.php")
		);
		$view = array(
			"view"		=> 'backend.seeds',
			"backend"	=> true
		);
		View::make($view, $data);
	}
	
	/**
	 * Display a Seeds of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function info(){
		$view = array(
			"view"		=> 'backend.info',
			"backend"	=> true
		);
		View::make($view);
	}
	
	
	/**
	 *
	 * @return Response
	 */
	public static function Actions(){
		
		$action = $_POST['action'];
		switch($action){
			case "new_migration":
				$time2		=	date("Y/m/d H:i:s",time());
				$time		=	time();
				$name		=	$_POST['migname'];
				$object		=	$_POST['object'];
				$module		=	$_POST['module'];
				if(isset($name) && isset($object) && isset($module) && !empty($name) && !empty($object) && !empty($module)){
					if (is_dir("../app/modules/$module/Schemas")) {
						$myfile 	= 	fopen("../app/modules/$module/Schemas/".$time."_".$name.".php", "w");
						$txt = "<?php\n\n";
						$txt.="/* Schema info\n* @date : ".$time2."(".$time.")\n* @name : ".$name."\n* @object : ".$object."\n*/\n\n\n";
						$txt .= "\t/**\n\t * Run the schemas.\n\t*/\n";
						$txt .= "\tfunction up()\n\t{\n\t\treturn true;\n\n";
						$txt .= "\t\t/* Ex.\treturn Schema::create('tbl_test',function(".'$tab'.")\n\t\t\t{\n\t\t\t\t".'$tab->string("column");'."\n\t\t\t});\n\t\t\t*/";
						$txt .= "\n\t}\n\n";
						$txt .= "\t/**\n\t * Reverse the schemas.\n\t*/\n";
						$txt .= "\tfunction down()\n\t{\n\t\treturn true;\n\n";
						$txt .= "\t\t// Ex.\t return Schema::drop('tbl_test');\n\n";
						$txt .= "\t}\n\n";
						$txt .= "?>\n";
						fwrite($myfile, $txt);
						fclose($myfile);
						if(!Schema::existe(Config::get('database.migration'))){
							Schema::create(Config::get('database.migration'),function($tab){
								$tab->inc("pk_schema");
								$tab->string("name_schema");
								$tab->timestamp("date_schema");
								$tab->string("status_schema");
								$tab->string("type_schema");
							});
						}
		Database::exec("insert into ".Config::get('database.prefixe').Config::get('database.migration')."(name_schema,date_schema,status_schema,type_schema) values('".$name."','".$time."','init','".$object."')");
						Migration::updateRegister($time."_".$name,"init","", $module);
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> "le schema à été ajoutée avec success"
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);					
					}else{
						$arr = array(
							'statut' 	=> 'error', 
							'icon' 		=> 'entypo-cancel-circled alert-danger', 
							'Message' 	=> "Merci d'importer ou de créer votre module $module tout d'abord "
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Vous avez oublié de remplire un champ :("
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "exec_migration":
				$dropshema	=	isset($_POST['dropshema']) ? 1 : 0;
				$module		=	$_POST['module'];
				if($dropshema){
					$r			=	glob("../app/modules/$module/Schemas/*.php");
					$pieces		=	array();
					$pieces1	=	array();
					$pieces2	=	array();
					$full_names	=	array();
					$time		=	"";
					$name		=	"";
					$f 			= 	array();
					foreach ($r as $key) {
						$pieces 	= 	explode("../app/modules/$module/Schemas/", $key);
						$pieces1 	= 	explode("_", $pieces[1]);
						$time		=	$pieces1[0];
						$p			=	explode(".", $pieces1[1]);
						$name		=	$p[0];
						$f[]		=	$pieces1[0];
						$pieces2[]	=	$pieces[1];
						$full_names	=	$pieces1[0]."_".$name;
					}
					// echo "<pre>",print_r($f),"</pre>";
					$mx				=	max($f);
					$ind			=	0;
					$i				=	0;
					foreach ($pieces2 as $value) {						
						if (strpos($value,$mx) !== false) $ind=$i;
						$i++;
					}
					$link			=	$r[$ind];
					try {
						include_once $link;
						if(down()){
							if(Schema::existe(Config::get('database.migration'))){
							Database::exec("update ".Config::get('database.prefixe').Config::get('database.migration')." set status_schema='rolledback' where name_schema='".$name."' and date_schema='".$time."'");
							}
							$full_names	=	$time."_".$name;
							Migration::updateRegister($full_names,"rollback","", $module);
							$arr = array(
								'statut' 	=> 'success', 
								'icon' 		=> 'entypo-check alert-success', 
								'Message' 	=> "Schéma annulé"
							);
							header("Content-type: application/json; charset=utf-8");
							echo json_encode($arr);	
						}else{
							$arr = array(
								'statut' 	=> 'error', 
								'icon' 		=> 'entypo-cancel-circled alert-danger', 
								'Message' 	=> "Schema n'est pas annulé".Database::execErr()
							);
							header("Content-type: application/json; charset=utf-8");
							echo json_encode($arr);
						} 
					} catch (Exception $e) {
						$arr = array(
							'statut' 	=> 'error', 
							'icon' 		=> 'entypo-cancel-circled alert-danger', 
							'Message' 	=> $e->getMessage()
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}else{
					$r			=	glob("../app/modules/$module/Schemas/*.php");
					$pieces		=	array();
					$pieces1	=	array();
					$pieces2	=	array();
					$time		=	"";
					$name		=	"";
					$f 			= 	array();
					foreach ($r as $key) {
						$pieces 	= 	explode("../app/modules/$module/Schemas/", $key);
						$pieces1 	= 	explode("_", $pieces[1]);
						$time		=	$pieces1[0];
						$p			=	explode(".", $pieces1[1]);
						$name		=	$p[0];
						$f[]		=	$pieces1[0];
						$pieces2[]	=	$pieces[1];
						$full_name	=	$pieces1[0]."_".$name;
					}
					$mx			=	max($f);
					$ind		=	0;
					$i			=	0;
					foreach ($pieces2 as $value) {
						if (strpos($value,$mx) !== false) $ind=$i;
						$i++;
					}
					$link		=	$r[$ind];
					try {
						include_once $link;
						if(up()){
							$full_name	=	$time."_".$name;
							if(Schema::existe(Config::get('database.migration'))){
								Database::exec("update ".Config::get('database.prefixe').Config::get('database.migration')." set status_schema='executed' where name_schema='".$name."' and date_schema='".$time."'");
							}
							Migration::updateRegister($full_name,"exec","", $module);
							$arr = array(
								'statut' 	=> 'success', 
								'icon' 		=> 'entypo-check alert-success', 
								'Message' 	=> "Schéma executé"
							);
							header("Content-type: application/json; charset=utf-8");
							echo json_encode($arr);					
						}else{
							$arr = array(
								'statut' 	=> 'error', 
								'icon' 		=> 'entypo-cancel-circled alert-danger', 
								'Message' 	=> "Schema n'est pas executé".Database::execErr()
							);
							header("Content-type: application/json; charset=utf-8");
							echo json_encode($arr);
						}
					} catch (Exception $e) {
						$arr = array(
							'statut' 	=> 'error', 
							'icon' 		=> 'entypo-cancel-circled alert-danger', 
							'Message' 	=> $e->getMessage()
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}
			break;
			case "new_models":
				$class	=	$_POST['new_models_class_name'];
				$file	=	$_POST['new_models_file_name'];
				$table	=	$_POST['new_models_table_name'];
				$module	=	$_POST['module'];
				if(!file_exists("../app/modules/$module/Models/$file.php")){
					$myfile = fopen("../app/modules/$module/Models/$file.php", "w");
					$txt = "<?php\n\n";
						$txt.="class $class extends Model\n\t{\n\t\t//Name of the table in database\n\t\tprotected static ".'$table'."='$table';\n\t\tprotected static ".'$foreignKeys=array();'."\n\n\t}";
						fwrite($myfile, $txt);
						fclose($myfile);
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> "Le model à bien été creé :D "
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Le fichier deja existe"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "new_view":
				$dossier	=	$_POST['dossier'];
				$module		=	$_POST['module'];
				$file		=	$_POST['new_view_file_name'];
				if($dossier === "Back-end"){
					$pathview	=	str_replace('{themeName}', Config::get('themes.name'), Config::get('themes.basepath'));
				}else{
					$pathview	=	str_replace('{themeName}', Config::get('themes.nameFrontEnd'), Config::get('themes.basepathFrontEnd'));
				}
				$structure 	=   $pathview."$module/";
				if(!is_dir($structure)){
					if(mkdir($structure, 0777, true)){
						if(strpos($file, ".")){
							$ext 		= 	explode(".", $file);
							$extention 	= 	$ext[1] ?  $ext[1] : "php";
							$arr = array(
								'statut' 	=> 'success', 
								'icon' 		=> 'entypo-check alert-success', 
								'Message' 	=> self::CreatView($file, $structure, $extention)
							);
							header("Content-type: application/json; charset=utf-8");
							echo json_encode($arr);
						}else{
							$arr = array(
								'statut' 	=> 'success', 
								'icon' 		=> 'entypo-check alert-success', 
								'Message' 	=> self::CreatView($file, $structure, "php")
							);
							header("Content-type: application/json; charset=utf-8");
							echo json_encode($arr);
						}
					}else{
						$arr = array(
							'statut' 	=> 'error', 
							'icon' 		=> 'entypo-cancel-circled alert-danger', 
							'Message' 	=> "Probléme de création de répértoire"
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}else{
					if(strpos($file, ".")){
						$ext 		= 	explode(".", $file);
						$extention 	= 	$ext[1] ?  $ext[1] : "php";
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> self::CreatView($file, $structure, $extention)
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}else{
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> self::CreatView($file, $structure, "php")
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}
			break;
			case "new_controller":
				$class	=	$_POST['new_controller_class_name'];
				$file	=	$_POST['new_controller_file_name'];
				$module	=	$_POST['module'];
				if(!file_exists("../app/modules/$module/Controllers/$file.php")){
						$myfile = fopen("../app/modules/$module/Controllers/$file.php", "w");
						$txt = "<?php\n\n";
						$txt.="/**\n* class de controller $class\n*/\n\nclass $class extends Controller\n{\n\t";
						//view
						$txt.="\n\t\n\tpublic static ".'$id = null'.";\n\tpublic static ".'$object = null'.";\n\n";
						//index
						$txt.="\n\t/**\n\t * Display a listing of the resource.\n\t *\n\t * \n\t * @return Response\n\t */";
						$txt.="\n\tpublic static function index()\n\t{\n\t\t//\n\t}";
						//show
						$txt.="\n\n\n\t/**\n\t * Get the resource by id\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
						$txt.="\n\tpublic static function show(".'$id'.")\n\t{\n\t\t//\n\t}";
						//add
						$txt.="\n\n\n\t/**\n\t * Show the form for creating a new resource.\n\t *\n\t  * @return Response\n\t */";
						$txt.="\n\tpublic static function add()\n\t{\n\t\t//\n\t}";
						//insert
						$txt.="\n\n\n\t/**\n\t * Insert newly created resource in storage.\n\t *\n\t  * @return Response\n\t */";
						$txt.="\n\tpublic static function insert()\n\t{\n\t\t//\n\t}";
						//edit
						$txt.="\n\n\n\t/**\n\t * Show the form for editing the specified resource.\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
						$txt.="\n\tpublic static function edit(".'$id'.")\n\t{\n\t\t//\n\t}";
						//update
						$txt.="\n\n\n\t/**\n\t * Update the specified resource in storage.\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
						$txt.="\n\tpublic static function update(".'$id=null'.")\n\t{\n\t\t//\n\t}";
						//delete
						$txt.="\n\n\n\t/**\n\t * Delete the specified resource in storage.\n\t *\n\t * @param id(mixed) id of the object \n\t * @return Response\n\t */";
						$txt.="\n\tpublic static function delete(".'$id'.")\n\t{\n\t\t//\n\t}";
						$txt.="\n}";
						fwrite($myfile, $txt);
						fclose($myfile);			
						
						//Création des routes
						$RouterFile 	= "../app/modules/$module/Resources/config/Routes.php";
						//index
						$RouterContent 	 = "\n\n/**\n* $file \n*/\n\n";
						$RouterContent 	.= "Route::get('$file',\tfunction(){\n\t$file::index();\n});";
						file_put_contents($RouterFile, $RouterContent, FILE_APPEND | LOCK_EX);
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> "La class controller à été creé avec success :D"
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Le fichier deja existe"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "new_seed":
				$nom	=	$_POST['seedname_name']."Seeder";
				if(!file_exists("../app/seeds/$nom.php")){
					$myfile = fopen("../app/seeds/$nom.php", "w");
					$txt = "<?php\n\n";
					$txt .= "use Fiesta\Core\Database\Seeder;\n\n";
					$txt.="/**\n* class de seeder $nom\n*/\n\nclass $nom extends Seeder\n{\n";
					//datatable name
					$txt.="\t/*\n\t* Name of DataTable\n\t*/\n\tpublic ".'$table="tbl_user";'."\n\n";
					//run
					$txt.="\t/*\n\t* Run the Database Seeder\n\t*/\n\tpublic function run()\n\t{\n\t\t".'$dataTable = array();'."\n\t\t//\n\t\t".'$dataTable[] = array(/* Data Fields */);'."\n\t\t//\n\t\t".'Schema::table($this->table)->insert($dataTable);'."\n\t}\n}";
					fwrite($myfile, $txt);
					fclose($myfile);
					//
					$arr = array(
						'statut' 	=> 'success', 
						'icon' 		=> 'entypo-check alert-success', 
						'Message' 	=> "le seeder est créé"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Le fichier deja existe"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "exec_seed":
				if(Seeder::ini()){
					$arr = array(
						'statut' 	=> 'success', 
						'icon' 		=> 'entypo-check alert-success', 
						'Message' 	=> "Les Seeders ont bien executé"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Erreur d'execution des sedders :("
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "new_lang_dir":
				$name	=	$_POST['lang_dir_name'];
				if(mkdir ("../app/Local/".$name)){
					$arr = array(
						'statut' 	=> 'success', 
						'icon' 		=> 'entypo-check alert-success', 
						'Message' 	=> "le dossier a été creé avec success"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Erreur de création du dossier de langue merci de vérifier les droit d'acces :("
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "new_lang_file":
				$dir	=	$_POST['lang_dir_name_2'];
				$file	=	$_POST['lang_file_name'];
				$date	=	date("Y/m/d");
				$auteur	= 	$_SESSION["ArFramework_pnl_fst_profil"]['display_name'];
				if(!file_exists("../app/Local/$dir/$file.xml")){
					$myfile = fopen("../app/Local/$dir/$file.xml", "w");
					$txt  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
					$txt .= "<!DOCTYPE language_translation SYSTEM \"../language_translation.dtd\">\n";
					$txt .= "<language_translation target_language=\"$dir\">\n";
					$txt .= "\t<meta>\n\t\t<creation author=\"$auteur\" date=\"$date\" comment=\"\"/>\n\t</meta>\n";
					$txt .= "\t<translations>\n\t\t<translation key=\"default\" arguments=\"1\">hello</translation>\n\t</translations>\n";
					$txt .= "</language_translation>";
					fwrite($myfile, $txt);
					fclose($myfile);
					$arr = array(
						'statut' 	=> 'success', 
						'icon' 		=> 'entypo-check alert-success', 
						'Message' 	=> "le fichier de langue a été creé avec success"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Le fichier deja existe"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "new_link":
				$time	=	time();
				$name	=	$_POST['link_name'];
				if(empty($name)) $name	=	$time;
				//
				if(!file_exists("../app/links/".$name.".php"))
				{
					$myfile = fopen("../app/links/".$name.".php", "w");
					$txt = "<?php\n\n";

					$txt.="/*\n\tlinks of ".$name."\n*/\n\n";

					$txt .= "return array(\n\t'link_name_1' => 'link_value_1',\n\t'link_name_2' => 'link_value_2'\n);";
					
					$txt .= "\n\n?>";
					fwrite($myfile, $txt);
					fclose($myfile);
					//
					$arr = array(
						'statut' 	=> 'success', 
						'icon' 		=> 'entypo-check alert-success', 
						'Message' 	=> "Le fichier link a été creé"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Le fichier deja existe"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
		}
	}
	
	
	/* - by Youssef Had(https://github.com/amineabri) - */
	public static function listFolderShemas($dir ,$dirName){
		$data 		 = null;
		$name 		 = Config::get('themes.name');
		$base_url 	 = Config::get('app.base_url');
		$data 		.= '<ul id="browser" class="filetree">';
		$data 		.= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/folder.gif'/> $dirName";
			$data .= "<ul>";
			foreach (glob($dir."/Schemas/*.php") as $value) {
				$r 	   = explode('Schemas/',$value);
				if(stristr($r[1], '.') == '.tpl'){
					$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/smarty-icon.gif' /> <strong>".$r[1]."</strong></li>";
				}elseif(stristr($r[1], '.') == '.php'){
					$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/page_white_php.png' /> <strong>".$r[1]."</strong></li>";
				}
			} 
			$data .= "</ul>";
		$data .= "</ul>";
		return $data;
	}
	
	public static function listFolderFiles($dir ,$dirName){
		$data = null;
		$name 		= Config::get('themes.name');
		$base_url 	= Config::get('app.base_url');
		$data .= '<ul id="browser" class="filetree">';
		$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/folder.gif'/> $dirName";
			$data .= "<ul>";
				foreach (glob($dir."/*") as $value) {
					$r 	   = explode('/',$value);
					if(stristr($r[6], '.') == '.tpl'){
						$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/smarty-icon.gif' /> <strong>".$r[6]."</strong></li>";
					}elseif(stristr($r[6], '.') == '.php'){
						$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/page_white_php.png' /> <strong>".$r[6]."</strong></li>";
					}else{
						$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/folder.gif'/> ".$r[6];
						$data .= "<ul>";
						foreach (glob($value."/*") as $v) {
							$r2	= explode('/',$v);
							if(stristr($r2[7], '.') == '.tpl'){
								$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/smarty-icon.gif' /> <strong>".$r2[7]."</strong></li>";
							}elseif(stristr($r2[7], '.') == '.php'){
								$data .= "<li><img src='".$base_url."app/themes//assets/medias/js/tree/images/page_white_php.png' /> <strong>".$r2[7]."</strong></li>";
							}
						}
						$data .= "</ul>";
					}
				} 
			$data .= "</ul></li>";
		$data .= "</ul>";
		return $data;
	}
	public static function listFolderFilesFront($dir ,$dirName){
		$data = null;
		$name 		= Config::get('themes.name');
		$base_url 	= Config::get('app.base_url');
		$data .= '<ul id="browser" class="filetree">';
		$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/folder.gif'/> $dirName";
			$data .= "<ul>";
				foreach (glob($dir."/*") as $value) {
					$r 	   = explode('/',$value);
					if(stristr($r[5], '.') == '.tpl'){
						$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/smarty-icon.gif' /> <strong>".$r[5]."</strong></li>";
					}elseif(stristr($r[5], '.') == '.php'){
						$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/page_white_php.png' /> <strong>".$r[5]."</strong></li>";
					}else{
						$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/folder.gif'/> ".$r[5];
						$data .= "<ul>";
						foreach (glob($value."/*") as $v) {
							$r2	= explode('/',$v);
							if(stristr($r2[6], '.') == '.tpl'){
								$data .= "<li><img src='".$base_url."app/themes/".$name."/assets/medias/js/tree/images/smarty-icon.gif' /> <strong>".$r2[6]."</strong></li>";
							}elseif(stristr($r2[6], '.') == '.php'){
								$data .= "<li><img src='".$base_url."app/themes//assets/medias/js/tree/images/page_white_php.png' /> <strong>".$r2[6]."</strong></li>";
							}
						}
						$data .= "</ul>";
					}
				} 
			$data .= "</ul></li>";
		$data .= "</ul>";
		return $data;
	}
	public static function CreatView($file, $path, $ext = 'php'){
		if(!file_exists($path."$file.php")){
			if($ext == 'tpl'){
				$myfile = fopen($path."$file", "w");
				$txt ="{* View file  : $file *} \n";
				fwrite($myfile, $txt);
				fclose($myfile);
			}elseif($ext == 'php'){
				$myfile = fopen($path."$file.php", "w");
				$txt = "<?php\n\n";
				$txt.="/**\n* View file  : $file\n*/\n\n";
				fwrite($myfile, $txt);
				fclose($myfile);
			}
			return "La vue a été creé";
		}else{
			return "Le fichier déja existe";
		}	
	}
}