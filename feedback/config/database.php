<?php
define('DB_HOST', 'localhost:3308');
define('DB_USER', 'cbt');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
// A instancia, no retorno tem propriedade chamada connect_error
// echo '<pre>';
// var_dump($conn);
// echo '</pre>';

// echo var_dump($conn->connect_error);
// echo '<hr/>';
// echo var_dump(isset($conn->connect_error));
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';
