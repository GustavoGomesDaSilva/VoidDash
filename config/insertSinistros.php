<?php
require('config.php');
extract($_POST);
$inserted = false;


$sql = "INSERT INTO `sinistros`( `idRegistro`, `tipo`, `descricao`, `dtSinistro`) 
            VALUES ('$idRegistroAdicionar','$tipoAdicionar','$descricaoAdicionar','$dtSinistroAdicionar')";
if ($conn->query($sql) === TRUE) {
    $inserted = true; // Indica que pelo menos uma inserção ocorreu com sucesso
} else {
    echo "Erro ao adicionar dados ao banco de dados: " . $conn->error;
}



$conn->close();

if ($inserted) {
    header('Location: ../views/areaDeControlePrincipal.php'); // Redireciona para a página desejada
    exit(); // Encerra a execução do script
}
