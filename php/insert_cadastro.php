<?php
	$pdoConnection = require_once "conexao.php";
	require "functions/function.php";
	require "class/Insert.class.php";

	if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$sexo = $_POST['sexo'];
		$num = $_POST['num'];
		$rua = $_POST['rua'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$cep = $_POST['cep'];
		$senha = md5($_POST['senha']);
		$perfil = "cliente";

		$e = getEstadoId($pdoConnection, $estado);
		$s = getSexoId($pdoConnection, $sexo);

		foreach ($e as $es) {
			$idEstado = $es['id'];
		}

		foreach ($s as $se) {
			$idSexo = $se['id'];
		}

		$u = new Insert();
		$r = $u->getCliente($nome, $cpf, $email, $tel,$idSexo,$num,$rua,$bairro,$cidade,$idEstado,$cep,$senha,$perfil);

		if ($r = true && isset($_SESSION['perfil'])){
			header("Location: ../cliente/index.php");
		}
		
	}

	


?>