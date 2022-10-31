<?php

/* En local:  */
$dsn = 'mysql:dbname=proyecto;host=localhost';
$user = 'root';
$password = '';
$conexion = mysqli_connect("localhost", "root", "", "proyecto");

/* En internet:
$dsn = 'mysql:dbname=u615612272_proyecto;host=localhost';
$user = 'u615612272_root';
$password = 'Instituto_38';
$conexion = mysqli_connect("localhost", "u615612272_root", "Instituto_38", "u615612272_proyecto");  */




try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>