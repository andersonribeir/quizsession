<?php
session_start();
$session1 = $_GET['color'];
$_SESSION['q1'] = $session1;


?>
<form method="GET" action="q3.php">
		2+2<sup>2?=</sup> <br>
 		<input type="radio" name="valor" value="16"> 16<br>
 		<input type="radio" name="valor" value="2"> 7<br>
 		<input type="radio" name="valor" value="6"> 6<br><br>
		<input type="submit" name="enviar" value="Enviar">





 
