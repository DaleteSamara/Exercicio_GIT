<?php
// Lívia Ferreira
	
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$operacao = $_POST["operacao"];
	$resultado= 0;	

	if(!file_exists('calculos.xml') ){
		
		$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
		
			<calculos>
				<calculo>
					<num1>$num1</num1>
					<num2>$num2</num2>
					<operacao>$operacao</operacao>
				</calculo>
			</calculos>
			";
			file_put_contents("calculos.xml", $xml);
	} 
	
	else{
			
			$xml = simplexml_load_file("calculos.xml");
			$calculo = $xml->addChild('calculo');
			$calculo -> addChild('num1', $num1);
			$calculo -> addChild('num2', $num2);
			$calculo -> addChild('operacao', $operacao);
	
			file_put_contents("calculos.xml",$xml->asXML());
			
		}	
			


switch ($operacao) {
    case 1:
        $resultado= $num1+$num2;
		echo"".$num1."+".$num2."=".$resultado."";
        break;
    case 2:
        $resultado= $num1-$num2;
		echo"".$num1."-".$num2."=".$resultado."";
        break;
    case 3:
        $resultado= $num1*$num2;
        echo"".$num1."*".$num2."=".$resultado."";
		break;
    case 4:
        $resultado= $num1/$num2;
		echo"".$num1." divido por ".$num2." é ".$resultado."";
        break;
	case 5:
        $resultado= ($num2*100)/$num1;
		echo"".$num2."porcento de ".$num1." é igual a ".$resultado. "";
        break;
    default:
        echo"
				<p>
					Você não selecionou nenhuma operação;
				</p>
				<p>
					<a herf='calculadora.php'/>Voltar à calculadora
				</p>
			";
	
}
	
?>

		
	
		