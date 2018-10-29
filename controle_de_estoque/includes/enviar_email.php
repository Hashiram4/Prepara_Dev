<?php
	@include('../includes/mostrar_erros.php');

	$from = "Prepara Cursos - SE";

	$subject = "Confirme seu cadastro";

	$link = "https://preparacursos.000webhostapp.com/confcodes/index.php?code=". $code;

	$message = "Clique aqui para confirmar seu cadastro ------->  ". $link;

	$headers = "De:". $from;

	mail($email, $subject, $message, $headers);
?>