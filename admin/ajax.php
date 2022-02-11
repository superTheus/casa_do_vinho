<?php

function remover() {
	$pdo = require_once "../php/conexao.php";

	require_once "../php/class/Delete.class.php";
   
	$r = new Delete();

	$s = $r->deleteUsu($pdo,$_GET['codigo']);

	if ($s = true) {
		echo "Deletado";
	}elseif ($s = false) {
		echo "Não deletado";
	}

}

remover();

?>