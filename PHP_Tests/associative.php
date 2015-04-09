<?php
$cars = array(
"Fiat" => "no",
"Volkswagen" => "yes",
"Chevrolet" => "no",
"Ford" => "no",
"Renault" => "yes",
"Peugeot" => "yes",
"Citroen" => "no",
"Honda" => "yes",
"Hyundai" => "yes",
"Toyota" => "yes",
"Mitsubishi" => "yes",
"Nissan" => "yes",
"Kia" => "no",
"BMW" => "yes",
"JAC" => "no"
);

// ordenando vetores em PHP
#asort($cars);	// pelo valor, em ordem crescente
ksort($cars);	// pela chave, em ordem crescente
#arsort($cars);	// pelo valor, em ordem decrescente
#krsort($cars);	// pela chave, em ordem decrescente

# Função para selecionar os carros escolhidos ("yes")
function doYouLike ($likeCar)
{
	return $likeCar == "yes";
}

# Catálogo de carros
$i = 0;
foreach ($cars as $car => $pref)
{
	# Mostre apenas se gostou
	if ($pref == "yes") {
		// i=0 -> 'I like...'
		if ($i == 0){
			Echo "I like $car";
		}
		// i=count(apenas os escolhidos)-1 -> '... and ...'
		elseif ($i == count(array_filter($cars,"doyouLike"))-1){
			Echo " and $car";
		}
		// outros i -> "...+',' "
		else {
			Echo ", $car";
		}
		# próximo carro
		$i++;
	} 
}
Echo ".<br/>\n";
?>