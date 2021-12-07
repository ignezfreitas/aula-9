<?php

include('conexao.php');
$idaluno = 2;
$sql ="delete from tblaluno where idaluno='$idaluno'";
//conexao->query(comando sql)
$con->query($sql);
var_dump($con);