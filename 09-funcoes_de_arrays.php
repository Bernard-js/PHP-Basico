<?php

/*
 * is_array(array)
 * in_array(valor, array)
 * array_keys(array)
 * array_values(array)
 * array_merge(array1, array2)
 * array_pop(array)
 * array_shift(array)
 * array_unshift(array, valor, valor)
 * array_push(array, valor, valor)
 * array_combine(keys, values)
 * array_sum(array)
 * explode("/", "20/01/2001")
 * implode("-", array)
 */


$numbers = array(1, 2, 3, 32, 76);
$keys = array_keys($numbers);
$values = array_values($numbers);
print_r($keys);
print_r($values);

$date = "30/10/2020";

$novaData = explode('/', $date);


print_r($novaData);

$nomes = array("Jim", "Dwight", "Michael", "Derek");

$string = implode(", ", $nomes);

echo $string;













