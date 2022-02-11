<?php
	
	$pdo = require_once "../../php/conexao.php";
	require "cart.php";
	require "function.php";

	$qtd =$_GET['qtd'];
	$nome =$_GET['nome'];
	$idVinho =$_GET['id'];
	$st =$_GET['st'];
	$hr = date('d/m/Y \à\s H:i:s');
	$status = 'Não Entregue';
	$id = $_GET['idUsu'];

	$v = getVinho2($pdo,$nome);

	foreach ($v as $vinho) {
		$qtdNew = $vinho['qtd'];
	}
	if ($qtdNew < $qtd) {
		$qtd = $qtdNew;
	}else{
		$qtd = ($qtdNew - $qtd);
	}

	$s = updateWiner($pdo,$idVinho, $qtd);

	$r = getCliente2($pdo,$id);
	foreach ($r as $s) {
		$idCliente = $s['id'];
	}

	$sql = "INSERT INTO compras (id_cliente, id_vinho,qtd,hora,total,status) VALUES (".$idCliente.", ".$idVinho.",".$qtd.",'".$hr."',".$st.",'".$status."')";
	$sbmt = $pdo->prepare($sql);
	$sbmt->execute();

	if ($sbmt->rowCount()>0) {
		echo "<script> alert ('Compra Feita') </script>";
		deleteCart($idVinho);
		echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../carrinho.php" />';
	}else{
		echo "<script> alert ('Compra não Feita') </script>";
	}
?>