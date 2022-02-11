<?php  require "../php/header_admin.php"; ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <a href="index.html" class="site-logo">
              <img src="../images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <a href="index.html" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
        </div>
      </div>
    
    </div>

    
    

    <div class="hero-2" style="background-image: url('../images/5.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <h2>Vinhos</h2>
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
            <form action="../php/vinho.php" method="post">
              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="pnome">Nome</label>
                          <input type="text" id="nome" name="nome" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="marca">Marca</label>
                          <input type="text" id="marca" name="marca" class="form-control form-control-lg"> 
                      </div>
                  </div>
                  <div class="row">
                       <div class="col-md-6 form-group">
                          <label for="preco">Preço</label>
                          <input type="text" id="preco" name="preco" class="form-control form-control-lg" >
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="qtd">Quantidade</label>
                          <input type="text" name="qtd" class="form-control form-control-lg" >
                      </div>
                  </div>
                   <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="desc">Descrição</label>
                          <textarea name="desc" class="form-control form-control-lg" maxlength="500"></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <input type="submit" value="Cadastrar" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>