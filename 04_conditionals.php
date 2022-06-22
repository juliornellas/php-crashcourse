<?php

/*
< Less than
> greater than
<= less than or equal to
>= greater than or equal to
== Equal to
=== identical to
!= not equal to
!== not identical to
*/

/*
**If statements
if(condition){
    code to be executed if condition is true
}
*/

$age = 15;

if ($age >= 16){
    echo 'You are old enough to vote';
}else{
    echo 'You are not old enough to vote';
}

echo "<br>";

$time = date("H");

if($time < 12){
    echo 'Good morning';
} elseif($time < 17){
    echo 'Good afternoon';
}else{
    echo 'Good evening';
}

echo "<hr>";

$posts = ['First post'];
// IF sem operador, verificando existencia
if(!empty($posts)){
    echo $posts[0];
}else{
    echo 'No posts';
}

echo "<hr>";

// Operador ternário
echo !empty($posts) ? $posts[0] : 'No posts';

echo "<br>";

// $fisrtPost = !empty($posts) ? $posts[0] : 'No posts';

$fisrtPost = $posts[0] ?? null;

echo $fisrtPost;

echo "<hr>";

// switch
$favcolor = 'purple';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'yellow':
        echo 'Your favorite color is yellow';
        break;
    default:
        echo 'You don\'t have a favorite color';
}