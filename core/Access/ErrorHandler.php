<?php 

namespace Fiesta\Core\Access;
use Fiesta\Core\MVC\View\View;
use Fiesta\Core\Config\Config;

/**
* Error Handler class
*/
class ErrorHandler
{
	public static function ini($root="")
	{
		require $root."../core/Associates/Whoops/vendor/autoload.php";
		//
		
		if(Config::get('loggin.debug'))
		{
			$whoops = new \Whoops\Run;
			$errorPage = new \Whoops\Handler\PrettyPageHandler();
			//
			$errorPage->setPageTitle(Config::get('loggin.msg')); // Set the page's title
			$errorPage->setEditor("sublime"); 
			//
			$whoops->pushHandler($errorPage);
			$whoops->register();
		}else{
			$whoops = new \Whoops\Run;
			$errorPage 				= 	new \Whoops\Handler\PlainTextHandler();
			$errorPage->msg			=	Config::get('loggin.msg');
			$errorPage->bg_color	=	Config::get('loggin.bg');
			$errorPage->handle();
			$whoops->pushHandler($errorPage);
			$whoops->register();
		}
	}
	
}