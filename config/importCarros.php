<?php
extract($_POST);
extract($_FILES);

require('config.php');
require ('../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;

$arquivo = $_FILES["xlsx"]["tmp_name"];

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($arquivo);
$sheet = $spreadsheet->getActiveSheet();
$inserted = false;
foreach ($sheet->getRowIterator() as $row) {
    $placa = $sheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue();
    $locadora = $sheet->getCellByColumnAndRow(2, $row->getRowIndex())->getValue();
    $marca = $sheet->getCellByColumnAndRow(3, $row->getRowIndex())->getValue();
    $carro = $sheet->getCellByColumnAndRow(4, $row->getRowIndex())->getValue();
    $modelo = $sheet->getCellByColumnAndRow(5, $row->getRowIndex())->getValue();
    $cor = $sheet->getCellByColumnAndRow(6, $row->getRowIndex())->getValue();
    
    
    if(strlen($placa) < 7 || strlen($placa) >= 9){
        $placa = NULL;
    }


    if($placa != NULL){
        $sql = "INSERT INTO `carros` (`placa`, `locadora`, `marca`, `carro`, `modelo`, `cor`, `ativo`) 
        VALUES ('$placa', '$locadora', '$marca', '$carro', '$modelo', '$cor', 1)";
 if ($conn->query($sql) === TRUE) {
    $inserted = true; // Indica que pelo menos uma inserção ocorreu com sucesso
} else {
    echo "Erro ao adicionar dados ao banco de dados: " . $conn->error;
}
}
}

$conn->close();

if ($inserted) {
header('Location: ../views/areaDeControlePrincipal.php'); // Redireciona para a página desejada
exit(); // Encerra a execução do script
}