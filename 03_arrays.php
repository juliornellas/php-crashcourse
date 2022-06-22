<?php
// Data type or data structure that holds multiple values
// Simple Array

$numbers = [1,3,7,9,13];

$fruits = array('orange', 'apple', 'pear');

var_dump($numbers);
echo "<br>";

echo $fruits[1];

echo "<hr>";

// Associative array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'yellow'
];

echo $colors[6];

echo "<br>";

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'yellow' => '#ff0'
];

echo $hex['blue'];

echo "<br>";

$person = [
    'first_name' => 'Saci',
    'last_name' => 'Perere',
    'email' => 'saci@perere.com'
];

echo $person['first_name'];

echo "<hr>";

// Array multidimensional

$people = [
    [
    'first_name' => 'Saci',
    'last_name' => 'Perere',
    'email' => 'saci@perere.com'    
    ],
    [
        'first_name' => 'Boto',
        'last_name' => 'Cor de Rosa',
        'email' => 'boto@corderosa.com'
    ],
    [
        'first_name' => 'Mula',
        'last_name' => 'Sem Cabeça',
        'email' => 'mula@semcabeca.com'
    ],
];

echo $people[1]['email'];

echo "<hr>";

// Convertendo em JSON
var_dump(json_encode($people));

