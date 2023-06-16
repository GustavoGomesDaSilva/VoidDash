<?php
include("../config/config.php");
include("../config/sec.php");

$matricula = $_POST['matricula'];

// Prepara e executa a consulta SQL para deletar o registro
$sql = "DELETE FROM `motoristas` WHERE `matricula` = '$matricula'";
if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso!";
} else {
    echo "Erro ao deletar o registro: " . $conn->error;
}
?>
