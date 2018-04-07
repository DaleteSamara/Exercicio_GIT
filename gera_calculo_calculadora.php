<?php
// Lívia Ferreira
// Atualização: Giovanna Martinez
	
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
			</calculos>";
			file_put_contents("calculos.xml", $xml);
	}else{

		$xml = simplexml_load_file("calculos.xml");
		$calculo = $xml->addChild('calculo');
		$calculo -> addChild('num1', $num1);
		$calculo -> addChild('num2', $num2);
		$calculo -> addChild('operacao', $operacao);

		file_put_contents("calculos.xml",$xml->asXML());

	}	
	calculo($num1, $num2, $operacao);
	
	echo "O resultado é ".$resultado;
?>
