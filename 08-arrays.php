<?php
// Array
$carros = array(1 => "BMW", 2 => "Mercedes", 3 => "Audi");
$carros[] = "Porsche";
$carros[10] = "Camaro";

$motos = array();
$motos[0] = "Yamaha";
$motos[1] = "Ducati";
$motos[5] = "Kawasaki";

$clientes = ["Rodrigo", "Felipe", "Bia"];

print_r($carros);

echo "<br>";

echo $carros[2];

echo "<hr>";

print_r($motos);

echo "<br>";

echo "$motos[5]";

echo "<hr>";

print_r($clientes);

echo "<hr>";





/////////////////////////////////////////////

// Count
$numCarros = count($carros);
echo $numCarros;
echo "<hr>";

// Foreach
foreach ($carros as $carro) {
	echo $carro . "<br>";
}

echo "<hr>";





/////////////////////////////////////////////

// Arrays Associativos
$pessoa = array("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);

$pessoa['cidade'] = "Recife";

echo $pessoa['nome'];

echo "<br>";

echo $pessoa['altura'];

echo "<br>";

foreach ($pessoa as $indice => $valor) {
	echo $indice.": ".$valor."<br>";
}

echo '<hr>';
// Arrays Multidimensionais

$car_manufacturers = array(
					"italians" => array('fastest' => 'ferrari', '2nd_fastest' => 'lamborghini', 'slowest' => 'pagani'),
					"germans" => array('cheap' => 'Mercedes',  'expensive' => 'Audi', 
						'reliable' =>'volkswagen'),
					"frenchs" => array('renault', 'peugeot', 'citroen')
					);
echo $car_manufacturers["frenchs"][1];
echo '<br>';
echo $car_manufacturers["germans"]["reliable"];
echo "<hr>";

//Foreach aninhado
foreach ($car_manufacturers as $countries => $arrays) {
	foreach ($arrays as $char => $manuf) {
		echo $char . ': ' . $manuf ."<br>";
	}
}













