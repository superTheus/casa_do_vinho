<?php  
	
	class Usuario{
		
		public	function getUsu($email, $senha){
			global $pdo;

			$sql = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'";
			$sbmt = $pdo->prepare($sql);
			$sbmt->execute();

			if ($sbmt->rowCount()>0) {
				$dados = $sbmt->fetch();
				
				$_SESSION['id'] = $dados['id'];
				$_SESSION['perfil'] = $dados['perfil'];

				return true;

			}else{
				return false;
			}

		}
	}

?>