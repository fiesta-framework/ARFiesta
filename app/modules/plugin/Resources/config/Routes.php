<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
*/

Route::get("plugin", function(){
	plugins::index();
});

Route::get("plugin/api", function(){
	plugins::getXmlData();
});