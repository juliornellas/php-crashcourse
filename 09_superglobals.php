<?php
echo '<h1>Super Globals</h1>';

/**
 * Super Globals são variaveis nativas que ficam disponíveis para
 * todos globalmente
 * 
 * $_GET = informações oriundas da URL ou formulario
 * $_POST = informações oriundas de um formulario
 * $_COOKIE = informações armazenadas em um cookie
 * $_SESSION = informações armazenadas na sessão
 * $_SERVER = informações sobre o ambiente do servidor
 * $_ENV = variaveis do ambiente do projeto
 * $_FILES = arquivos enviados
 * $_REQUEST = informações sobre as variaveis passadas atraves de um
 * form ou url
 */

// var_dump($_SERVER);

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
