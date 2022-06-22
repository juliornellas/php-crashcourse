<?php
// Bloco de codigo com um nome, onde vc pode executar onde quiser

// Variavel global
$y=13;

function registerUser(){
    global $y; //Informar que é global, entao funciona
    echo $y; //Chamado direto da erro
    $x = 9; //Variavel escopo da função apenas
    echo "Usuario registrado";
}

// echo $x; //Erro

registerUser();

echo "<hr>";

/**
 * Argumento VS Parametro
 * Argumento são as variaveis definidas na função, no caso: $email
 * Parametros são as variaveis/valores passados ao chamar a função,
 * no caso: email@mail.com
 */

//  Named function
function registerUsuario($email){
    echo "$email registrado";
}

registerUsuario('email@mail.com');

echo "<hr>";

function sum($n1 = 3, $n2 = 10){
    return $n1 + $n2;
}

// $result = sum(7,6);
$result = sum(); //Com valor default setado, ex: 3 e 10
echo $result;

echo "<hr>";

/** Função direto na variavel */
// Funcao anonima. Sem nome.
$subtract = function($n1, $n2){
    return $n1 - $n2;
};

echo $subtract(20,7);

echo "<hr>";

// Arrow function
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(6.5, 2);