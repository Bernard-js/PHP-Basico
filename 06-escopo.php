<?php
//ESCOPO GLOBAL
$nome = "bernard inojosa";
$a = 5;
$b = 3;
$c = 8;

function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";

////////////////////////////

function exibeCidade(){
	//ESCOPO LOCAL
	global $cidade;
	$cidade = "Recife";
}

exibeCidade();
echo $cidade;
echo "<hr>";

/////////////////////////////////////

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();


