<?php
$peso=$_POST["peso"];
$alt=$_POST["alt"];

calculo_imc($peso, $alt);

echo "O IMC é ". $resultado;

?>