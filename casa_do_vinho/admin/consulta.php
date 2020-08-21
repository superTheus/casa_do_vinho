<?php 
	require("../php/header_admin.php");

	if (isset($_GET['acao']) && $_GET['acao'] = "up"){
		header("Location: consulta.php");
	}

	$r = getCliente($pdoConnection);
?>
	<script>
		function chamarPhpAjax(id) {
		   $.ajax({
		      url:'ajax.php?codigo='+id,
		      complete: function (response) {
		         alert(response.responseText);
		      },
		      error: function () {
		          alert('Erro');
		      }
		  });  

		  return false;
		}
	</script>

	<div class="conteiner_modify">
		<?php if (!empty($r)) { ?>
			<form action="msg.php?acao=up">
			<table>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th colspan="2" >Contato</th>
					<th>Sexo</th>
					<th colspan="6">Endereço</th>
					<th>Remover</th>
				</tr>
				<tr>
					<?php  foreach ($r as $result) : ?>
						<td width="200px;"><?php echo $result['nome']; ?></td>
						<td width="200px;"><?php echo $result['cpf']; ?></td>
						<td width="100px;"><?php echo $result['email']; ?></td>
						<td width="100px;"><?php echo $result['telefone']; ?></td>
						<td width="200px;">
							<?php 
								$s = getSexoNome($pdoConnection, $result['id_sexo']);
								foreach ($s as $sexo) {
									echo $sexo['sexo_nome'];
								}
							?>
						</td>
						<td width="80px;" >Numero: <?php echo $result['numero']; ?></td>
						<td width="80px;" >rua: <?php echo $result['rua']; ?></td>
						<td width="80px;" >Bairro: <?php echo $result['bairro']; ?></td>
						<td width="80px;" >Cidade: <?php echo $result['cidade']; ?></td>
						<td width="80px;" >Estado: 
							<?php 
								$s = getEstadoNome($pdoConnection, $result['id_estado']);
								foreach ($s as $estado) {
									echo $estado['nome'];
								}
							?>
						</td>
						<td width="80px;" >CEP: <?php echo $result['cep']; ?></td>
						<td><a href="" onclick="return chamarPhpAjax(<?php echo $result['id']; ?>);" > <img src="../images/icon/4.png" width="20" height="20"> </a></td>
					<?php endforeach ?>
				</tr>
			</table>

		<?php }else{
			echo "Sem Cadastros";
		} ?>
	</div>
	<div style="width: text-align: center; width: 80%; margin: auto; margin-top: 40px">
		<button type="submit" class="btn btn-primary py-3 px-5" >Atualizar</button>
	</div>

<?php require "../php/footer_admin.php";?>