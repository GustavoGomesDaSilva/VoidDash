<?php
require('config.php');
extract($_POST);
$inserted = false;

// Adiciona 3 dias à data de saída
$dtRetornoAdicionar = date('Y-m-d', strtotime($dtSaidaAdicionar . ' + 3 days'));

$sql = "INSERT INTO `registros` (`matricula`, `placa`, `dtInicioUso`, `dtFimUso`) 
            VALUES ('$matriculaAdicionar','$placaAdicionar','$dtSaidaAdicionar','$dtRetornoAdicionar')";
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
