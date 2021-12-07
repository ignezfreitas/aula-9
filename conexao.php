<?php

$localhost  = "localhost";
$username   = "root";
$password   = "";
$db         = "bdcurso";
try {
    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    echo " conexao realizada";
    //var_dump($con); //debugar - Descobrir o que está sendo respondido
} catch(PDOException $e) {
    echo "conexão falhou:<br> ".$e->getMessage();
}