<?php

/** manipular dados num array */

$fruits = ['apple','orange','pear'];

echo count($fruits);

echo '<hr>';

var_dump(in_array('apple',$fruits));

echo '<hr>';

$fruits[] = 'grape';

// Adc no final
array_push($fruits, 'melon', 'blueberry');
// Adc no começo
array_unshift($fruits, 'banana');

// Remove ultimo
array_pop($fruits);
// Remove primeiro
array_shift($fruits);
// Especifico
// unset($fruits[2]);

// Chunk. Quebrar em 2 partes
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);

echo'<hr>';

print_r($fruits);

echo'<hr>';

// Fusão de arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

echo '<br>';

// Spread operator
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);

echo '<br>';

// Combinar
$a = ['green','red','yellow'];
$b = ['avocado','apple','banana'];

$c = array_combine($a, $b);
print_r($c);

echo '<br>';

// Invertendo chaves para valores
$flipped = array_flip($c);
print_r($flipped);

echo '<br>';
// Mostrando apenas as chaves
$keys = array_keys($c);
print_r($keys);

echo '<hr>';

// Cria array dentro de um range
$numbers = range(1, 30);
print_r($numbers);
echo'<br>';
$letters = range('a', 'z');
print_r($letters);

echo '<hr>';

// Percorrendo array com MAP
$newNumbers = array_map(function($number){
    return "Numero ${number}";
}, $numbers);

print_r($newNumbers);

echo '<hr>';

//Filtrando items no array
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

print_r($lessThan10);

echo '<hr>';

// Reduce. Acumula e/ou soma valores.
$sum = array_reduce($numbers, fn($acc, $number) => $acc + $number);

var_dump($sum);