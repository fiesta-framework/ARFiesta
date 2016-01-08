<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
*/

// backends Route 
// Route::controller("backends","backends");
Route::get("backend", function(){
	backends::index();
});

Route::get("backend/links", function(){
	backends::links();
});

Route::get("backend/model", function(){
	backends::mvcModel();
});

Route::get("backend/view", function(){
	backends::mvcView();
});

Route::get("backend/controller", function(){
	backends::mvcController();
});

Route::get("backend/langues", function(){
	backends::langues();
});

Route::get("backend/seeds", function(){
	backends::seeds();
});

Route::get("backend/info", function(){
	backends::info();
});

Route::get("backend/action", function(){
	backends::Actions();
});
