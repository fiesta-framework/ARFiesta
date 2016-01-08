<?php

use Fiesta\Core\MVC\Controller\Controller;
use Fiesta\Core\Config\Config;

/**
* class de controller Pages
*/

class Pages extends Controller
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
			"view"		=> 'page.index',
			"backend"	=> true
		);
		View::make($view);
	}
	
	public static function addPost($type){
		if(preg_match("/^[a-z\s]+$/",$type)){
			if($type === "page"){
				$data = get_object_vars(Page::where("post_type='page'"));
				foreach($data['data'] as $row) {
					$rows[] = get_object_vars($row);
				}
				// echo "<pre>",print_r($rows),"</pre>";
				$view = array(
					"view"		=> 'page.addpage',
					"backend"	=> true
				);
				View::make($view, $rows, "pages");
			}else{
				$ob   = new Term();
				$data = $ob->all();
				$view = array(
					"view"		=> 'page.addpost',
					"backend"	=> true
				);
				View::make($view, $data, "terms");
			}
			
		}
	}

	public static function addPageAction(){
		$titre 			= !empty($_POST['titre']) ? $_POST['titre'] : "Draft";
		$slug 			= !empty($_POST['slug']) ? $_POST['slug'] : "draft";
		$content 		= !empty($_POST['content']) ? $_POST['content'] : "";		
		$post_status 	= ($_POST['post_status'] == 0) ? "publish" : $_POST['post_status'];
		$visibilite 	= (($_POST['visibilite'] == 'password') && (!empty($_POST['password']))) ? $_POST['password'] : "";
		$parent 		= $_POST['parent'];
		$date 			= !empty($_POST['date']) ? $_POST['date'] : date("Y-m-d H:i:s");
		$shortDesc 		= strip_tags($content);
		$model 			= $_POST['model'];
		$type 			= isset($_POST['type']) ? $_POST['type'] : "page";
		
		$page = new Page;
		$page->post_author     		= 1;
		$page->post_date   			= $date;
		$page->post_date_gmt  		= $date;
		$page->post_content  		= $content;
		$page->post_short_content  	= $shortDesc;
		$page->post_title  			= $titre;
		$page->post_status  		= $post_status;
		$page->comment_status  		= "closed";
		$page->post_password  		= $visibilite;
		$page->post_name  			= $slug;
		$page->post_modified  		= "";
		$page->post_modified_gmt  	= "";
		$page->post_parent  		= $parent;
		$page->guid  				= Config::get('app.base_url')."page/t/".$slug; //url
		$page->post_type  			= $type; 
		$page->post_mime_type  		= ""; 
		$page->comment_count  		= 0; 
		$page->terms_id		  		= 0; 
		
		if($page->add()){
			$arr = array(
				'statut' 	=> 'success', 
				'icon' 		=> 'entypo-check alert-success', 
				'Message' 	=> "Succeful !!"
			);
			header("Content-type: application/json; charset=utf-8");
			echo json_encode($arr);
		}else{
			$arr = array(
				'statut' 	=> 'error', 
				'icon' 		=> 'entypo-cancel-circled alert-danger', 
				'Message' 	=> "Error d'insertion"
			);
			header("Content-type: application/json; charset=utf-8");
			echo json_encode($arr);
		}	
	}
	
	public static function addArticleAction(){
		$titre 			= !empty($_POST['titre']) ? $_POST['titre'] : "Draft";
		$slug 			= !empty($_POST['slug']) ? $_POST['slug'] : "draft";
		$content 		= !empty($_POST['content']) ? $_POST['content'] : "";
		$shortDesc 		= strip_tags($content);
		$post_status 	= ($_POST['post_status'] == 0) ? "publish" : $_POST['post_status'];
		$visibilite 	= (($_POST['visibilite'] == 'password') && (!empty($_POST['password']))) ? $_POST['password'] : $_POST['visibilite'];
		$date 			= !empty($_POST['date']) ? $_POST['date'] : date("Y-m-d H:i:s");
		$tags 			= !empty($_POST['tags']) ? $_POST['tags'] : "";
		$format 		= $_POST['format'];
		$terms	 		= !empty($_POST['terms']) ? $_POST['terms'] : 0;
		// echo json_encode($_POST);

		$page = new Page;
		$page->post_author     		= 1;
		$page->post_date   			= $date;
		$page->post_date_gmt  		= $date;
		$page->post_content  		= $content;
		$page->post_short_content  	= $shortDesc;
		$page->post_title  			= $titre;
		$page->post_status  		= $post_status;
		$page->comment_status  		= "open";
		$page->post_password  		= "";
		$page->post_name  			= $slug;
		$page->post_modified  		= "";
		$page->post_modified_gmt  	= "";
		$page->post_parent  		= 0;
		$page->guid  				= Config::get('app.base_url')."page/t/".$slug; //url
		$page->post_type  			= "post"; 
		$page->post_mime_type  		= ""; 
		$page->comment_count  		= 0; 
		$page->terms_id		  		= $terms; 
		
		if($page->add()){
				switch($format){
					case "image":
						
					break;
					case "video":
						$media = new Media;
						$getLastPosts = self::getPage("posts", "post_type='post'  ORDER BY ID DESC limit 0,1")[0];
						$media->media_type  = "video"; 
						$media->media_name  = $_POST['video_type']; 
						$media->media_value = $_POST['videoid']; 
						$media->post_id 	= $getLastPosts['ID'];
						$media->add();
					break;
					case "audio":
						$media = new Media;
						$getLastPosts = self::getPage("posts", "post_type='post'  ORDER BY ID DESC limit 0,1")[0];
						$media->media_type  = "audio"; 
						$media->media_name  = $_POST['audio_type'];
						$media->media_value = $_POST['audioid'];
						$media->post_id 	= $getLastPosts['ID'];
						$media->add();
					break;
				}
				if($tags !== ""){
					$tagsOB = new Tag;
					$getLastPosts = self::getPage("posts", "post_type='post'  ORDER BY ID DESC limit 0,1")[0];
					$tagsOB->tag_value = $tags; 
					$tagsOB->post_id 	= $getLastPosts['ID'];
					$tagsOB->add();
				}
			$arr = array(
				'statut' 	=> 'success', 
				'icon' 		=> 'entypo-check alert-success', 
				'Message' 	=> "Succeful !!"
			);
			header("Content-type: application/json; charset=utf-8");
			echo json_encode($arr);
		}else{
			$arr = array(
				'statut' 	=> 'error', 
				'icon' 		=> 'entypo-cancel-circled alert-danger', 
				'Message' 	=> "Error d'insertion"
			);
			header("Content-type: application/json; charset=utf-8");
			echo json_encode($arr);
		}	
	}
	
	public static function posts(){
		$view = array(
			"view"		=> 'page.post',
			"backend"	=> true
		);
		View::make($view);
	}
	
	public static function getMenuByID($id){
		$data = get_object_vars(Page::find($id));
		return array($data['post_title'],$data['guid']);
	}
	
	public static function getJsonMenu($data){
		$T	  = array();
		$T2	  = array();
		foreach($data as $key => $value){
			$T[$key]	= get_object_vars($value);
		}
		foreach($T as $key => $value){
			$children = array_key_exists('children', $value) ? ($value["children"]) : array();
			if(count($children)>0){
				foreach($children as $key2 => $value2){
					$B2 			= get_object_vars($value2);
					$B2 			= array(
						'id'		=> $B2["id"],
						"title"		=> self::getMenuByID($B2["id"])[0],
						"link"		=> self::getMenuByID($B2["id"])[1]
					);
					$CHILD[$key2]	= $B2;
				}
			}else{
				$CHILD	= $children;
			}
			$B = array(
				'id'		=> $value["id"],
				"title"		=> self::getMenuByID($value["id"])[0],
				"link"		=> self::getMenuByID($value["id"])[1],
				'sublink'	=> $CHILD
			);
			$T2[$key]	= $B;
		}
		return $T2;
	}
	
	public static function addMenu(){
		$data   = json_decode($_POST['data']);
		$data   = explode("&", $data);
		$title 	= 	explode("=", $data[0]); 
		$title 	= 	str_replace("+", " ", $title[1]); 
		$id 	= 	explode("=", $data[1]);  
		$id 	= 	$id[1];  
		$action = 	explode("=", $data[2]);  
		$action = 	str_replace("\"", "", $action[1]);  
		$Datamenu  = base64_encode(serialize(self::getJsonMenu(json_decode($_POST['json']))));
		
		// echo "<pre>",print_r($_POST['json']),"</pre>";
		
		//Traitement
		switch($action){
			case "update":
				// echo "<pre>",print_r(json_decode($_POST['json'])),"</pre>";
				if(is_numeric($id)){
					$menu = new MenuCms($id);
					$menu->title    = $title;
					$menu->content  = $Datamenu;
					if($menu->edit()){
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> "le menu à été modifier avec success :D"
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);	
					}else{
						$arr = array(
							'statut' 	=> 'error', 
							'icon' 		=> 'entypo-cancel-circled alert-danger', 
							'Message' 	=> "Erreur de modification du menu "
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Erreur de récupération de l'ID Menu "
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);
				}
			break;
			case "add":
				if($id === 'null'){
					$menu = new MenuCms;
					$menu->title     = $title;
					$menu->content   = $Datamenu;
					$menu->position  = "";
					if($menu->add()){
						$arr = array(
							'statut' 	=> 'success', 
							'icon' 		=> 'entypo-check alert-success', 
							'Message' 	=> "ADD New Menu <br />$title</br>$id<br/>$Datamenu"
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}else{
						$arr = array(
							'statut' 	=> 'error', 
							'icon' 		=> 'entypo-cancel-circled alert-danger', 
							'Message' 	=> "Error d'insertion du menu"
						);
						header("Content-type: application/json; charset=utf-8");
						echo json_encode($arr);
					}
				}else{
					$arr = array(
						'statut' 	=> 'error', 
						'icon' 		=> 'entypo-cancel-circled alert-danger', 
						'Message' 	=> "Error inconnu !!"
					);
					header("Content-type: application/json; charset=utf-8");
					echo json_encode($arr);		
				}
			break;
			default:
				$arr = array(
					'statut' 	=> 'error', 
					'icon' 		=> 'entypo-cancel-circled alert-danger', 
					'Message' 	=> "Impossible de récupérer le type du formulaire "
				);
				header("Content-type: application/json; charset=utf-8");
				echo json_encode($arr);
			break;
		}
	
		// echo $action;
		
	}
	
	public static function getTypePost($id){		
		if(preg_match("/^[0-9\s]+$/",$id)){
			$data = get_object_vars(Page::find($id));
			if($data['post_type']){
				$HOMEPAGE = Config::get('app.page_on_front')['id'];
				if($data['ID'] === $HOMEPAGE){
					$view = array(
						"view"		=> 'page.home',
						"backend"	=> false
					);
					View::make($view, $data);
				}else{
					switch($data['post_type']){
						case "post":
							$view = array(
								"view"		=> 'page.'.$data['post_type'],
								"backend"	=> false
							);
							$getLastPosts = self::getPage("media", "post_id=$id")[0];
							$getTags 	  = self::getPage("tags", "post_id=$id")[0];
							$GDATA = array(
								"DATA"			=> $data,
								"MEDIA_DATA"	=> $getLastPosts,
								"TAG_DATA"		=> $getTags
							);
							View::make($view, $GDATA);
						break;
						case "page":
							$view = array(
								"view"		=> 'page.'.$data['post_type'],
								"backend"	=> false
							);
							View::make($view, $data);
						break;
					}
				}
			}
		}else if(preg_match("/^[a-z0-9-_\s]+$/",$id)){
			$data = get_object_vars(Page::get("post_name","=",$id));
			$data = get_object_vars($data['data'][0]);
			if($data['post_type']){
				$HOMEPAGE = Config::get('app.page_on_front')['title'];
				if($data['post_name'] === $HOMEPAGE){
					$view = array(
						"view"		=> 'page.home',
						"backend"	=> false
					);
					View::make($view, $data);
				}else{
					switch($data['post_type']){
						case "post";
							$view = array(
								"view"		=> 'page.'.$data['post_type'],
								"backend"	=> false
							);
							$getLastPosts = self::getPage("media", "post_id=".$data['ID'])[0];
							$getTags 	  = self::getPage("tags", "post_id=".$data['ID'])[0];
							$GDATA = array(
								"DATA"			=> $data,
								"MEDIA_DATA"	=> $getLastPosts,
								"TAG_DATA"		=> $getTags
							);
							// echo "<pre>",print_r($GDATA),"</pre>";
							View::make($view, $GDATA);
						break;
						case "page";
							$view = array(
								"view"		=> 'page.'.$data['post_type'],
								"backend"	=> false
							);
							View::make($view, $data);
						break;
					}
				}
			}
		}else{
			if($id == ""){
				$data = get_object_vars(Page::get("post_name","=","home"));
				$data = get_object_vars($data['data'][0]);
				if($data['post_type']){
					if($data['post_name'] === "home"){
						$view = array(
							"view"		=> 'page.home',
							"backend"	=> false
						);
						View::make($view, $data);
					}else{
						$view = array(
							"view"		=> 'page.error',
							"backend"	=> false
						);
						View::make($view);
					}
				}
			}else{
				$view = array(
					"view"		=> 'page.error',
					"backend"	=> false
				);
				View::make($view);
			}
		}
	}
		
	public static function getAllPost(){
		$data = get_object_vars(Page::where("post_type='post'"));
		$view = array(
			"view"		=> 'page.allpost',
			"backend"	=> false
		);
		View::make($view, $data, "posts");
	}
	
	public static function getAllMedias(){
		$data = get_object_vars(Page::where("post_type='media'"));
		$view = array(
			"view"		=> 'page.medias',
			"backend"	=> true
		);
		View::make($view, $data, "medias");
	}
	
	public static function getAllMenu($table){
		return Page::getListeMenu($table);
	}

	public static function getPage($table, $type){
		return Page::getAllPage($table, $type);
	}

	public static function getRecentPage($table, $type){
		return Page::getAllPage($table, $type);
	}
	

	public static function menu(){
		$id					= isset($_POST['liste_menu']) ? $_POST['liste_menu'] : 1;
		$menu 	 			= Page::getMenu("menu", $id);
		$arrMenu 			= unserialize(base64_decode($menu["content"]));
		// echo "<pre>",print_r($arrMenu),"</pre>";
		/**/
		//Get All Page
		$getallPage 		= self::getPage("posts", "post_type='page'");
		$getAllRecentPage 	= self::getPage("posts", "post_type='page' order by ID DESC LIMIT 5");
		//Get All Post
		$getallPost 		= self::getPage("posts", "post_type='post'");
		$getAllRecentPost 	= self::getPage("posts", "post_type='post' order by ID DESC LIMIT 5");
		//Get All Menu
		$getListeMenu 		= self::getAllMenu("menu");
		
		$getData 	= array(
			"getMenu" 			=> $menu,
			"getAllMenu" 		=> $arrMenu,
			"getAllPage" 		=> $getallPage,
			"getAllRecentPage" 	=> $getAllRecentPage,
			"getAllPost" 		=> $getallPost,
			"getAllRecentPost" 	=> $getAllRecentPost,
			"getListeMenu" 		=> $getListeMenu
		);
		$view = array(
			"view"		=> 'page.menu',
			"backend"	=> true
		);
		View::make($view, $getData);
		/**/
	}
	
	public static function getXmlData($typePage){
		if(preg_match("/^[a-z\s]+$/",$typePage)){
			$type 			= isset($typePage) ? $typePage : "post";
			$page 			= isset($_POST['page']) ? $_POST['page'] : 1;
			$rp 			= isset($_POST['rp']) ? $_POST['rp'] : 10;
			$sortname 		= isset($_POST['sortname']) ? $_POST['sortname'] : 'ID';
			$sortorder 		= isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
			$query 			= isset($_POST['query']) ? $_POST['query'] : false;
			$qtype 			= isset($_POST['qtype']) ? $_POST['qtype'] : false;

			$sort = "ORDER BY $sortname $sortorder";
			$start = (($page-1) * $rp);
			$limit = "LIMIT $start, $rp";
			$where = "";
			if ($query){
				$where = " post_type='".$type."' and $qtype LIKE '%".($query)."%' ";
			}else{
				$where = " post_type='".$type."'";
			}
				
			$result 	= get_object_vars(Page::where("$where $sort $limit"));
			$total = count($result);
			$rows  = array();
			foreach($result['data'] as $row) {
				$rows[] = get_object_vars($row);
			}
			
			header("Content-type: text/xml");
			$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
			$xml .= "<rows>";
			$xml .= "<page>$page</page>";
			$xml .= "<total>$total</total>";
			$date		 = null;
			$typeofpage  = null;
			$bydefault   = null;
			$definedPage = null;
			foreach($rows AS $vl){			
				$date 			= new DateTime($vl['post_date']);
				$date 			= date_format($date, 'd-m-Y');
				$post_modified 	= new DateTime($vl['post_modified']);
				$post_modified 	= date_format($post_modified, 'd-m-Y');
				$post_status	= isset($vl['post_status']) ? $vl['post_status'] : "Draft";
				$post_password	= isset($vl['post_password']) ? "*****" : "";
				if($type === "page"){
					if(count(Config::get('app.page_on_front'))>0){
						$definedPage = Config::get('app.page_on_front')['id'];
					}else{
						$definedPage = 0;
					}
					$bydefault   = "<strong>[ Home Page ]</strong>";
					if($definedPage == $vl['ID']){
						$typeofpage = $bydefault;
					}else{
						$typeofpage = '';
					}
				}elseif($type === "post"){
					if(count(Config::get('app.page_for_posts'))>0){
						$definedPage = Config::get('app.page_for_posts')['id'];
					}else{
						$definedPage = 0;
					}
					$bydefault   = "<strong>[ Blog ]</strong>";
					if($definedPage == $vl['ID']){
						$typeofpage = $bydefault;
					}else{
						$typeofpage = '';
					}
				}
				
				$xml .= "<row id='".$vl['ID']."'>";
				$xml .= "<cell><![CDATA[".$vl['ID']."]]></cell>";
				$xml .= "<cell><![CDATA[".utf8_encode($vl['post_title'])." $typeofpage]]></cell>";
				$xml .= "<cell><![CDATA[".utf8_encode($vl['post_author'])."]]></cell>";
				$xml .= "<cell><![CDATA[".utf8_encode($post_status)."]]></cell>";
				$xml .= "<cell><![CDATA[".utf8_encode($post_password)."]]></cell>";
				$xml .= "<cell><![CDATA[".$date."]]></cell>";
				$xml .= "<cell><![CDATA[".$post_modified."]]></cell>";
				$xml .= "</row>";
			}
			$xml .= "</rows>";
			echo $xml;
		}else{
			echo "Impossible de definir le format de fichier";
		}
	}

	
}