<?php
	@session_start();
	$msg="";
	if(isset($_GET['info'])){
        if($_GET['info']==1){
            $msg="Senha invalida!";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema de Automóveis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="recursos/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="recursos/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="recursos/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="recursos/css/util.css">
	<link rel="stylesheet" type="text/css" href="recursos/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(recursos/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="controllers/autenticacao.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Usuário</span>
						<input class="input100" type="text" name="login" placeholder="Insira o usuário">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Insira a senha">
						<span class="focus-input100"></span>
					</div>

					 <div class="flex-sb-m w-full p-b-30">

						<div>
							<a href="recursos/cadastrarUsuario.php" class="txt1">
								Cadastrar-se
							</a> <br>
                            <?php echo $msg; ?>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>
					<input type="hidden" name="entrar" value="login">
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="recursos/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="recursos/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="recursos/vendor/bootstrap/js/popper.js"></script>
	<script src="recursos/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="recursos/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="recursos/vendor/daterangepicker/moment.min.js"></script>
	<script src="recursos/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="recursos/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="recursos/js/main.js"></script>

</body>
</html>