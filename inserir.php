<?php

include('conexao.php');

$aluno="Raica";
$turma="4005";
$mensal="856.36";

$sql = "insert into tblaluno (aluno,turma,mensal) values ('$aluno','$turma','$mensal');";

$con->query($sql);

var_dump($con);
