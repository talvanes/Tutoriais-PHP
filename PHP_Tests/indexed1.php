<?php
$cars=array("Fiat","Volkswagen","Chevrolet","Ford","Renault","Peugeot","Citroen","Honda","Hyundai","Toyota","Mitsubishi","Kia","BMW","JAC");

//ordenando vetores
sort($cars);	// ordena vetores simples em ordem cresente
#rsort($cars);	// ordena vetores simples em ordem decresente

// Catálogo de carros
for ($i = 0; $i < count($cars); $i++)
	{
	// i=0 -> 'I like...'
	if ($i == 0) {
		Echo "I like $cars[$i]";
	} 
	// i=count(cars)-1 -> '... and ...'
	elseif ($i == count($cars)-1) {
		Echo " and $cars[$i]";
	} 
	// outros i -> "...+',' "
	else {
		Echo ", $cars[$i]";
	}
}
//'pulando' linha
Echo ".<br/>\n";
?>