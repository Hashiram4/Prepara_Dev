<?php
	$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "sistema_de_estoque";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha);
	
	if (!$conn) {
		echo '<script> alert("Error: '.mysql_error().'"); </script>';
	}else{
		$select_db = mysqli_select_db($conn,$dbname);
		if (!$select_db) {
			$sql = 'CREATE DATABASE '.$dbname;
			if (mysqli_query($conn, $sql)) {
			    echo "Database criado com sucesso! <br> Favor atualizar a página para criar as tabelas ------- :D";
			}else {
			    echo 'Erro ao criar o banco: '.mysql_error();
			}
		}else{
			$sql = 'CREATE TABLE IF NOT EXISTS `users` (
				`id` INT(4) NOT NULL AUTO_INCREMENT , 
				`usuario` VARCHAR(30) NOT NULL , 
				`senha` VARCHAR(30) NOT NULL , 
				`email` VARCHAR(30) NOT NULL , 
				`estado` VARCHAR(30) NOT NULL , 
				`cidade` VARCHAR(30) NOT NULL , 
				`confcode` VARCHAR(5) NOT NULL , 
				`ativo` BOOLEAN NOT NULL DEFAULT FALSE , 
				`tabelabanco` VARCHAR(10) NOT NULL , 
					PRIMARY KEY (`id`))';
			$busca = mysqli_query($conn, $sql);
			if (!$busca) {
				echo 'Erro para criar a tabela users: '.mysql_error();
			}else{
				// Insere no banco de dados um usuário de Teste
	  			$sql = "INSERT INTO users (id, usuario, senha, email, estado, cidade, confcode, ativo, tabelabanco) VALUES (null,'PREPARA','simaodias2018','teste@hotmail.com','1','Simao Dias','12345','1','simao123')";
	  			$busca = mysqli_query($conn, $sql);
	  			if (!$busca) {
						echo 'Erro para inserir o usuario de teste: '.mysql_error();
				}else{
					$tabela_db = "simao123";
					$criar_table = 'CREATE TABLE IF NOT EXISTS `'.$tabela_db.'` (
					`id` INT(4) NOT NULL AUTO_INCREMENT , 
					`nome` VARCHAR(30) NOT NULL  , 
					`quantidade` INT(10) NOT NULL DEFAULT 0 , 
						PRIMARY KEY (`id`))';
			    	if (mysqli_query($conn, $criar_table)) {
			    		include('includes/tabela_exemplo.php');   //adiciona algumas apostilas
			    	}else{
			    		echo "Erro ao criar a tabela de apostilas: ".mysql_error();
			    		}
					echo '<script> alert("Todas as etapas foram concluidas, o banco de dados já está funcionando!"); </script>';
					echo '<script> window.location.href = "index.php"; </script>';
				}
			}
		}
	}
?>