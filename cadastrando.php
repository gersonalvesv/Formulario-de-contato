<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando...</title>
</head>


<?php
//====================================================================================
//Realizar conexão com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";

$conecta = new mysqli($host, $user, $pass, $banco);

if($conecta->connect_error) {
	die ("conexão falhou:" .$conecta->connect_error."<br>");
}

echo "conexao realizada com sucesso <br>";

//$conecta = mysql_connect($host, $user, $pass, $banco) or die(mysql_error());
//mysql_select_db($banco) or die (mysql_error());
//=====================================================================================
?>


<?php  
//código para mandar os dados para o banco de dados

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = ("INSERT INTO usuarios (nome, sobrenome, pais, estado, cidade, email, senha)
	VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");

if($conecta->query($sql)=== TRUE){
	echo "novo registro criado com sucesso";
}else{
	echo "erro:".$sql . "<br>" .$conecta->error."<br>";
}

?>

<body>

</body>
</html>