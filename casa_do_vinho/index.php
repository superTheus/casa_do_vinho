<?php 
  $pdo = require_once "php/conexao.php";
  require "php/functions/function.php";

  $r = getMessage($pdo);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Casa do Vinho</title>
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
              <img src="images/logo.png" alt="Casa do Vinho"  class="img-fluid">
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
                <li class="active"><a href="index.html" class="nav-link text-left">Home</a></li>
                <li><a href="sobre.html" class="nav-link text-left">Sobre</a></li>
                <li><a href="cadastrar.php" class="nav-link text-left">Cadastrar</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal" class="nav-link text-left">Login</a></li>
                <li><a href="contato.html" class="nav-link text-left">Contato</a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    
    <div class="owl-carousel hero-slide owl-style">
      <div class="intro-section container" style="background-image: url('images/3.jpg');">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Venha Conferir</span>
            
          </div>
        </div>
      </div>

      <div class="intro-section container" style="background-image: url('images/4.jpg');">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Bem Vindo</span>
            <h1>Casa do Vinho</h1>
          </div>
        </div>
      </div>

    </div>
    
    

    <div class="site-section mt-5">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12 section-title text-center mb-5">
            <h2 class="d-block">Produtos</h2>
            <p>Vinhos Tinto, bom preço e com qualidade!</p>
            <p><a href="#" data-toggle="modal" data-target="#myModal">Ver Outros Produtos<span class="icon-long-arrow-right"></span></a></p>
          </div>
        </div>
        <div class="row">
          
          <div class="col-lg-4 mb-5 col-md-6">

            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/vinhos/1.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#" data-toggle="modal" data-target="#myModal">Vinho Tinto Alceo Tempranillo 2015</a></h3>
                <span class="price">R$79,90</span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#" data-toggle="modal" data-target="#myModal">Alceo Tempranillo 2015</a></h3>
                <span class="price d-block">R$79,90</span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="#" class="btn add" data-toggle="modal" data-target="#myModal"><span class="icon-shopping-bag mr-3" ></span>Adicionar ao Carrinho</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mb-5 col-md-6">
            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/vinhos/2.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Vinho Tinto Marques de Caceres Reserva 2014</a></h3>
                <span class="price">R$199.00</span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#">Marques de Caceres Reserva 2014</a></h3>
                <span class="price d-block"><del>R$450.00</del> $199.00</span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="#" class="btn add" data-toggle="modal" data-target="#myModal"><span class="icon-shopping-bag mr-3"></span>Adicionar ao Carrinho</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5 col-md-6">
            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/vinhos/3.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Vinho Tinto Ixsir Grande Reserve Red 2012</a></h3>
                <span class="price">R$339,00</span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#">Vinho Tinto Ixsir Grande Reserve Red 2012</a></h3>
                <span class="price d-block">R$339,00</span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="#" class="btn add" data-toggle="modal" data-target="#myModal"><span class="icon-shopping-bag mr-3"></span>Adicionar ao Carrinho</a>
              </div>
            </div>
          </div>

          

        </div>
        <div class="row">
          
          <div class="col-lg-4 mb-5 col-md-6">

            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/vinhos/1.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Vinho Tinto Alceo Tempranillo 2015</a></h3>
                <span class="price">R$79,90</span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#">Alceo Tempranillo 2015</a></h3>
                <span class="price d-block">R$79,90</span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="#" class="btn add" data-toggle="modal" data-target="#myModal"><span class="icon-shopping-bag mr-3"></span>Adicionar ao Carrinho</a>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mb-5 col-md-6">
            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/vinhos/2.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Vinho Tinto Marques de Caceres Reserva 2014</a></h3>
                <span class="price">R$199.00</span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#">Marques de Caceres Reserva 2014</a></h3>
                <span class="price d-block"><del>R$450.00</del> $199.00</span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="#" class="btn add" data-toggle="modal" data-target="#myModal"><span class="icon-shopping-bag mr-3"></span>Adicionar ao Carrinho</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5 col-md-6">
            <div class="wine_v_1 text-center pb-4">
              <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="images/vinhos/3.webp" alt="Image" class="img-fluid"></a>
              <div>
                <h3 class="heading mb-1"><a href="#">Vinho Tinto Ixsir Grande Reserve Red 2012</a></h3>
                <span class="price">R$339,00</span>
              </div>
              

              <div class="wine-actions">
                  
                <h3 class="heading-2"><a href="#">Vinho Tinto Ixsir Grande Reserve Red 2012</a></h3>
                <span class="price d-block">R$339,00</span>
                
                <div class="rating">
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star"></span>
                  <span class="icon-star-o"></span>
                </div>
                
                <a href="#" class="btn add" data-toggle="modal" data-target="#myModal"><span class="icon-shopping-bag mr-3"></span>Adicionar ao Carrinho</a>
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </div>

    <div class="hero-2" style="background-image: url('images/5.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Obrigado</span>
            <h2>Tamos sempre pra lhe servir o melhor</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="owl-carousel owl-slide-3 owl-slide">
        <?php foreach ($r as $result) : ?>

          <blockquote class="testimony">
            
            <p>&ldquo;<?php echo $result['mensagem'] ?>&rdquo;</p>
            <p class="small text-primary">&mdash; <?php echo $result['nome'] ?></p>
          </blockquote>

        <?php endforeach ?>
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