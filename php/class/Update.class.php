<?php

	class updateData{
		public function upAdm($id_usu,$nome,$cpf,$email, $tel,$sexo,$num,$rua,$bairro,$cidade,$estado,$cep,$senha){
			global $pdo;

			$sql = "SELECT * FROM usuario WHERE id =".$id_usu;
			$sbmt = $pdo->prepare($sql);
			$sbmt->execute();

			$r = $sbmt->fetchAll(PDO::FETCH_ASSOC);

			foreach ($r as $t) {
				$perfil = $t['perfil'];
			}
			if ($perfil == "admin") {
				$sql = "UPDATE usuario SET nome = '".$nome."', email = '".$email."', senha ='".$senha."' WHERE id = ".$id_usu;
				$sbmt = $pdo -> prepare($sql);
				$sbmt->execute();

				if ($sbmt->rowCount()>0){
					$sql = "UPDATE adm SET nome = '".$nome."', cpf = '".$cpf."', email = '".$email."', telefone = '".$tel."', id_sexo = ".$sexo.", rua = '".$rua."', numero = ".$num.", bairro = '".$bairro."', cep = '".$cep."', cidade = '".$cidade."', id_estado = ".$estado." WHERE id_usu = ".$id_usu;
					$sbmt = $pdo -> prepare($sql);
					$sbmt->execute();
					if ($sbmt->rowCount()>0){
						if ($ul = true) {
							return true;
						}elseif ($ul = false) {
							return false;
						}
					}else{
						echo "Não Atualizado";
						header("Location: ../admin/perfil.php");
					}


				}else{
					echo "Não Atualizado";
					header("Location: ../admin/perfil.php");
				}
			}elseif ($perfil == 'cliente'){
				$sql = "UPDATE usuario SET nome = '".$nome."', email = '".$email."', senha ='".$senha."' WHERE id = ".$id_usu;
				$sbmt = $pdo -> prepare($sql);
				$sbmt->execute();

				if ($sbmt->rowCount()>0){
					$sql = "UPDATE cliente SET nome = '".$nome."', cpf = '".$cpf."', email = '".$email."', telefone = '".$tel."', id_sexo = ".$sexo.", rua = '".$rua."', numero = ".$num.", bairro = '".$bairro."', cep = '".$cep."', cidade = '".$cidade."', id_estado = ".$estado." WHERE id_usu = ".$id_usu;
					$sbmt = $pdo -> prepare($sql);
					$sbmt->execute();
					if ($sbmt->rowCount()>0){
						if ($ul = true) {
							return true;
						}elseif ($ul = false) {
							return false;
						}
					}else{
						echo "Não Atualizado";
						header("Location: ../admin/perfil.php");
					}


				}else{
					echo "Não Atualizado";
					header("Location: ../admin/perfil.php");
				}
			}

			

			
		}

	}



?>