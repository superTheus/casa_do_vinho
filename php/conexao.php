<?php 


session_start();
//Dados do banco de dados
define("DB_HOST", "localhost");
define("DB_NAME", "db_casa_do_vinho");
define("DB_USER", "root");
define("DB_PASS", "");

global $pdo;

try{
	$pdo =  new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}

return $pdo;

