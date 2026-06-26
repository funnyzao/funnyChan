<?php
	require("dbconnect.php");
	
	$query="SELECT * FROM user";
	$stmt=$pdo->prepare($query);
	$stmt->execute();
	$lista=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html>
	<head>
		<title>FunnyChan</title>
	</head>
	
	<body style="text-align: center">
		<h1>FunnyChan</h1>
		<p>O melhor Chan da internet brasileira</p>
		<img src="imagem.png">
		<form action="processar.php" method="post">
			<label>Nome:
				<input type="text" name="nome"></input>
			</label>
			<br><br>
			<label>
				Comentario:
				<input type="text" name="comentario">
			</label>
			<br><br>
			<input type="submit"></input>
		</form>
	</body>
	<div>
		<br>
		<?php
			foreach($lista as $usuario){
				echo $usuario["nome"] . ":";
				echo "<br>";
				echo $usuario["comentario"];
				echo "<br><br>";
			}
		?>
	</div>
</html>