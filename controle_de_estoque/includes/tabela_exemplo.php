<?php
	//Vetor que vai receber os nomes das apostilas base
	$apostilas = array("Dreamweaver","Excel","Word","Power Point","Lógica de Programação","PHP","HTML","Operador de caixa","Redes","Windows 10");

	//Insere na tabela a quantidade de apostilas do vetor criado
	for ($i = 0; $i < count($apostilas); $i++) {
    	$sql = "INSERT INTO ".$tabela_db." (id, nome) VALUES (null,'".$apostilas[$i]."')";
    	$busca = mysqli_query($conn, $sql);
	  	if (!$busca) {
			echo '<script> alert("Erro ao inserir a apostila $apostilas[$i]: "'.mysql_error().'); </script>';
			echo '<script> window.location.href = "../index.php"; </script>';
		}
	}
?>