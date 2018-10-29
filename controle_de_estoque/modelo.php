<?php session_start(); 
	@include('includes/verificar_status.php'); 
	include('controllers/conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/model_style.css">
	<link rel="stylesheet" type="text/css" href="css/table_style.css">
	<link rel="stylesheet" type="text/css" href="window_functions/css/window_style.css">
	<script src="js/functions.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Painel Central</title>
</head>
<body>
	<div id="modelo">
		<!-- Adiciona as janelas de funções -->
		<?php
			@include('window_functions/window_adicionar.php');
			@include('window_functions/window_cadastro.php'); 
			@include('window_functions/window_diminuir.php'); 
			@include('window_functions/window_editar.php'); 
			@include('window_functions/window_excluir.php');
		?>
		<!-- Fim das janelas -->
		<div class="conteudo">
			<div class="left_box">
				<div class="topo">
					<div class="logo">
						<div class="logo-inner">
							<img src="imagens/logo_prepara.png" alt="Logo Prepara Cursos">
							<div>-> MENU</div>
						</div>
					</div>
					<div class="links">
						<div class="links-inner">
							<p><button type="btn" onclick="altLink('#window_cadastro');">Cadastro</button></p>
							<p><a href="alterar_dados/controller.php" title="">Alterar Dados</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="right_box">
				<div>
					<div class="user_box">
						<div class="user_box-inner">
							<div class="user"><label><b>Usuário: </b><?php echo ($_SESSION['usuario']);?><!-- Aqui fica o nome do usuário ---></label></div>
							<div class="exit">
								<div class="img">
									<div class="img-inner">
										<a href="sair.php" title="">
											<picture>
											    <source srcset="imagens/icone_sair_small.gif" media="(max-width: 789px)">
											    <source srcset="imagens/icone_sair_medium.gif" media="(max-width: 1100px)">
											    <source srcset="imagens/icone_sair.gif">
											    <img srcset="imagens/icone_sair.gif" alt="Icone Sair">
											</picture>
										</a>
									</div>
								</div>
								<p><a href="sair.php" title=""><b>Sair</b></a></p>
							</div>
						</div>
					</div>
					<div class="local_box">
						<div>
							<a href="controllers/controller_home.php" title="">Home</a>
							<?php
								if ($_SESSION['window_alterar'] == 1) {
									echo "/ AlterarDados";
								}	
							?>
						</div>
					</div>
					<div class="conteudo_dinamico">
						<div>
							<!-- Aqui entra os includes (conteúdos dinâmicos do site) --->
							<?php 
								if ($_SESSION['window_alterar'] == 1) {
									@include('alterar_dados/window_alterar_dados.php');
								}else{
									@include('table.php');
								}	
							?>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<footer>
			<div class="rodape">
				<p><a href="https://www.facebook.com/prepara.simaodias?lst=100002885690149%3A100014792443116%3A1540849462" target="_blank">Copyright &copy; by Dev Prepara - Simão Dias | Todos os direitos reservados.</a></p>
			</div>
		</footer>
	</div>
</body>
</html>