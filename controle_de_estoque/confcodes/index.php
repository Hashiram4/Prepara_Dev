<?php
	@include('../controllers/conexao.php');

	$code = $_GET['code'];

	$busca = mysqli_query($conn,"SELECT * FROM users WHERE confcode='$code'");

	if ($_GET['code'] == "") {
		echo "<script>window.location.href = '../sair.php';</script>";
	}else{
		if (!$busca) {
			echo '<script> alert("Erro ao tentar ativar a conta, caso não tenha ainda, favor criar. A página será redirecionada para o cadastro!");</script>';
			echo "<script>window.location.href = '../cadastrar.php';</script>";
		}else{
			while ($reg=mysqli_fetch_assoc($busca)) {
		        {$login_db = $reg["usuario"];}
		        {$tabela_db = $reg["tabelabanco"];}
	    	}
			$att = "UPDATE users SET ativo = '1' WHERE usuario = '$login_db'";
		    if (mysqli_query($conn, $att)) {
		    	$criar_table = 'CREATE TABLE IF NOT EXISTS `'.$tabela_db.'` (
				`id` INT(4) NOT NULL AUTO_INCREMENT , 
				`nome` VARCHAR(30) NOT NULL  , 
				`quantidade` INT(10) NOT NULL DEFAULT 0 , 
					PRIMARY KEY (`id`))';
		    	if (mysqli_query($conn, $criar_table)) {
		    		include('../includes/tabela_exemplo.php');   //adiciona algumas apostilas
		    		echo '<script> alert("Conta ativada! Aproveite já entre no sistema.");</script>';
		    		echo "<script>window.location.href = '../sair.php';</script>";
		    	}else{
		    		echo "Erro ao criar a tabela de apostilas: ".mysql_error();
		    	}
			}else{
				echo "Erro ao atualizar a conta: ".mysql_error();
			}
		}
	}
?>