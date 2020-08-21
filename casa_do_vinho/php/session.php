<?php 
	
	$pdoConnection = require_once "conexao.php";

	if (!isset($_SESSION['id']) ) {	
	    //Destroi a sessão
	    session_destroy();
	 
	    //Limpa
	    unset($_SESSION['id']);
	    unset ($_SESSION['perfil']);
	     
			
			
			
	} else {
		
		$id=$_SESSION['id'];

		$sql = "SELECT * FROM usuario WHERE id = ".$id;
		$sbmt = $pdoConnection->prepare($sql);
		$sbmt->execute();

		$results = $sbmt->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($results as $result) {
			$id = $result['id'];
			$nome_usuario = $result['nome'];
			$email = $result['email'];
			$perfil = $result['perfil'];
		}
		
	}

?>