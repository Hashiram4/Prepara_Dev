<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DevPrepara - Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/Tela-De-Cadastro.css">

</head>
<body>
	
	<div class="main">
		<div id="caixa-de-login" >
			<div class="imagem">
				<img src="images/Tela-De-Cadastro-Logo.png">
			</div>
			<!-- formulario -->
			<form class="form" method="post" action="controllers/cadastro.php">
				<span class="form-title">
					Cadastro
				</span>

				<div class="caixa-input validate-input">
				    <select class="form-control" id="selectEstados" name="estado">
				      	<option value="false">Escolha um estado...</option>
				    </select>
				</div>

				<div class="caixa-input validate-input">
				    <select class="form-control" id="selectUnidade" name="unidade">
				      	<option value="false">Escolha uma Unidade...</option>
				    </select>
				</div>

				<div class="caixa-input validate-input">
					<input class="input" name="adm" placeholder="Usuário" type="text" required>
				</div>

				<div class="caixa-input validate-input">
					<input class="input" name="senha" placeholder="Senha" type="password" required>
				</div>
				
				<div class="caixa-input validate-input">
					<input class="input" name="email" placeholder="Email" type="email" required>
				</div>

				<div class="form-btn">
					<button class="login-form-btn">
						Cadastre-se
					</button>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="index.php">
						Voltar para a tela de login
						<i class="fas fa-angle-double-right"></i>
					</a>
				</div>
				<div class="text-center txt3">	
					<p>	
						<?php
						session_start();
						if(isset($_SESSION['cadastroErro'])){
			                echo $_SESSION['cadastroErro'];
			                unset($_SESSION['cadastroErro']);
			            }?>
		      	  </p>
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
	<script src="js/unidades.js"></script>
	<script >
		$('.imagem').tilt({
			scale: 1.1
		})
	</script>
</body>
</html>