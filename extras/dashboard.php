<?php
//Iniciar a criação ou acesso as sessão
session_start();

if(isset($_SESSION['username'])){
    echo '<h1>Bem vindo, '.$_SESSION['username'].' !</h1>';
    echo '<a href="logout.php">Logout</a>';
}else{
    echo '<h1>Bem vindo, visitante!</h1>';
}