<?php
use Fiesta\Core\MVC\Controller\Controller;

/**
* class de controller Users
*/

class Users extends Controller
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
			"view"		=> 'user.login',
			"backend"	=> true
		);
		View::make($view);
	}
	
	public static function Logout(){	
		$_SESSION['ArFramework_pnl_fst_username'] = "";
		$_SESSION['ArFramework_pnl_fst_profil'] = "";
		unset($_SESSION['ArFramework_pnl_fst_username']);
		unset($_SESSION['ArFramework_pnl_fst_profil']);
		$redirection  = Config::get('app.base_url')."user";
		header("Location: $redirection");
	}
	
	public static function auth(){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		if((isset($username) && isset($password)) && (!empty($username) && !empty($password))){
			$getResponse = get_object_vars(User::where("user_login='$username' and user_pass='$password' "));
			foreach($getResponse['data'] as $row) {
				$rows = get_object_vars($row);
			}
			if(count($rows)>0){
				$_SESSION['ArFramework_pnl_fst_username'] = $username;
				$_SESSION['ArFramework_pnl_fst_profil']   = $rows;
				echo "ok";
			}
		}
	}
	public static function register(){
		// $user = new User;
		// $user->user_login   		= $username;
		// $user->user_pass    		= md5($pass);
		// $user->user_nicename    	= $username;
		// $user->user_email    		= "admin@admin.com";
		// $user->user_url	    		= "";
		// $user->user_registered 		= date("Y-m-d H:i:s");
		// $user->user_activation_key 	= "";
		// $user->user_status	 		= 1;
		// $user->display_name	 		= $username;
		// $user->add();
		// echo "ok";
	}
	
}