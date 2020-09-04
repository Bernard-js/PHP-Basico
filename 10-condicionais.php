<?php


$numero = 15;

if ($numero == 15) {
	echo "igual a 15";
}

echo "<br>";

if ($numero == 10):
	echo "é igual a 10";
else:
	echo "é diferente de 10";
endif;

echo "<br>";

if ($numero >= 12) {
	echo "maior ou igual a 12";
} elseif ($numero >= 9) {
	echo 'entre 12 e 9';
} else {
	echo "menor que 9";
}

echo "<hr>";

$media = 7;

echo ($media >= 7) ? 'aprovado' : 'reprovado';

echo "<hr>";

//////////////////////////////////////////////////////////////

$carro = "gol";

switch ($carro) {
	case 'fusca':
		echo 'antigo';
	break;
	
	case 'gol':
		echo "carro popular";
	break;

	case 'veloster':
		echo "carro de playboy";	
	break;

	default:
		"carro qualquer";
	break;
}

echo "<br>";

$marca_pc = "dell";

switch($marca_pc):
	case 'apple':
		echo "macbook";
	break;

	case 'samsung':
		echo "ultrabook";
	break;

	case 'lenovo':
		echo "ideapad";
	break;

	case 'dell':
		echo "inspiron";	
	break;

	case 'asus':
		echo "vivobook";	
	break;

	default:
		echo "laptop";
endswitch;










