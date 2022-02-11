<?php 
  $pdoConnection = require_once "php/conexao.php";
  require "php/functions/function.php";

  $r = getEstado($pdoConnection);
  $s = getSexo($pdoConnection);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Casa do Vinho - Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "images/icon.png"/>

  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/modify.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpf").mask("999.999.999-99");
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tel").mask("(99) 99999-9999");
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cep").mask("99999-999");
        });
    </script>

</head>
  
    <!-- MODAL LOGIN -->
  <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="php/login.php" method="post" style="text-align: center;">
                          <div class="row" style="margin: auto;">
                              <div class="modal-form-modify">
                                  <label for="email">E-mail</label>
                                  <input type="text" id="email" name="email" class="form-control form-control-lg">
                              </div>
                          </div>
                          <div class="row" style="margin: auto;">
                              <div class="modal-form-modify">
                                  <label for="senha">Senha</label>
                                  <input type="password" name="senha" id="senha"  cols="30" rows="10" class="form-control">
                              </div>
                          </div>

                          <div class="row" style="margin: auto;">
                              <div class="col-12" style="margin-top: 10px; ">
                                  <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
                              </div>
                             <p class="modal-p-modify">Ainda não tem cadastro?<a href="cadastrar.php">cadastre-se aqui</a></p>
                          </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

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
              <img src="images/logo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <a href="index.html" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mx-auto">
            <nav class="site-navigation position-relative text-left" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                <li><a href="index.php" class="nav-link text-left">Home</a></li>
                <li><a href="sobre.html" class="nav-link text-left">Sobre</a></li>
                <li class="active"><a href="cadastrar.php" class="nav-link text-left">Cadastrar</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal" class="nav-link text-left">Login</a></li>
                <li><a href="contato.html" class="nav-link text-left">Contato</a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    
    

    <div class="hero-2" style="background-image: url('images/5.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <h2>Faça seu Cadastro</h2>
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
            <form action="php/insert_cadastro.php" method="post">
              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="pnome"> Nome</label>
                          <input type="text" id="nome" name="nome" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="unome">CPF</label>
                          <input type="text" id="cpf" name="cpf" class="form-control form-control-lg">
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
                          <input type="text" id="num" name="num" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="rua">Rua</label>
                          <input type="text" id="rua" name="rua" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="bairro">Bairro</label>
                          <input type="text" id="bairro" name="bairro" class="form-control form-control-lg">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="cidade">Cidade</label>
                          <input type="text" id="cidade" name="cidade" class="form-control form-control-lg">
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
                          <input type="text" id="cep" name="cep" class="form-control form-control-lg">
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
                          <input type="submit" value="Cadastrar" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

  

    
    
    <div class="footer">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
            <div class="social-icons">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dieitos Reservados | Desenvolvido por <a href="https://github.com/Matheus-Souza710" target="_blank" >Matheus Souza</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>



            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>