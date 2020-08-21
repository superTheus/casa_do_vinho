<?php 
	require "../php/header_admin.php";

	require_once "../php/functions/function.php";

	if (isset($_GET['acao']) && $_GET['acao'] = "up"){
		header("Location: msg.php");
	}

	$r = getCompra($pdo);
	
?>
	<script>
		function chamarPhpAjax(id) {
		   $.ajax({
		      url:'newajax.php?codigo='+id,
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
			<form action="relatorio.php?acao=up">
			<table>
				<tr>
					<th>Cliente</th>
					<th>Vinho</th>
					<th>Total</th>
					<th>Data</th>
					<th>Situação</th>
					<th>Finalizar Compra</th>
				</tr>
				<?php  foreach ($r as $result) : ?>
				<tr>
						<td style="width: 20%"><?php echo $result['cliente']; ?></td>
						<td style="width: 20%"><?php echo $result['Vinho']; ?></td>
						<td style="width: 15%"><?php echo number_format($result['Total'], 2, ',', '.'); ?></td>
						<td style="width: 20%"><?php echo $result['Data']; ?></td>
						<td style="width: 20%"><?php echo $result['Situacao']; ?></td>
						<td style="width: 30%"><a href="" onclick="return chamarPhpAjax(<?php echo $result['id']; ?>);" > <img src="../images/icon/4.png" width="20" height="20"> </a></td>
				</tr>
				<?php endforeach ?>
			</table>

		<?php }else{
			echo "Sem Compras";
		} ?>
	</div>
	<div style="width: text-align: center; width: 80%; margin: auto; margin-top: 40px">
		<button type="submit" class="btn btn-primary py-3 px-5" >Atualizar</button>
	</div>


<?php require "../php/footer_admin.php";?>