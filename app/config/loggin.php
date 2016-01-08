<?php 


return array(

	/*
	|----------------------------------------------
	| Allow Debug
	|----------------------------------------------
	| hena bach tkheli l framework i debugger les 
	| erreur o les exception dialo ila kan false 
	| maghadich i affachier les erreur
	| 
	| 
	*/

	'debug' => true,

	/*
	|----------------------------------------------
	| Error Debug Message
	|----------------------------------------------
	| ila kan l parametre dial debug fih false
	| l framework ghadi y affichier had l msag
	| 
	*/

	'msg' => "<h1>Ohlala!</h1><h2>il semble que quelque chose s'ait mal passé</h2><p>La page que vous recherchez a été déplacé, supprimé,renommé ou peut-être jamais existé.</p>",

	/*
	|----------------------------------------------
	| Error log
	|----------------------------------------------
	| hana ghadi t3tih l fichier li ghadi ydir fih 
	| les error_log
	| par defaut kayn fichier f storage
	| 
	*/

	'log' => __DIR__.'/../app/storage/logs/Fiesta.log',

	/*
	|----------------------------------------------
	| Error simple page background color
	|----------------------------------------------
	| hana ghadi t3tih l couleur dial l background
	| dial la page simple dial l erreur ya3ni lpage 
	| li katkhroj dial l erreur ila kan debug fiha 
	| false
	| 
	*/

	'bg' => '#a4003a', // "#e9e9e9"


	
);
?>
