<?php

function remover() {
	$pdo = require_once "../php/conexao.php";
	require_once "../php/functions/function.php";

	$r = endCompra($pdo,$_GET['codigo']);
	if ($r == true) {
		echo "Entregue";
	}else{
		echo "Não Entregue";
	}

}

remover();

?>