<?php

for ($contador=0; $contador < 10; $contador++) { 
	echo "Contador = " . $contador . "<br>";
}

for ($i=0; $i < 10; $i++): 
	echo "i = " . $i . "<br>";
endfor;

$carros = array('vw' => 'fusca', 'fiat' => 'uno', 'ford' => 'fiesta');

foreach ($carros as $carro) {
	echo $carro . '<br>';
}

foreach ($carros as $marca => $carro):
	echo "O " . $carro . " é da " . $marca . '<br>';
endforeach;