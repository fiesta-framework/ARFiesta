<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
*/

// Backend
Route::get("page", function(){
	pages::index();
});

Route::get("page/articles", function(){
	pages::posts();
});

Route::get("page/medias", function(){
	pages::getAllMedias();
});

Route::get("page/api/{type}", function($type){
	pages::getXmlData($type);
});

Route::get("page/post-new/{type}", function($type){
	pages::addPost($type);
});

Route::get("page/menu", function(){
	pages::menu();
});

//Front-End
Route::get("page/t/{id}", function($id){
	pages::getTypePost($id);
});

Route::get("page/p/posts", function(){
	pages::getAllPost();
});

Route::get("page/addmenu", function(){
	pages::addMenu();
});

Route::get("page/action/addpage", function(){
	pages::addPageAction();
});

Route::get("page/action/addarticle", function(){
	pages::addArticleAction();
});