<?php

$names = [
    'Julio',
    'Danilo',
    'Thalita',
    'Adeíza',
    'Diogo',
    'Leidiane',
    'Flavia',
    'Edenilson',
    'Elisangela',
    'Tuany',
    'Silvia',
    'Alex',
    'Alberto',
    'Robson',
    'Edison',
    'Wellington',
    'Naim',
];

$deuentender = [
    '*Ana Elisa',
    'Vera',
    'Waldísia',
    'Eliane',
    'João',
    'Cleber',
    'Bruno',
    '*Franz',
    'Leonardo',
    'Sergio',
];

$nv = [
    'eliane',
    'cleber',
    'helyene',
    'clovis',
    'carlos henrique',
    'leonardo',
    'rui',
    'ivone',
    'joão',
    'etiene',
    'nataly',
    'edson',
    'rodrigo',
    'fabiana',
    'eliude',
    'pilar',
    'rosangela',
    'cidinha', 
    'jorge',
    'marcelo bruno',
    'mayra',
    'michelly',
    'simone lima',
    'maria',
];

$parte2 = [];

$reuniao = [
    'Ivan',
    'Pamela',
    'Barbara',
    'Nadir',
    'Gisela',
    'Alcir',
    'Gisele',
    'Luana',
    'Lucia',
    'Rubens',
    'Cidinha',
    'Rosi',
    'Sergio',
    'Franz',
    'Elisangela',
    'Edson'
];

echo "Meus ".count($names);

echo '<hr>';

echo "Outra parte  ".count($parte2);

echo '<hr>';

echo "Disseram que ".count($deuentender);

echo '<hr>';

echo "Acredito que não ". count($nv);

echo '<hr>';

$soma = count($names) + count($deuentender) + count($nv);

echo "Total = ${soma}";
