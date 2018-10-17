<?php
session_start();
$session3 = $_GET['animal'];
$_SESSION['q3'] = $session3; ?>
<form method="GET" action="final.php">
		O 7 comeu o: <br>
 		<input type="radio" name="windows" value="9"> 9<br>
 		<input type="radio" name="windows" value="Pão"> Pão<br>
 		<input type="radio" name="windows" value="Mouse"> Mouse<br><br>
		<input type="submit" name="enviar" value="Enviar">