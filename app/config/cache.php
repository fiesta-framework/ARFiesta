<?php 


return array(

	/*
	|---------------------------------------------
	| Default Cache Store
	|---------------------------------------------
	|
	| Hna l mode dial storage dial l cache
	| disponibles : file - database
	|
	*/

	'default' => "file",


	/*
	|----------------------------------------------
	| Cache options
	|----------------------------------------------
	*/

	"options" => [ 

		"file" => [ 
			"driver" => "file",
			'location' => "storage/cache"
		],

		"database" => [ 
			"driver" => "database",
			"table" => "ArFrameworkcache",
			"database" => null,

			// database' => [ "host" => "localhost" , "username" => "root" , "password" => "" , "database" => "tt"] , 
		],
	],


);