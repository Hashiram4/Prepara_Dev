<?php
    session_start();  
    @include('controllers/conexao.php');
    @include('includes/ocultar_erros.php');

    $usuario = strtoupper($_POST['usuario']);
    $senha = $_POST['senha'];
    
    $busca = mysqli_query($conn,"SELECT * FROM users WHERE usuario='$usuario' AND senha='$senha'")
        or die ("<h1>Não foi possível realizar a busca</h1>");

    while ($reg=mysqli_fetch_assoc($busca)) {
        {$login_db = $reg["usuario"];}
        {$senha_db = $reg["senha"];}
        {$email_db = $reg["email"];}
        {$unidade_db = $reg["cidade"];}
        {$tabela_banco_db = $reg["tabelabanco"];}
        {$status_db = $reg["ativo"];}
        {$id_db = $reg["id"];}
    }

    if ($login_db == $usuario && $usuario != "") {
        if ($status_db == 1) {
            $_SESSION['usuario'] = $login_db;
            $_SESSION['senha'] = $senha_db;
            $_SESSION['email'] = $email_db;
            $_SESSION['unidade'] = $unidade_db;
            $_SESSION['tabela'] = $tabela_banco_db;
            $_SESSION['id'] = $id_db;
            $_SESSION['status'] = 1;
            echo "<script>window.location.href = 'controllers/controller_home.php';</script>";
        }else{
            $_SESSION['loginErro'] = "Entrar no seu email para confirmar o cadastro";
            echo "<script>window.location.href = 'index.php';</script>";
        }   
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválidos";
       echo "<script>window.location.href = 'index.php';</script>";
    }

?>