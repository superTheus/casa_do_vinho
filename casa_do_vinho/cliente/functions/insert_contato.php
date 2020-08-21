<?php 
	$pdoConnection = require_once "../../php/conexao.php";

	require('../../php/functions/function.php');
	


	if (isset($_POST['pnome']) && isset($_POST['unome']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['msg'])) {
		$primeiro_nome = $_POST['pnome'];
		$ultimo_nome = $_POST['unome'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$msg = $_POST['msg'];

		$r = insertContato($pdoConnection,$primeiro_nome, $ultimo_nome, $email, $tel, $msg);
		if(isset($r) && $r=1){
			echo "<script> alert ('Mensagem enviada')</script>";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../contato.php" />';
		}elseif (isset($r) && $r=0) {
			echo "<script> alert ('Mensagem não enviada')</script>";
			echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../contato.php" />';
		}
	}
	

	

?>