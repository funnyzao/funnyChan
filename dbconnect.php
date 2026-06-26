<?php
	$usuario="root";
	$senha='';
	$dbname="sitePHP2";
	$host="localhost";
	
	try{
		$pdo = new pdo("mysql:host=$host;dbname=$dbname", $usuario, $senha);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>