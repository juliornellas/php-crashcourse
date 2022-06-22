<?php
// Comentario

/*
Comentários
em multiplas
linhas
*/

// ECHO - output strings, numbers, html, etc
// echo "Ola em php!!! <br>";
// possivel combinar
// echo 123,'+',0,'+','Texto';

// echo "<hr>";

// PRINT - igual ECHO mas apenas 1 tipo de variavel
// print 'Print texto <br>';
// print 456;

// PRINT_R() - é uma função. Serve para single values e arrays
// print_r('<hr>');
// print_r('PRINT_R texto');
// print_r('<br>');
// print_r(['item1','item 2', 789]);
// print_r('<br>');
// $frutas = ['banana','maça','uva','melancia'];
// $mix = [$frutas, 'liquidificador', 13];
// print_r($frutas);
// print_r('<br>');
// print_r($mix);
// print_r('<hr>');

// VAR_DUMP() - tb função. Retorna mais informações como tipo de dados e tamanho
// var_dump($frutas);
// print_r('<hr>');

// VAR_EXPORT() - tb função. Retorna a representação da variavel
// var_export('VAR EXPORT');
// print_r('<hr>');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Curso de PHP'; ?></title>
</head>
<body>
    <h1 style="color: <?php echo 'yellow'; ?>"><?= 'Bem vindo ao curso de PHP!'; ?></h1>
</body>
</html>