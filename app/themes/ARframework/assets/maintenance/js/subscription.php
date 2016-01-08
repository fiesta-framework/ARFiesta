<?php
	$source = $_POST['email']."\n";
	$file = "../emails.txt";
	$Saved_File = fopen($file, 'a+');
	fwrite($Saved_File, $source);
	fclose($Saved_File);
?>