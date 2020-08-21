<?php 
  require("../php/header_cliente.php");
	
	if (isset($_SESSION['id'])) {

		$result = getClienteId($pdoConnection, $_SESSION['id']);

		foreach ($result as $r){
      $id = $r['id_usu'];
			$nome = $r['nome'];
      $cpf = $r['cpf'];
			$email = $r['email'];
			$tel = $r['telefone'];
			$rua = $r['rua'];
			$num = $r['numero'];
			$bairro = $r['bairro'];
			$cep = $r['cep'];
			$cidade = $r['cidade'];
		}

		$r = getEstado($pdoConnection);
		$s = getSexo($pdoConnection);
	}

?>

	 <div class="hero-2" style="background-image: url('../images/5.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <h2>Dados Casdatrados</h2>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="section-title mb-5">
              <h2>Dados de Cadastro</h2>
            </div>
            <form action="../php/updateCliente.php?id=<?php echo $id ?>" method="post">

              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="nome">Nome</label>
                          <input type="text" id="nome" name="nome" class="form-control form-control-lg" value="<?php echo $nome ?>" >
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="pnome">CPF</label>
                          <input type="text" id="cpf" name="cpf" class="form-control form-control-lg" value="<?php echo $cpf ?>" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress">E-mail</label>
                          <input type="text" id="email" name="email" class="form-control form-control-lg" value="<?php echo $email ?>">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel">Telefone</label>
                          <input type="text" id="tel" name="tel" class="form-control form-control-lg" value="<?php echo $tel ?>">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="sexo">Sexo</label>
                          <select id="sexo" name="sexo" class="form-control form-control-lg">
                            	<?php foreach ($s as $result) : ?>
            				   		<option><?php echo $result['sexo_nome']; ?></option>
            				    <?php endforeach; ?>
                          </select>
                      </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 form-group">
                          <label for="num">Número</label>
                          <input type="text" id="num" name="num" class="form-control form-control-lg" value="<?php echo $num ?>">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="rua">Rua</label>
                          <input type="text" id="rua" name="rua" class="form-control form-control-lg" value="<?php echo $rua ?>">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="bairro">Bairro</label>
                          <input type="text" id="bairro" name="bairro" class="form-control form-control-lg" value="<?php echo $bairro ?>">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="cidade">Cidade</label>
                          <input type="text" id="cidade" name="cidade" class="form-control form-control-lg" value="<?php echo $cidade ?>" >
                      </div>
                      <div class="col-md-6 form-group">
                      	<label for="estado">Estado</label>
                          <select name="estado" class="form-control form-control-lg">
  				    		<?php foreach ($r as $result) : ?>
                              <option><?php echo $result['nome']; ?></option>
                            <?php endforeach; ?>
				 		  </select>
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="cep">Cep</label>
                          <input type="text" id="cep" name="cep" class="form-control form-control-lg" value="<?php echo $cep ?>">
                      </div>
                  </div>
                   <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="senha">Senha</label>
                          <input type="password" id="senha" name="senha" class="form-control form-control-lg" maxlength="16">
                      </div>
                  </div>
                  

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Atualizar Dados" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

<?php require"../php/footer_cliente.php"; ?>