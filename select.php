<?php 
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');    
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
//$_SERVER['https://miltongamedev.github.io/prisonboy/']
require_once("classes/ranking.class.php");
$ranking = new Ranking();

if($_POST["acao"] == "login"){

	$nickname = $_POST['nickname'];

	$result = $ranking->verificaJogador($nickname);
	if($result){
		die("1, $result->id, $result->pontos");
	}
	else{
   	    die("0");
	}
}

if($_POST["acao"] == "cadastro"){
    
    $nome = $_POST['nome'];

    $verifica = $ranking->VerificaName($nome);
    if($verifica){
    	die("2");
    }
    	
	if($ranking->add()){
	  die("1");
	}    
    else{
	  die("0");
    }
 }

 if($_POST["acao"] == "update"){
    
    $_POST['id'] = $_POST['id'];
    $_POST['pontos'] = $_POST['pontos'];

  	
	if($ranking->update($_POST['id'])){
	  die("1");
	}    
    else{
	  die("0");
    }
 }