<?php 

$dbHost = 'localhost';
$dbname = 'cursophp';
$dbUser = 'root';
$dbPass = '';

try {
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbname", $dbUser, $dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>