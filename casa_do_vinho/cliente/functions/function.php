<?php
	function getProductsByIds($pdo, $ids) {
		$sql = "SELECT * FROM vinho WHERE id IN (".$ids.")";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function getVinho2($pdo,$nome){
		$sql = "SELECT * FROM vinho WHERE nome = '".$nome."'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function getCliente2($pdo, $id){
		$sql = "SELECT * FROM cliente WHERE id_usu = ".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

		return $r;
	}
	function updateWiner($pdo,$id,$qtd){
		$sql = "UPDATE vinho SET qtd = ".$qtd." WHERE id = ".$id;
		$sbmt = $pdo->prepare($sql);
		$sbmt->execute();

		if ($sbmt->rowCount()>0) {
			return true;
		}else{
			return false;
		}
	}
?>