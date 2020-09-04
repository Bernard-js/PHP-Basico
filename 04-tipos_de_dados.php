<?php

/******************* Escalares ******************/

//String
$String = "Is a String of Charachters";
var_dump($String);
if (is_string($String)) {
	echo "é uma String";
} else {
	echo "não é uma String";
}
echo "<hr>";

//int
$idade = 10;
var_dump($idade);
if (is_int($idade)):
	echo "is an integer";
else:
	echo "is not an integer";
endif;
echo "<hr>";

//float
$altura = 1.83;
var_dump($altura);
if (is_float($altura)) {
	echo "é um float";
} else {
	echo "Não é um float";
}
echo "<hr>";

//boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)) {
	echo "é um boolean";
} else {
	echo "Não é um boolean";
}
echo "<hr>";

/********************* Compostos ************************/

//Array
$carros = array("Gol", "Palio", "Carrera", 12, 20.6, true);
var_dump($carros);
if (is_array($carros)) {
	echo "é um array";
} else {
	echo "não é um array";
}
echo "<hr>";

//Object
class Cliente
{
	public $nome;
	public function atribuirNome($nome)
	{
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Bernard");
var_dump($cliente);
if (is_object($cliente)) {
	echo "é um object";
} else {
	echo "Não é um object";
}
echo "<hr>";

/********************* Especiais **********************/
//NULL
$cidade = NULL;
var_dump($cidade);

//Resource















