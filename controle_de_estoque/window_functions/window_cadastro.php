<section class="window_funcoes" id="window_cadastro">
	<div class="window_funcoes-inner">
		<div class="header_window">
			<div class="title">Cadastro de Apostila</div>
			<div class="btn_close">
				<button type="btn" onclick="altLink('modelo.php');" class="fechar">&times;</button>
			</div>
		</div>
		<form action="controllers/window.php?f=3" method="post" class="content">
			<div>
				<p>Nome:</p>
				<input class="input" type="text" name="apostila" value="">
			</div>
			<div>
				<p>Quantidade:</p>
				<input class="input" type="number" name="quantidade" value="1">
			</div>
			<div>
				<button type="submit" class="btn">Cadastrar</button>
			</div>
		</form>
	</div>
</section>