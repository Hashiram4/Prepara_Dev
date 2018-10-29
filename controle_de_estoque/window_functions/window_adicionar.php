<section class="window_funcoes" id="window_adicionar">
	<div class="window_funcoes-inner">
		<div class="header_window">
			<div class="title">Adicionar</div>
			<div class="btn_close">
				<button type="btn" onclick="altLink('modelo.php');" class="fechar">&times;</button>
			</div>
		</div>
		<form action="controllers/window.php?f=1" method="post" class="content">
			<div>
				<p>Nome:</p>
				<input class="input" id="nome_apostila" type="text" name="apostila" value="" readonly>
			</div>
			<div>
				<p>Quantidade:</p>
				<input class="input" type="number" name="quantidade" value="1">
			</div>
			<div>
				<button type="submit" class="btn">Confirmar</button>
			</div>
		</form>
	</div>
</section>