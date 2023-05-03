<?php

$host = "localhost";
$nome_db = "bd_voiddash";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, $nome_db);
    if($conn->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno. ") " .$mysqli->connect_error;
    }


    



