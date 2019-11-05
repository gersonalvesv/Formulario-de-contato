<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";

	$conecta = new mysqli($host, $user, $pass, $banco);

	if($conecta->connect_error) {
	die ("conexão falhou:" .$conecta->connect_error."<br>");
	}

	echo "conexao realizada com sucesso <br>";

 ?>

 <?php  

 session_start();
 if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
 	header ("location: login.php");
 	exit;
 } else {
 	echo "<center>Voce esta logado</center>";
 }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel</title>
</head>
<body>
	<center><h1>Painel</h1></center>
	<center><a href="logout.php">Sair</a></center>

</body>
</html>