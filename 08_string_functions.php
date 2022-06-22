<?php

echo'<h1>String Functions</h1> <hr>';

$string = 'Bem vindo ao Curso de PHP';
echo $string;
echo '<br>';

//Tamanho da string
echo strlen($string);
echo '<br>';

//Posição (index) de uma letra na string
echo strpos($string, 'o');
echo '<br>';

//Encontra a ultima posição (index) de uma letra na string
echo strrpos($string, 'o');
echo '<br>';

//Escreve a string no formato reverso
echo strrev($string);
echo '<br>';

//Converte tudo para minusculo
echo strtolower($string);
echo '<br>';

//Converte tudo para maiusculo
echo strtoupper($string);
echo '<br>';

//1º caractere maiusculo de cada letra
echo ucwords($string);
echo '<br>';

//Substituir palavra ou letra
echo str_replace('PHP', 'HTML', $string);
echo '<br>';
echo str_replace('o','y',$string);
echo '<br>';

//Retornar um pedaço da string. Posição inicio e fim
echo substr($string, 0, 9);
echo '<br>';
//Inicia a string a partir da 5ªposição
echo substr($string, 5);
echo '<br>';
//Conta a partir do final
echo substr($string, -3);
echo '<br>';
echo substr($string, -5, 4);
echo '<br>';

//Começa com... >>NÃO ESTA FUNCIONANDO<<
// if(str_starts_with($string, 'Bem')){
//     echo 'SIM';
// }
// echo '<br>';

//Termina com... >>NÃO ESTA FUNCIONANDO<<
// if(str_ends_with($string, 'PHP')){
//     echo 'SIM';
// }
// echo '<br>';

//Passando HTML na tel
$string2 = '<h1>JavaScript</h1>';
echo $string2;
echo '<br>';

//Isso pode ser um problema pois emitira o alerta
$string3 = "<script>alert('Alerta')</script>";
echo $string3;
//Para evitar usar tratamento para tags e codigos.
//Passa a ser considerado texto puro
echo htmlspecialchars($string3);
echo '<br>';

//Passando uma referencia %s e depois informando os valores
printf('%s não tem %s. Tentou %d vezes', 'Tal time','mundial',3);
echo '<br>';
//%d mais indicado a numeros
printf('1+1=%d', 1+1);
echo '<br>';
//%f mais indicado a numeros tipo float
printf('1+1=%f', 1+1);
echo '<br>';
