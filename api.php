<?php 
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
//$_SERVER['HTTP_REFERER']
require_once("classes/ranking.class.php");
$ranking = new Ranking();

if($_POST){
	$ranking->add();
}