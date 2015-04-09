<?php
$cars=array("Fiat","Volkswagen","Chevrolet","Ford","Renault","Peugeot","Citroen","Honda","Hyundai","Toyota","Mitsubishi","Kia","BMW","JAC");

// ordenando vetores
#sort($cars);	// ordena vetores simples em ordem cresente
rsort($cars);	// ordena vetores simples em ordem decresente

// Catálogo de carros
$i = 0;
foreach ($cars as $car)
{
	// i=0 -> 'I like...'
	if ($i == 0) {
		Echo "I like $car";
	} 
	// i=count(cars)-1 -> '... and ...'
	elseif ($i == count($cars)-1) {
		Echo " and $car";
	} 
	// outros i -> "...+',' "
	else {
		Echo ", $car";
	}
	$i++;
}
//'pulando' linha
Echo ".<br/>\n";
?>