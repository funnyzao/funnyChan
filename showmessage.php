<?php
	require("dbconnect.php");
	
	$query="SELECT * FROM user";
	$stmt=$pdo->prepare($query);
	$lista=$stmt->execute();
	
	header("Location: index.php");
	exit;
?>