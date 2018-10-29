<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DevPrepara - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	
	<div class="main">
		<div id="caixa-de-login" >
			<div class="imagem">
				<img src="images/logo.png">
			</div>
			<!-- formulario -->
			<form class="form" method="post" action="validar.php">
				<span class="form-title">
					Autenticação
				</span>

				<div class="caixa-input validate-input">
					<input class="input" name="usuario" placeholder="Usuário" type="text" required>
				</div>

				<div class="caixa-input validate-input">
					<input class="input" name="senha" placeholder="Senha" type="password" required>
				</div>
				
				<div class="form-btn">
					<button class="login-form-btn" type="submit">
						Login
					</button>
				</div>
				<div class="text-center p-t-136">
					<span class="txt3">
					<?php
					// Mensagem de erro caso não tenha achado os dados
					session_start();
					if(isset($_SESSION['loginErro'])){
		                echo $_SESSION['loginErro'];
		                unset($_SESSION['loginErro']);
		            }?>
		     	   </span>
				</div>
			</form>
		</div>
	</div>

	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    <p class="txt2">Por favor, preencha os campos obrigatórios!</p>
	  </div>

	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.imagem').tilt({
			scale: 1.1
		})
	</script>
</body>
</html>