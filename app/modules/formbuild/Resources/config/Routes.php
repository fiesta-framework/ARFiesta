<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
*/

Route::get("formbuild", function(){
	formbuilds::index();
});

Route::get("formbuild/build", function(){
	formbuilds::build();
});
