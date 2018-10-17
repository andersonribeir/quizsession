<?php
session_start();
$session2 = $_GET['valor'];
$_SESSION['q2'] = $session2; ?>
<form method="GET" action="q4.php">
		Burro = Égua + ? <br>
 		<input type="radio" name="animal" value="Cachorro"> Cachorro<br>
 		<input type="radio" name="animal" value="Burro"> Burro<br>
 		<input type="radio" name="animal" value="Jumento"> Jumento<br><br>
		<input type="submit" name="enviar" value="Enviar">