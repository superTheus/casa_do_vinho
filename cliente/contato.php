<?php require("../php/header_cliente.php") ?>

<div class="hero-2" style="background-image: url('../images/5.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Comunique-se Conosco</span>
            <h2>Contato</h2>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="section-title mb-5">
              <h2>Dados de Contato</h2>
            </div>
            <form action="functions/insert_contato.php" method="post">
              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="fname">Primeiro Nome</label>
                          <input type="text" id="pnome" name="pnome" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="lname">Ultimo Nome</label>
                          <input type="text" id="uname" name="unome" class="form-control form-control-lg">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="eaddress">E-mail</label>
                          <input type="text" id="email" name="email" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="tel">Telefone</label>
                          <input type="text" id="tel" name="tel" class="form-control form-control-lg">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="msg">Mensagem</label>
                          <textarea name="msg" id="msg"  cols="30" rows="10" class="form-control"></textarea>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.940537152911!2d-60.05774505188374!3d-3.1104353752397293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c0fdc1b7975b9%3A0x1855a1535d298a86!2sBeco%20S%C3%A3o%20Lucas%20-%20Compensa%2C%20Manaus%20-%20AM%2C%2069035-799!5e0!3m2!1spt-BR!2sbr!4v1585107503703!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

<?php require"../php/footer_cliente.php"; ?>