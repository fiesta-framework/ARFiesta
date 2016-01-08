<?php 


$Root="../../";


include_once $Root.'../core/Ini.php';
App::run(null,$Root,false,true,false);

//
$r=glob($Root."../app/schemas/*.php");
//int=0;

$pieces=array();
$pieces1=array();
$pieces2=array();
//
$time="";
$name="";
//
$f = array();
foreach ($r as $key) {
	//echo $key."\n";
	$pieces = explode("app/schemas/", $key);
	$pieces1 = explode("_", $pieces[1]);
	$time=$pieces1[0];
	$p=explode(".", $pieces1[1]);
	$name=$p[0];
	$f[]=$pieces1[0];
	$pieces2[]=$pieces[1];
	$full_name=$pieces1[0]."_".$name;
	//
}

//echo "\n";
$mx=max($f);
//
$ind=0;$i=0;
//
foreach ($pieces2 as $value) {
	
	if (strpos($value,$mx) !== false) $ind=$i;

	$i++;
}
$link=$r[$ind];
//

try {
	include_once $link;
	
	if(up())
	{
		$full_name=$time."_".$name;
		if(Schema::existe(Config::get('database.migration')))
		{
			Database::exec("update ".Config::get('database.migration')." set status_schema='executed' where name_schema='".$name."' and date_schema='".$time."'");

		}
		Migration::updateRegister($full_name,"exec",$Root);
		echo "Schéma executé";
		
	}
	else echo "Schema n'est pas executé".Database::execErr();
} catch (Exception $e) {
	echo $e->getMessage();
}

