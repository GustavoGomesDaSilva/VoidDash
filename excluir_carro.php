<?php
// Verifica se o parâmetro 'placa' foi recebido via POST
if (isset($_POST['placa'])) {
    $placa = $_POST['placa'];

    // Importe o arquivo de configuração do banco de dados
    require('config/config.php');

    // Crie a consulta preparada para excluir o carro com a placa fornecida
    $sql = "DELETE FROM carros WHERE placa = ?";

    // Prepare a consulta
    $stmt = $conn->prepare($sql);

    // Vincule o parâmetro 'placa' à consulta preparada
    $stmt->bind_param("s", $placa);

    // Execute a consulta
    if ($stmt->execute()) {
        echo "Carro excluído com sucesso.";
    } else {
        echo "Erro ao excluir o carro: " . $conn->error;
    }

    // Feche a consulta preparada
    $stmt->close();

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    echo "Placa não fornecida.";
}
?>
