<!DOCTYPE html>
<html>
<head>
	<title>Sistema de cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<h3>Cadastro</h3>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form name="signup" method="post" action="cadastrando.php" class="contact100-form validate-form">

				<span class="contact100-form-title">
					Forneça seus dados
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="nome" placeholder="Nome"/><br></p>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Sobrenome</span>
						<input class="input100" type="text" name="sobrenome" placeholder="Sobrenome"/><br>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">País</span>
						<input class="input100" type="text" name="pais" placeholder="País"/><br>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Estado</span>
						<input class="input100" type="text" name="estado" placeholder="Estado"/><br>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">cidade</span>
						<input class="input100" type="text" name="cidade" placeholder="Cidade"/><br>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email"/><br>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="senha"/><br>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Cadastrar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
				
						<input type="submit" value="cadastrar" /><br>
			</form>
		</div>
	</div>	

</body>
</html>