<?php

//include/ include_once avisa o erro e continua o programa

// require / require_once mata o programa ao encontrar erro.
include("conexao.php");
$curso = "Java";
$valor = 580.00;
$ch = 6300;
$docente = "Jason Stathan";
$sql = "insert into tblcurso (curso,valor,ch,docente) values('$curso','$valor','$ch','$docente')";


$con->query($sql);

var_dump($con);

