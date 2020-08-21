<?php
$pdoConnection = require_once "conexao.php";
require "functions/function.php";
require "class/Update.class.php";

  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sexo = $_POST['sexo'];
    $num = $_POST['num'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $senha = md5($_POST['senha']);

    $r = getEstadoId($pdoConnection, $estado);
    foreach ($r as $result) {
      $estado = $result['id'];
    }

    $s = getSexoId($pdoConnection, $sexo);
    foreach ($s as $se) {
      $sexo = $se['id'];
    }

    $update = new updateData();
    $r = $update->upAdm($id, $nome,$cpf,$email,$tel,$sexo,$num,$rua,$bairro,$cidade,$estado,$cep,$senha);
    
    if ($r = true){
      echo "<script> alert ('Atualizado') </script>";
      echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../cliente/perfil.php" />';
    }elseif($r = false) {
      echo "<script> alert ('Não Atualizado 1') </script>";
      echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../cliente/perfil.php" />';
    }

  }else {
    echo "<script> alert ('Não Atualizado 2') </script>";
    echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=../clienet/perfil.php" />';
  }
?>