<?php
	$usuario="root";
	$senha='';
	$dbname="sitephp2";
	$host="127.0.0.1";
	
	try{
		$pdo = new pdo("mysql:host=$host;dbname=$dbname", $usuario, $senha);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>
