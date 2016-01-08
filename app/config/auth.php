<?php 


return array(

	/*
	|----------------------------------------------
	| Authentication Table
	|----------------------------------------------
	|
	| ila kent khedam b l authentification, khasna 
	| n3erfo table li fih les donnees dial les 
	| utilisateur hna 3tinah smya par défaut 
	| t9der tbdlha
	|
	*/

	'table' => 'ar_users',

	/*
	|----------------------------------------------
	| Password fields
	|----------------------------------------------
	|
	| hna ghadi t7t nom dial column 
	| n3erfo table li fih les donnees dial les 
	| utilisateur hna 3tinah smya par défaut 
	| t9der tbdlha
	|
	*/

	'hashed_fields' => array( 
		'password',
		'token',
	),

	/*
	|----------------------------------------------
	| Saved fields
	|----------------------------------------------
	|
	| hna ghadi t7t nom dial column 
	| li bghitihom ib9aw f session o finma mchiti 
	| tl9ahom
	| 
	*/

	'saved_fields' => array( 
		'pk',
	),

	/*
	|----------------------------------------------
	| Saved fields
	|----------------------------------------------
	|
	| hna ghadi t7t nom dial column 
	| li bghitihom ib9aw f session o finma mchiti 
	| tl9ahom
	| 
	*/

	'rememeber_cookie' => 'rPuqyyAOg',

	/*
	|----------------------------------------------
	| Saved fields
	|----------------------------------------------
	|
	| hna ghadi t7t nom dial column 
	| li bghitihom ib9aw f session o finma mchiti 
	| tl9ahom
	| 
	*/

	'login' => 'username',

	/*
	|----------------------------------------------
	| CSRF Protection Token name
	|----------------------------------------------
	|
	| hna ghadi t7t nom dial input hidden dial CSRF 
	| (cross-site request forgery attacks)
	| 
	*/

	'csrf_token' => '_token',


);