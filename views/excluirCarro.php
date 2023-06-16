<?php

include("../config/config.php");
include("../config/sec.php");

$placa = $_POST['placa'];
// var_dump($_POST);

// Prepara e executa a consulta SQL para deletar o registro
$sql = "DELETE FROM `carros` WHERE `placa` = '$placa'";
if ($conn->query($sql) === TRUE) {
    echo "Carro deletado com sucesso!";
} else {
    echo "Erro ao deletar o carro: " . $conn->error;
}

?>