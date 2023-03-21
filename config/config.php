<?php
session_start();

$host = "localhost";
$nome_db = "bd_cadastro";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password, $nome_db);
    if($conn->connect_errno) {
        echo "Falha ao conectar: (" . $mysqli->connect_errno. ") " .$mysqli->connect_error;
    }


    



