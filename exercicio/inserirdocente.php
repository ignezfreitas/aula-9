<?php

include ('../conexao.php');

$docente="Ignez";
$especialidade="front end";
$salhora=20.36;
$disponibilidade="manha";

$sql = "insert into tbldocente (docente,especialidade,salhora,disponibilidade) 
        values ('$docente','$especialidade','$salhora','$disponibilidade');";

$con->query($sql);

var_dump($con);
echo $sql;
