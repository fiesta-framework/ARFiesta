<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
| hna route dial l application dialk aya route 
| khask t7eto hena 
|
*/

if(count(Config::get('app.page_on_front'))>0){
	Route::get("/", function(){
		pages::getTypePost(Config::get('app.page_on_front')['title']);
	});
}else{
	Route::get("/", function(){
		welcoms::index();
	});
}
