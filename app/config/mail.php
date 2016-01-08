<?php

return array(


	/*
	|--------------------------------------------------------------------------
	| SMTP Host Address
	|--------------------------------------------------------------------------
	| 
	| Hena khask t7t l adresse dial server SMTP
	| li ghadi tsift meno lmail dialk,par defaut derna 
	| Mailgun
	|
	*/

	'host' => "smtp.gmail.com",

	/*
	|--------------------------------------------------------------------------
	| SMTP Host Port
	|--------------------------------------------------------------------------
	|
	| hna ghadi t7t l port dial SMTP dial serveur
	| li ghadi tsiftmen l mail
	| t9der koon 25 ola 465 ola 587
	|
	*/

	'port' => 465,

	/*
	|--------------------------------------------------------------------------
	| Global "From" Address
	|--------------------------------------------------------------------------
	|
	| hna ghadi t7t lmail li tsift meno lmail o
	| nom dila l utilisateur
	|
	*/

	'from' => array("adresse" => "amineabri@gmail.com", 'name' => "Youssef Had"),

	/*
	|--------------------------------------------------------------------------
	| E-Mail Encryption Protocol
	|--------------------------------------------------------------------------
	|
	| hna l cryptage dial l mail.
	| tatkoonn : tls ola ssl
	|
	*/

	'encryption' => 'ssl',

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Username
	|--------------------------------------------------------------------------
	|
	| hna smya dial l utilisateur dial serveur
	| SMTP
	|
	*/

	'username' => "amineabri@gmail.com",

	/*
	|--------------------------------------------------------------------------
	| SMTP Server Password
	|--------------------------------------------------------------------------
	|
	| hna l mot de pass dial l utilisateur dial serveur
	| SMTP
	|
	*/

	'password' => "Reen@dDouni@",

	/*
	|--------------------------------------------------------------------------
	| E-mail default subject
	|--------------------------------------------------------------------------
	|
	| hna l sujet par default dial les emails t9der tbdlo f l'envoid dial l 
	| mail
	|
	*/

	'subject' => "Fiesta",

);
