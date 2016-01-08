<?php 


	return array(

		/*
		|----------------------------------------------
		| Enable Aliases
		|----------------------------------------------
		| Here to activate classes aliases
		|
		**/

		'enable' => true,


		/*
		|----------------------------------------------
		| Aliases
		|----------------------------------------------
		| this array is resposible for aliases of class
		| in the app, feel free to register as many as 
	    | you wish as the aliases are "lazy" loaded so 
		| they don't hinder performance.
		|
		**/

		'aliases' => array( 

			'Alias' => 			Fiesta\Core\Config\Alias::class,
			'App' => 			Fiesta\Core\Glob\App::class,
			'Auth' => 			Fiesta\Core\Security\Auth::class,
			'Base' => 			Fiesta\Core\Objects\Base::class,
			'Cache' => 			Fiesta\Core\Caches\Cache::class,
			'Config' => 		Fiesta\Core\Config\Config::class,
			'Cookie' => 		Fiesta\Core\Storage\Cookie::class,
			'Database' => 		Fiesta\Core\Database\Database::class,
			'DataCollection' => Fiesta\Core\Objects\DataCollection::class,
			'Time' => 			Fiesta\Core\Objects\Date_Time::class,
			'DBTable' => 		Fiesta\Core\Database\DBTable::class,
			'Debug' => 			Fiesta\Core\Log\Debug::class,
			'Errors' => 		Fiesta\Core\Http\Errors::class,
			'Faker' => 			Fiesta\Core\Resources\Faker::class,
			'Filesystem' => 	Fiesta\Core\Filesystem\Filesystem::class,
			'Hash' => 			Fiesta\Core\Security\Hash::class,
			'ShortCode' =>		Fiesta\Core\HyperText\ShortCode::class,
			'Html' => 			Fiesta\Core\HyperText\Html::class,
			'Input' => 			Fiesta\Core\HyperText\Input::class,
			'Lang' => 			Fiesta\Core\Translator\Lang::class,
			'Libs' => 			Fiesta\Core\Resources\Libs::class,
			'License' => 		Fiesta\Core\Security\License::class,
			'Links' => 			Fiesta\Core\Http\Links::class,
			'Menu' => 			Fiesta\Core\Http\Menu::class,
			'Mail' => 			Fiesta\Core\Mailing\Mail::class,
			'ModelArray' => 	Fiesta\Core\MVC\Model\ModelArray::class,
			'Path' => 			Fiesta\Core\Access\Path::class,
			'Res' => 			Fiesta\Core\HyperText\Res::class,
			'Root' => 			Fiesta\Core\Http\Root::class,
			'Route' => 			Fiesta\Core\Router\Route::class,
			'Schema' => 		Fiesta\Core\Database\Schema::class,
			'Security' => 		Fiesta\Core\Security\Security::class,
			'Session' => 		Fiesta\Core\Storage\Session::class,
			'Storage' => 		Fiesta\Core\Storage\Storage::class,
			'String' => 		Fiesta\Core\Objects\String::class,
			'Sys' => 			Fiesta\Core\Objects\Sys::class,
			'Table' => 			Fiesta\Core\Objects\Table::class,
			'Url' => 			Fiesta\Core\Access\Url::class,
			'Vars' => 			Fiesta\Core\Objects\Vars::class,
			'View' => 			Fiesta\Core\MVC\View\View::class,
		)
	);
