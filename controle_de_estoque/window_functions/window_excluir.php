<section class="window_funcoes" id="window_excluir">
	<div class="window_funcoes-inner">
		<div class="header_window">
			<div class="title">Excluir Cadastro</div>
			<div class="btn_close">
				<button type="btn" onclick="altLink('modelo.php');" class="fechar">&times;</button>
			</div>
		</div>
		<form action="controllers/window.php?f=5" method="post" class="content">
			<div>
				<p>Tem certeza que deseja excluir o cadastro <br>da apostila de:
			</div>
			<div class="espacamento" id="excluir_apostila">
			</div>
			<input class="input" id="enviar_apostila" type="hidden" name="apostila" value="">
			<div>
				<button type="submit" class="btn">Confirmar</button>
			</div>
		</form>
	</div>
</section>