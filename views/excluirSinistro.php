<?php

include("../config/config.php");
include("../config/sec.php");

$idsinistro = $_POST['idSinistro'];
// var_dump($_POST);

// Prepara e executa a consulta SQL para deletar o registro
$sql = "DELETE FROM `sinistros` WHERE `idSinistro` = '$idsinistro'";
if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso!";
} else {
    echo "Erro ao deletar o registro: " . $conn->error;
}

?>