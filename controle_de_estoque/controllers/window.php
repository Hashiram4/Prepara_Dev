<?php
	session_start(); 
	include('conexao.php');
	//Pega o código da função: 1- Adicionar, 2- Diminuir, 3- Cadastrar, 4- Editar e 5- Excluir
	$function = $_GET['f']; 
	$apostila = $_POST['apostila'];
	//Inclui os posts e a variável com os dados de acordo com o código
	if ($function == 1 || $function == 2) {
		$qnt = $_POST['quantidade'];
		$sql = "SELECT `quantidade` FROM `".$_SESSION['tabela']."` WHERE `nome` = '".$apostila."'";
	}elseif ($function == 3) {
		$qnt = $_POST['quantidade'];
		$sql = "INSERT INTO ".$_SESSION['tabela']." (id, nome, quantidade) VALUES (null,'".$apostila."','".$qnt."')";
	}elseif ($function == 4) {
		$nova_apostila = $_POST['novo_nome'];
		$sql = "UPDATE ".$_SESSION['tabela']." SET nome = '".$nova_apostila."' WHERE `nome` = '".$apostila."'";
	}elseif ($function == 5) {
		$sql = "DELETE FROM ".$_SESSION['tabela']." WHERE `nome` = '".$apostila."'";
	}
	//Conecta ao banco de dados para serem feitas as alterações
	if ($busca = mysqli_query($conn, $sql)) {
		//Veficica qual a função selecionada caso seja adicionar(1) ou diminuir(2) irá realizar o update
		if ($function == 1 || $function == 2) {
			while ($reg = mysqli_fetch_assoc($busca)) { // Passa para um array um registro
	   			{$quantidade = $reg["quantidade"];} //Pega a quantidade no banco e passa para a variável
		   	}

		   	if ($function == 1) { $qnt = $qnt + $quantidade; 
		   	}elseif ($function == 2) { $qnt = $quantidade - $qnt; }

			$sql = "UPDATE ".$_SESSION['tabela']." SET quantidade = '".$qnt."' WHERE `nome` = '".$apostila."'";
			if ($busca = mysqli_query($conn, $sql)) {
				echo "<script>window.location.href = '../modelo.php';</script>";
			}else{
				echo '<script> alert("Erro ao tentar conectar com o banco! Favor tente novamente mais tarde "); </script>';
				echo "<script>window.location.href = '../sair.php';</script>";}
		}elseif ($function == 3 || $function == 4 || $function == 5) {
			echo "<script>window.location.href = '../modelo.php';</script>";
		}

	}else{
		//Caso não consiga conectar ao banco de dados
		echo '<script> alert("Erro ao tentar conectar com o banco!"); </script>';
		echo "<script>window.location.href = '../sair.php';</script>";	
	}
?>