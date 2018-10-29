<?php
	session_start();
	@include('conexao.php');
	@include('../includes/ocultar_erros.php');

    $estado = $_POST['estado'];
	$cidade = $_POST['unidade'];
	$user = trim(strtoupper($_POST['adm']));
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$_SESSION['name'] = $user;
	$_SESSION['pass'] = $senha;
	$_SESSION['mail'] = $email;

	$busca = mysqli_query($conn,"SELECT * FROM users WHERE usuario='$user' OR email='$email'")
        or die ("<h1>Não foi possível realizar a busca</h1>");

    while ($reg=mysqli_fetch_assoc($busca)) {
        {$login_db = $reg["usuario"];}
        {$email_db = $reg["email"];}
    }

    //verifica se existe um usuario ou o email igual ao digitado
    if ($login_db == $user || $email_db == $email) {
    	$_SESSION['cadastroErro'] = "Usuário ou email já cadastrados!";
    	echo "<script>window.location.href = '../cadastrar.php';</script>";
    }else{
    	// Preparando as caracteristicas da sequencia randomica
		$tamanho = 3;
		$alfabeto = '0123456789';
		$minimo = 0;
		$maximo = strlen($alfabeto) - 1;

		// Gerando a sequencia
		$code = '';
		for ($i = $tamanho; $i > 0; --$i) {

		    // Sorteando uma posicao do alfabeto
		    $posicao_sorteada = mt_rand($minimo, $maximo);

		    // Obtendo o simbolo correspondente do alfabeto
		    $caractere_sorteado = $alfabeto[$posicao_sorteada];

		    // Incluindo o simbolo na sequencia
		    $code .= $caractere_sorteado;
		}

		//Nome da tabela que futuramente será criada caso seja validado o email
		$table = substr($cidade,0,5).$code;

	    // Insere no banco de dados as informações digitadas
	    $inserir = "INSERT INTO users (usuario, senha, email, estado, cidade, confcode, tabelabanco) VALUES ('$user','$senha','$email','$estado','$cidade','$code','$table')";
	    if (mysqli_query($conn, $inserir)) {
	    	@include('../includes/enviar_email.php');
	    	echo "<script> window.location.href = '../sucesso.php';</script>";
		} else {
	      $_SESSION['cadastroErro'] = "Por favor, Selecione um Estado e a Unidade!";
	      echo "<script>window.location.href = '../cadastrar.php';</script>";
		}
    }
?>