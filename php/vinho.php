<?php
	$pdo = require_once "conexao.php";
	require "functions/function.php";

	$nome = $_POST['nome'];
	$marca = $_POST['marca'];
	$preco = $_POST['preco'];
	$qtd = $_POST['qtd'];
	$desc = $_POST['desc'];

	$r = insertVinho($pdo, $nome,$marca, $preco, $qtd, $desc);
	if ($r == true) {
		echo "<script> alert('Vinho Cadastrado') </script>";
	}elseif ($R == false) {
		echo "<script> alert('Vinho Não Cadastrado') </script>";
	}
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../admin/cadVinho.php" />';
    

?>