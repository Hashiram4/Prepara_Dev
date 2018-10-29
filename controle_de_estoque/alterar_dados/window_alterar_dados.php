<?php session_start();?>
<link rel="stylesheet" type="text/css" href="alterar_dados/css/dados.css">
<!---->		
<div class="Window">
	<div class="space">
		<form action="controllers/alterar_dados.php" method="post" class="window-inner">
			<div class="caixa">
				<div><p>Unidade</p></div>
				<input type="textbox" name="unidade" placeholder="<?php echo $_SESSION['unidade'];?>">
			</div>
			<div class="caixa">
				<div><p>Usuário</p></div>
				<input type="textbox" name="usuario" placeholder="<?php echo $_SESSION['usuario'];?>">
			</div>
			<div class="caixa">
				<div><p>Senha</p></div>
				<input type="textbox" name="senha" placeholder="<?php echo $_SESSION['senha'];?>">
			</div>
			<div class="caixa">
				<div><p>E-mail</p></div>
				<input type="textbox" name="e-mail" placeholder="<?php echo $_SESSION['email'];?>">
			</div>
			<div class="botao">
				<button type="submit">Cadastrar</button> 
			</div>
			<div class="voltar">
				<a href="controllers/controller_home.php" title="Voltar">Voltar &gt;</a>
			</div>
		</form>
	</div>
</div>
<!---->