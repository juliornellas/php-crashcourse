<?php

/* For Loop */

/*
Loop syntax
for(initialize; condition; increment){
    // code to be executed
}
*/

for($x=0; $x < 10; $x++){
    echo $x;
}
echo '<br>';

$list = ['Saci', 'Boto', 'Mula'];
// echo sizeof($list);
echo count($list);
echo '<br>';

for($i=0; $i < sizeof($list); $i++){
    echo 'Valor do i: '.$i.' - '.$list[$i].'<br>';
}

echo '<hr>';

/** While loop */

/**
 * while loop syntax
 * while(condition){
 * //Code to execute
 * }
 */
$y = 1;

while($y <= 15){
    echo 'Numero = '.$y.'<br>';
    // $y++;
    $y = $y + 1;
}

echo '<hr>';

/** Do While loop */

/**
 * Do while loop syntax
 * do{
 * //Code to execute
 * }while(condition);
 * 
 * A diferença é que ele sempre será executado mesmo quando a condição
 * não for atendida, pq ele acontece antes de verificar a condição.
 */

//  $r = 1;
 $r = 13;
//  Logo executa ao menos 1x

 do {
    echo 'Numero: '.$r.'<br>';
    $r++;
 }while($r <= 9);

echo '<hr>';

/** Foreach loop
 * 
 * Syntax
 * foreach($array as $value){
 * //code to be executed
 * }
 * 
 */

$posts = ['First Post', 'Second Post', 'Third Post'];

// for ($x=0; $x < count($posts); $x++){
// echo $posts[$x].'<br>';
// }

foreach($posts as $post){
echo $post.'<br>';
}

// Com index
foreach($posts as $i => $post){
    echo 'Index:'.$i.' - '.$post.'<br>';
}

// Array associado
$person = [
    'fn' => 'Saci',
    'ln' => 'Perere',
    'email' => 'saci@perere.com'
];

foreach($person as $key => $value){
    echo "$key - $value <br>";
}