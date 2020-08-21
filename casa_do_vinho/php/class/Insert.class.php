<?php

	class Insert{
		
		public function getCliente($nome, $cpf,	 $email, $tel,$sexo,$num,$rua,$bairro,$cidade,$estado,$cep,$senha,$perfil){
			global $pdo;

			require "Usuario.class.php";

			$sql = "INSERT INTO usuario(nome, email,senha, perfil) VALUES ('".$nome."','".$email."','".$senha."','".$perfil."')";
			$sbmt = $pdo -> prepare($sql);
			$sbmt->execute();

			if ($sbmt->rowCount()>0) {
				$r = getUsuId($pdo,$email, $nome);

				foreach ($r as $result) {
					$idUsu = $result['id'];
				}

				$sql = "INSERT INTO cliente(id_usu, nome, cpf, email, telefone, id_sexo, rua, numero, bairro, cep, cidade, id_estado) VALUES (".$idUsu." ,'".$nome."', '".$cpf."','".$email."','".$tel."',".$sexo.", '".$rua."',".$num.", '".$bairro."','".$cep."','".$cidade."',".$estado.")";
				$sbmt = $pdo -> prepare($sql);
				$sbmt->execute();
				if ($sbmt->rowCount()>0){
					$u = new Usuario();
					$ul = $u->getUsu($email,$senha);

					if ($ul = true) {
						return true;
					}elseif ($ul = false) {
						return false;
					}
				}


			}else{
				header("Location: ../../cadastrar.php");
			}
		}

	}



?>