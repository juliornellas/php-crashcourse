<?php
// TIPOS DE VARIAVEIS
// STRINGS - caracteres entre aspas simples ou duplas
// INTEGER - numeros
// BOOLEAN - verdadeiro ou falso, true or false - **0 ou 1**
// FLOAT - numeros decimais
// ARRAY - coleção diversa de variaveis
// OBJECT - objeto com suas propriedades e atributos. Uma classe
// NULL - variavel vazia, nula
// RESOURCE - variavel especial

// REGRAS PARA VARIAVEIS
/*
- Iniciar com $
- Iniciar com letra ou underscore
- Não pode iniciar com numero
- Variaveis podem conter somente caracteres alphanumericos e underscore
(A-z, 0-9 e _)
- Variaveis são sensiveis a MAIUSCULO e minusculo $nome diferente de $Nome
*/

$nome = 'Tiradentes';
$idade = 33;
$tem_filhos = false;
$din_din = 13.25;

$n = 0;

// var_dump($din_din);
// if($n){
// if($tem_filhos){
//     echo 'VERDADE. 0 ou 1 = '.$n;
// }else{
//     echo 'FALSO. 0 ou 1 = '.$n;
// }
// echo "<hr>";

echo '1. O $nome está com $idade. Tem $din_din no bolso.';
echo "<hr>";
echo '2. O '.$nome.' está com '.$idade.' .Tem '.$din_din.' no bolso.';
echo "<hr>";
echo "3. O ${nome} está com ${idade}. Tem ${din_din} no bolso.";
echo "<hr>";
echo "4. O $nome está com $idade. Tem $din_din no bolso.";

echo "<hr>";

echo 5+8;
echo "<br>";
echo '5'+'8'+'0';
echo "<br>";

$x = '6' + '7';
var_dump($x);
echo "<br>";
echo 20 - 7;
echo "<br>";
echo 26 / 2;
echo "<br>";
echo 6.5 * 2;

echo "<hr />";
// Constante para coisas que nunca vão mudar
// Usado para situacoes tipo: banco de dados, URLs, etc
define('HOST','localhost');
define('DB_NAME','dev_database');
echo HOST;
echo "<br>";
echo DB_NAME;