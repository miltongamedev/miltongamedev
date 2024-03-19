<?php 
header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');    
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
//$_SERVER['HTTP_REFERER'];
require_once("classes/ranking.class.php");
$ranking = new Ranking();

$getRanking = $ranking->getList();

$position = 1;

foreach ($getRanking as $showRanking) {
		echo $position." - ".$showRanking->nome."=".$showRanking->pontos."|";
		$position++;
}

?>