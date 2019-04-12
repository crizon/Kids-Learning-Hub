<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "ccklh";

try{
	$db = new PDO ("mysql:host={$host};dbname={$db_name}",$user,$pass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// echo "You are connected to database ".$db_name;
}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}




?>