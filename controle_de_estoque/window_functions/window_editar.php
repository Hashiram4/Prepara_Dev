<section class="window_funcoes" id="window_editar">
	<div class="window_funcoes-inner">
		<div class="header_window">
			<div class="title">Editar nome</div>
			<div class="btn_close">
				<button type="btn" onclick="altLink('modelo.php');" class="fechar">&times;</button>
			</div>
		</div>
		<form action="controllers/window.php?f=4" method="post" class="content">
			<div>
				<p>Nome:</p>
				<input class="input" id="editar_apostila" type="text" name="novo_nome" value="">
				<input class="input" id="apostila" type="hidden" name="apostila" value="">
			</div>
			<div>
				<button type="submit" class="btn">Confirmar</button>
			</div>
		</form>
	</div>
</section>