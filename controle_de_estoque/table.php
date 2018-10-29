<!-- Conteúdo -->
<div class="table">
	<div class="top">    
  		<div>Nome</div>
		<div>Quantidade</div>
	</div>
	<?php

	//pega do banco o n de apostilas total
	$sql = 'SELECT * FROM `'.$_SESSION['tabela'].'` ORDER BY `nome`';
	if ($busca = mysqli_query($conn,$sql)) {
		while ($linha = mysqli_fetch_assoc($busca)) {
	   		include('linhas.php'); 
		}
	}else{
		echo '<script> alert("Erro ao tentar conectar com o banco! Favor tente novamente mais tarde"); </script>';
		echo "<script>window.location.href = 'sair.php';</script>";
	}
	?>
</div>
<!-- Conteúdo -->