<?php

echo '<h1>Cookies</h1><hr>';
/**
 * COOKIES armazenam dados no browser, ou seja, no lado do cliente.
 * Ajudando a identificar os usuários e qqr outra informação que o
 * desenvolvedor achar relevante.
 */

//Nome do cookie, valor a ser armazenado e o tempo de duração
// setcookie('name','Saci Perere',time() + 86400 * 30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

// Deletar definir como vazio
setcookie('name', null);
//ou como vazio
setcookie('name', '');
