<?php
	/*$nome=$_POST["nome"];
	$comentario=$_POST["comentario"];
	
	$arquivo=fopen("database.txt", "a");
	fwrite($arquivo, $nome . ";" . $comentario . "\n");
	fclose($arquivo);
	*/
	require("dbconnect.php");
	
	if(isset($_POST)){
		$nome=$_POST["nome"];
		$comentario=$_POST["comentario"];
		
		$query="INSERT INTO user (nome, comentario) VALUES ('$nome', '$comentario')";
		$stmt=$pdo->prepare($query);
		$stmt->execute();
	}
	
	header("Location: index.php");
	exit;
?>