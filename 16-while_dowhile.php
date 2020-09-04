<?php

//While e Do-While

$contador = 1;
$i = 1;

while ($contador <= 10):
	echo "contador é $contador";
	echo "<br>";
	$contador++;
endwhile;

while ($i <= 10) {
	echo "i é $i";
	echo "<br>";
	$i++;
}

echo "<hr>";

$contador = 1;

do {

	
	echo "Contador é $contador";
	echo "<br>";	
	$contador++;

} while ($contador <= 10);
