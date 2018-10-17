<?php
session_start();
$session4 = $_GET['windows'];
$_SESSION['q4'] = $session4;

$resp1 = $_SESSION['q1'];
$resp2 = $_SESSION['q2'];
$resp3 = $_SESSION['q3'];
$resp4 = $_SESSION['q4'];

$cont = 0;

if ($resp1 == "Azul"){
	$cont = $cont + 2.5;
	echo "A resposta era: Azul. E você respondeu: ", $resp1;
	echo "<br>";
}
if ($resp2 == "6") {
	$cont = $cont + 2.5;	
	echo "A resposta era: 6. E você respondeu: ", $resp2;
	echo "<br>";
}
if ($resp3 == "Jumento") {
	$cont = $cont + 2.5;
	echo "A resposta era: Jumento. E você respondeu: ", $resp3;
	echo "<br>";
}
if ($resp4 == "9") {
	$cont = $cont + 2.5;
	echo "A resposta era: 9. E você respondeu: ", $resp4;
	echo "<br>";
	echo "<br>";
}
echo "Sua nota foi: ", $cont;
 