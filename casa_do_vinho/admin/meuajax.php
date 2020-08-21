<?php

function deleteMessage() {
	$pdo = require_once "../php/conexao.php";

    $sql = "DELETE FROM contato WHERE id =".$_GET['codigo'];
	$sbmt = $pdo->prepare($sql);
	$sbmt->execute();

	if ($sbmt->rowCount()>0) {
		echo "Deletado";
	}else{
		echo "Não deletado";
	}

}

deleteMessage();

?>