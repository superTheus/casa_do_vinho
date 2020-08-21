<?php
	require("session.php");

	if(isset($perfil)){

		if($perfil == 'admin'){
		
		echo "<script> 
				window.location.href='http://".$host."/".$site."/admin';
			</script>";	

		}elseif ($perfil == 'cliente') {
			echo "<script> 
				window.location.href='http://".$host."/".$site."/cliente';
			</script>";	
		}

	}

?>