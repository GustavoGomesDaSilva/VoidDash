<?php

extract($_POST);
extract($_FILES);


require('config.php');
require ('../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;



$arquivo = $_FILES["fileImportSinistros"]["tmp_name"];
$inserted = false;

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($arquivo);
$sheet = $spreadsheet->getActiveSheet();

foreach ($sheet->getRowIterator() as $row) {
    $idRegistro = $sheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue();
    $tipo = $sheet->getCellByColumnAndRow(2, $row->getRowIndex())->getValue();
    $descricao = $sheet->getCellByColumnAndRow(3, $row->getRowIndex())->getValue();
    $dtSinistro = intval($sheet->getCellByColumnAndRow(4, $row->getRowIndex())->getValue());
  


    $dtSinistro = Date::excelToDateTimeObject($dtSinistro)->format('Y-m-d');

    
    $busca_registro = "SELECT * FROM `REGISTROS` WHERE `idRegistro` LIKE '%$idRegistro%'";


        $result = mysqli_query($conn, $busca_registro);
        if(mysqli_num_rows($result) > 0){
            $sql = "INSERT INTO `sinistros` (`idRegistro`, `tipo`, `descricao`, `dtSinistro`) 
            VALUES ('$idRegistro', '$tipo', '$descricao', '$dtSinistro')";
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