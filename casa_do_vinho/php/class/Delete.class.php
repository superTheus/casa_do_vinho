<?php

	class Delete{
		
		public function deleteUsu($pdo,$id_usu){
			
			$sql = "SELECT * FROM cliente WHERE id=".$id_usu;
			$sql = $pdo->prepare($sql);
			$sql->execute();
			$results = $sql->fetchAll(PDO::FETCH_ASSOC);
			foreach ($results as $r) {
				$id = $r['id'];
				$id_usu = $r['id_usu'];
			}
			if ($sql->rowCount()>0) {

				$sql = "DELETE FROM compras WHERE id_cliente =".$id;
				$sql = $pdo->prepare($sql);
				$sql->execute();

				if ($sql->rowCount()>0){
					$sql = "DELETE FROM cliente WHERE id_usu = ".$id_usu;
					$sql = $pdo->prepare($sql);
					$sql->execute();

					if ($sql->rowCount()>0) {
						if ($r = true) {
							$sql = "DELETE FROM usuario WHERE id = ".$id_usu;
							$sql = $pdo->prepare($sql);
							$sql->execute();

							if ($sql->rowCount()>0) {
								return true;
							}else{
								return false;
							}
							}else{
								return false;
							}
					}else{
						return false;
					}
				}
			}else{
				return false;
			}

					
		}
	}

?>