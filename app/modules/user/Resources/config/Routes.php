<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
*/

/**
* Users 
*/

Route::get('user',	function(){
	Users::index();
});

Route::get('user/auth',	function(){
	Users::auth();
});

Route::get('user/logout',	function(){
	Users::Logout();
});

Route::get('user/register',	function(){
	Users::register();
});