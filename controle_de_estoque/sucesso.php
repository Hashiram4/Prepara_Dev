<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DevPrepara - Sucesso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/Tela-De-Cadastro-Com-Sucesso.css">

</head>
<body>
	
	<div class="main">
		<div id="caixa-de-imagem"></div>
		<div id="caixa-main">
			<h2>Usuário cadastrado com sucesso!</h2>
			<p>Um email foi enviado para <a><?php
					session_start();echo $_SESSION['mail'];?>
		        </a> com sucesso.</p>
		</div>
		<div id="caixa-info">
			<ul>
				<li><b>Usuário:</b>
					<?php
					
					if(isset($_SESSION['name'])){
		                echo $_SESSION['name'];
		                unset($_SESSION['name']);
		            }?>
		        </li>
				<li><b>Senha:</b> 
					<?php
					if(isset($_SESSION['pass'])){
		                echo $_SESSION['pass'];
		                unset($_SESSION['pass']);
		            }?>
				</li>
				<li><b>Email:</b> 
					<?php
					if(isset($_SESSION['mail'])){
		                echo $_SESSION['mail'];
		                unset($_SESSION['mail']);
		            }?>
				</li>
			</ul>

			<div class="tex">
				<a href="sair.php">Voltar para a tela de login</a>
				<i class="fas fa-angle-double-right"></i>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
</body>
</html>