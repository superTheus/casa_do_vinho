<?php
  $pdoConnection =  require_once "../php/conexao.php";

  if(!isset($_SESSION['id']) && !isset($_SESSION['perfil'])){

    echo "<script> alert ('Usuario não autenticado')</script>";
    header("Location: ../index.php");

  }elseif($_SESSION['perfil'] = "admin" ){

    
    require_once "../php/functions/function.php";

    $results = getUsu($pdoConnection, $_SESSION['id']);
    
    if (isset($results)){
      foreach ($results as $r){
        $id = $r['id'];
        $nome = $r['nome'];
      }
    }
    
  }


?>
<!DOCTYPE html>
<html lang="pt-br">   

<head>
  <title>Casa do Vinho/Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "../images/icon.png"/>
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="../css/modify.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">
  <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../css/style.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

</head>

<body class="admin-modify" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
          <div>
            <nav class="menu_modify" role="navigation">
              <ul class="ul-menu-modify">
                <li><a href="index.php" class="nav-link-modify">Home</a></li>
                <li><a href="form.php" class="nav-link-modify">Cadastrar</a></li>
                <li><a href="msg.php" class="nav-link-modify">Mensagens</a></li>
                <li><a href="relatorio.php" class="nav-link-modify">Relatórios</a></li>
              </ul>                                                                                              
            </nav>
            <div class="welcome_modify">
    <div class="subwelcome_modify">
      <p class="welcome-usu-modify"><a class="link-usu-modify" href="#" title="Ver perfil"><?php echo "Bem vindo ".$nome?></a>
      <a href="../php/logout.php" title="Sair"><img src="../images/icon/logout1.png" style="width: 45px; height: 40px;"></a>
    </p>
    </div>
    </div>
          </div>