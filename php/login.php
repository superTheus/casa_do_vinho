<?php

	if (isset($_POST['email']) && isset($_POST['senha'])){
		require 'conexao.php';
		require 'class/Usuario.class.php';

		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$r = new Usuario();
		
		$result = $r->getUsu($email, $senha);

		if($result = true){
			if (isset($_SESSION['id']) && isset($_SESSION['perfil'])) {
				header("Location: ../".$_SESSION['perfil']."/index.php");
			}else {
				header("Location: ../index.php");
			}
			
			
		}elseif($result = false){
			header("Location: ../index.php");
		}
	}else{
		header("Location: ../index.php");
	}



	
?>