<?php 
	require "../php/header_admin.php";

	require_once "../php/functions/function.php";

	if (isset($_GET['acao']) && $_GET['acao'] = "up"){
		header("Location: msg.php");
	}

	$r = getMessage($pdo);
	
?>
	<script>
		function chamarPhpAjax(id) {
		   $.ajax({
		      url:'meuajax.php?codigo='+id,
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
					<th>Email</th>
					<th>Mensagem</th>
					<th>Remover</th>
				</tr>
				<?php  foreach ($r as $result) : ?>
				<tr>
					
						<td style="width: 30%"><?php echo $result['nome']; ?></td>
						<td style="width: 30%"><?php echo $result['email']; ?></td>
						<td style="width: 30%"><?php echo $result['mensagem']; ?></td>
						<td style="width: 5%"><a href="" onclick="return chamarPhpAjax(<?php echo $result['id']; ?>);" > <img src="../images/icon/4.png" width="20" height="20"> </a></td>
					
				</tr>
				<?php endforeach ?>
			</table>

		<?php }else{
			echo "Sem Mensagens";
		} ?>
	</div>
	<div style="width: text-align: center; width: 80%; margin: auto; margin-top: 40px">
		<button type="submit" class="btn btn-primary py-3 px-5" >Atualizar</button>
	</div>


<?php require "../php/footer_admin.php";?>