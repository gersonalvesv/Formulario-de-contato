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
<!DOCTYPE html>
<html>
<head>
	<title>Autenticando usuário</title>
	<script type="text/javascript">
		function loginsuccesfully() {
			setTimeout ("window.location='painel.php'", 2000);
		}

		function loginfailed() {
			setTimeout ("window.location='login.php'", 5000);
		}
	</script>
</head>
<body>



 <?php 

	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$sqlX = 'SELECT * FROM usuarios WHERE email = "'.$email.'" and senha = "'.$senha.'"';

	
	
	$sql = mysqli_query($conecta, $sqlX);
	
	if($conecta->connect_error) {
	die ("conexão falhou:" .$conecta->connect_error."<br>");
	}echo "conexao realizada com sucesso <br>";

	$row = mysqli_num_rows($sql);

	if($row > 0) {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['senha'] = $_POST['senha'];
		echo "<center>Você foi autenticado com sucesso! aguarde um instante</center>";
		echo "<script>loginsuccesfully()</script>";
	} else {
		echo "<center>Nome de usuario ou senha invalidos</center>";
		echo "<script>loginfailed()</script>";
	}

 ?>

 </body>
</html>