<?php
// Constantes
define('NOME', 'Bernard');
define('IDADE', 18);
define('ALTURA', 1.74);

define('MARCAS', ['ferrari', 'prada', 'oracle']);


echo 'Meu nome é ' . NOME . ', minha idade é ' . IDADE . ' e eu meço ' . ALTURA .'m';
echo "<hr>";
echo MARCAS[0];
echo "<br>";
var_dump(MARCAS);
echo "<hr>";

//Constantes estão sempre no escopo global

function exibeNome(){
	echo NOME;
}

exibeNome();

 