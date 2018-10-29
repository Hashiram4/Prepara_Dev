<?PHP
	session_start();
	@include('conexao.php');
	//Cria uma matriz bidimensional com as informações dos posts + nome da coluna correspondente
	$dados = array([$_POST['unidade'],"cidade"] , [trim(strtoupper($_POST['usuario'])),"usuario"] , [$_POST['senha'],"senha"],
	[$_POST['e-mail'],"email"]);
	//Repete 4x para verificar se não tem algum post vazio
	for ($i=0; $i < 4; $i++) { 
		if ($dados[$i][0] != '') {
			$sql = "UPDATE users SET ".$dados[$i][1]." = '".$dados[$i][0]."' WHERE `id` = '".$_SESSION['id']."'";
			if (!mysqli_query($conn, $sql)) {
				echo '<script> alert("Erro ao tentar alterar os dados no banco"); </script>';
				echo '<script> window.location.href = "../modelo.php"; </script>';
			}
		}
	}
	echo '<script> alert("A página será redirecionada para a tela de login para que todas as alterações sejam concluídas, lamentamos a inconveniência *_*"); </script>';
	echo '<script> window.location.href = "../sair.php"; </script>';
?>