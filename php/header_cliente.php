<?php
	$pdoConnection =  require_once "../php/conexao.php";
  require "functions/function.php";

  if(!isset($_SESSION['id']) && !isset($_SESSION['perfil'])){

    echo "<script> alert ('Usuario não autenticado')</script>";

  }elseif(isset($_SESSION['id']) && isset($_SESSION['perfil']) && $_SESSION['perfil'] = "cliente" ){
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Casa do Vinho</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "../images/icon.png"/>
  <link rel="stylesheet" href="../css/modify.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="../css/aos.css">
  <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"><div class="site-wrap">

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
            <a href="index.php" class="site-logo">
              <img src="../images/logo.png" alt="Casa do Vinho"  class="img-fluid">
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
                  <li><a href="sobre.php" class="nav-link text-left">Sobre</a></li>
                  <li><a href="perfil.php" class="nav-link text-left">Perfil</a></li>
                  <li><a href="produtos.php">Comprar</a></li>
                  <li><a href="carrinho.php">Carrinho</a></li>
                  <li><a href="contato.php" class="nav-link text-left">Contato</a></li>
                  <li><a href="../php/logout.php" class="nav-link text-left">Sair</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>