<?php 

//path to Root Folder
$Root="../../";

// calling the framework
include_once $Root.'../core/Ini.php';
App::run(null,$Root,false,true,false);


$r=glob($Root."../app/schemas/*.php");

$r2=array();
$r2=array();
foreach ($r as $value) {

$temp1=explode("schemas/",$value);
$temp2=explode("_",$temp1[1]);
$temp3=explode(".",$temp2[1]);
$ex=$temp3[0];
//

if($ex==$_POST['exec_cos_migrate_select'])
	{
		$r2[]=$ex;
		$r3[]=$temp2[0];

	}
}
$v="";
//
if(count($r2)>1)
{
	for ($i=1; $i < count($r2); $i++) { 
		error_log($r3[$i].'*/*'.$r3[$i-1]);
		if($r3[$i]>=$r3[$i-1])
		{
			$v=$Root."../app/schemas/".$r3[$i]."_".$r2[$i].".php";
			$full_name=$r3[$i]."_".$r2[$i];
		}
	}
}
else
{
	$v=$Root."../app/schemas/".$r3[0]."_".$r2[0].".php";
	$full_name=$r3[0]."_".$r2[0];
}


try {
	include_once $v;
	if(down())
	{
		Migration::updateRegister($full_name,"rollback",$Root);
		echo "Schéma annulée";
	}
	else echo Database::execErr();
} catch (Exception $e) {
	echo $e->getMessage();
}


