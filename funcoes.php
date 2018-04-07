<!-- Giovanna Martinez -->
<?php
	function(calculo){
		switch ($operacao) {
			case ("adicao"):
				$resultado= $num1+$num2;
				return($resultado)
				break;
			case ("sub"):
				$resultado= $num1-$num2;
				return($resultado)
				break;
			case ("divisao"):
				$resultado= $num1/$num2;
				return($resultado)
				break;
			case ("mult"):
				$resultado= $num1*$num2;
				return($resultado)
				break;
			case ("perc")
				$resultado= ($num2*100)/$num1;
				return($resultado)"";
				break;
		}
	}
	
	function(calculo_imc){
		$resultado = $peso/($altura*$altura);
		
		return($resultado);
	}
?>