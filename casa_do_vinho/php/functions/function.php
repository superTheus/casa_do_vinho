<?php 
	function insertContato($pdo,$primeiro_nome, $ultimo_nome, $email, $tel, $msg){
		$hora = date('d/m/Y \à\s H:i:s');
		$nome = $primeiro_nome." ".$ultimo_nome;
		$sql = "INSERT INTO contato (nome, email, telefone, mensagem, hora_mensage) VALUES ('".$nome."','".$email."','".$tel."','".$msg."','".$hora."')";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		if ($sbmt->rowCount()>0) {
			return 1;
		}else{
			return 0;
		}

	}

	function getUsu($pdo, $id){
		$sql = "SELECT * FROM usuario WHERE id =".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getUsuID($pdo, $email, $nome){
		$sql = "SELECT * FROM usuario WHERE email = '".$email."' AND nome = '".$nome."'";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getCliente($pdo){
		$sql = "SELECT * FROM cliente ORDER BY nome ASC";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getClienteID($pdo, $id){
		$sql = "SELECT * FROM cliente WHERE id_usu = ".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getAdmID($pdo, $id){
		$sql = "SELECT * FROM adm WHERE id_usu = ".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getEstado($pdo){
		$sql = "SELECT * FROM estado ORDER BY nome ASC";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getEstadoId($pdo,$nome){
		$sql = "SELECT * FROM estado WHERE nome = '".$nome."'";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	function getEstadoNome($pdo,$id){
		$sql = "SELECT * FROM estado WHERE id = ".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getSexo($pdo){
		$sql = "SELECT * FROM sexo ORDER BY sexo_nome ASC";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getSexoId($pdo,$nome){
		$sql = "SELECT * FROM sexo WHERE sexo_nome = '".$nome."'";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	function getSexoNome($pdo,$id){
		$sql = "SELECT * FROM sexo WHERE id = ".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}

	function getMessage($pdo){
		$sql = "SELECT * FROM contato ORDER BY nome ASC";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	function getVinho($pdo){
		$sql = "SELECT * FROM vinho";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	function insertVinho($pdo, $nome,$marca, $preco, $qtd, $desc){
		$sql = "INSERT INTO vinho (nome, marca, preco, qtd, descricao) VALUES ('".$nome."', '".$marca."', ".$preco.", ".$qtd." ,'".$desc."')";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();
		if ($sbmt->rowCount()>0) {
			return true;
		}else{
			return false;
		}
	}
	function getCompra($pdo){
		$sql = "SELECT * FROM compra WHERE Situacao <> 'Entregue' ORDER BY cliente ASC";
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	function endCompra($pdo,$id){
		$sql = "UPDATE compra SET Situacao = 'Entregue' WHERE id =".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		if ($sbmt->rowCount()>0) {
			return true;
		}else{
			return false;
		}
	}
	
?>