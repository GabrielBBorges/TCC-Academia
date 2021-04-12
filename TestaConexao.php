<?php

include "connection.php";

$con = new Connection("localhost", "root", "", "bancolive");

if(!is_null($con->connect()))
    echo"<br/>Conectado ao banco bancoDB";
else
    echo "<br>A conexao não foi realizada! Verifique os parâmetros informados.";
