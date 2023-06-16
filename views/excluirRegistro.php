<?php

include("../config/config.php");
include("../config/sec.php");

$idregistro = $_POST['idRegistro'];
// var_dump($_POST);

// Prepara e executa a consulta SQL para deletar o registro
$sql = "DELETE FROM `registros` WHERE `idRegistro` = '$idregistro'";
if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso!";
} else {
    echo "Erro ao deletar o registro: " . $conn->error;
}

?>