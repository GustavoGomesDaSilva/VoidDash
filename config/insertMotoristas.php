<?php
require('config.php');
extract($_POST);
$inserted = false;


$sql = "INSERT INTO `motoristas`( `matricula`, `nome`, `cnh`, `dtNasc`) 
            VALUES ('$matriculaAdicionar','$nomeAdicionar','$cnhAdicionar','$dataAdicionar')";
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
