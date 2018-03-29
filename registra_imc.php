<?php
$peso=$_POST["peso"];
$alt=$_POST["alt"];

$conta1 = $alt*$alt;
$conta2 = $peso/$conta1;


	$resultado = $conta2;
	
	echo"Seu imc é $resultado";
?>