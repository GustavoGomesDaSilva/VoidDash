<?php
extract($_POST);

require('config/config.php');
require ('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;

$planilha = 'C:/xampp/htdocs/voiddash/planilhas/carros.xlsx';

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($planilha);
$sheet = $spreadsheet->getActiveSheet();

foreach ($sheet->getRowIterator() as $row) {
    $placa = $sheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue();
    $locadora = $sheet->getCellByColumnAndRow(2, $row->getRowIndex())->getValue();
    $marca = $sheet->getCellByColumnAndRow(3, $row->getRowIndex())->getValue();
    $carro = $sheet->getCellByColumnAndRow(4, $row->getRowIndex())->getValue();
    $modelo = $sheet->getCellByColumnAndRow(5, $row->getRowIndex())->getValue();
    $cor = $sheet->getCellByColumnAndRow(6, $row->getRowIndex())->getValue();


    $sql = "INSERT INTO `carros` (`placa`, `locadora`, `marca`, `carro`, `modelo`, `cor`, `ativo`) 
            VALUES ('$placa', '$locadora', '$marca', '$carro', '$modelo', '$cor', NULL)";

    if ($conn->query($sql) === TRUE) {
        echo "Dados adicionados ao banco de dados com sucesso.";
    } else {
        echo "Erro ao adicionar dados ao banco de dados: " . $conn->error;
    }
}

$conn->close();