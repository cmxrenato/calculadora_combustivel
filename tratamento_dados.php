<?php 
      
      
       	$combustivel = $_POST['combustivel'];
		$valor = $_POST['valor'];



function calcular($combustivel,$valor){

if ($combustivel == "alcool"){
	
	$resultado = $valor/0.7;

	return ("A gasolina tem que estar acima de R$ ".number_format($resultado, 2, ',', '.')." para o álcool valer a pena.");
	
} else if($combustivel == "gasolina") {

 $resultado = $valor*0.7;
 
 return ("O álcool tem que estar acima de R$ ".number_format($resultado, 2, ',', '.')." para a gasolina valer a pena.");

}
} 


      echo calcular($combustivel,$valor);
      
      
      ?> 
