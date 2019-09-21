<?php

	include_once 'conexao.php';

	//
	$nome = $_POST['nome'];
	$data = $_POST['data'];
    $descricao = $_POST['descricao'];
	
	


    $sql = "INSERT INTO atendimento VALUES(null,'{$nome}','{$data}', null, '{$descricao}')"; 

	// $inserir = mysqli_query($con, $sql);

	$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

	header("location:msgAtendimento.php?msg=".$msg);
?>