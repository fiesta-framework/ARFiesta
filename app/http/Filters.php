<?php
//use Fiesta\Route;


App::before(function()
{
	//echo "<br>start<br>";
});


App::after(function()
{
	//echo "<br>end<br>";
});



Route::filter('auth', function()
{
	if(Auth::guest())
	{
		Url::redirect("@login");
		return false;
	}
	else return true; 

});

Route::filter('guest', function()
{
	if (Auth::guest()) Url::redirect('/');
});



Route::filter('csrf', function()
{
	if (Session::token() != Res::post('_token')) { return false; }
	else { return true; }
});


