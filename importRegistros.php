<?php
extract($_POST);

require('config/config.php');
require ('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;

$planilha = 'C:/xampp/htdocs/voiddash/planilhas/registros.xlsx';

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($planilha);
$sheet = $spreadsheet->getActiveSheet();

foreach ($sheet->getRowIterator() as $row) {
    $matricula = $sheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue();
    $placa = $sheet->getCellByColumnAndRow(2, $row->getRowIndex())->getValue();
    $dtInicioUso = intval($sheet->getCellByColumnAndRow(3, $row->getRowIndex())->getValue());
  

    $matricula = strval($matricula);



   

    $tresD = 3;
    $dtFimUso = $dtInicioUso+$tresD;

    $dtInicioUso = Date::excelToDateTimeObject($dtInicioUso)->format('Y-m-d');
    $dtFimUso = Date::excelToDateTimeObject($dtFimUso)->format('Y-m-d');

    if(strlen($matricula)<=4 && !is_null($matricula) && is_numeric($matricula)){
    $matricula = str_pad($matricula, 4, "0", STR_PAD_LEFT);
    intval($matricula);
    }else{
        $matricula = NULL;
    }
   
    // strval($matricula);
    // var_dump($matricula);
    // var_dump($placa);
    // var_dump($dtInicioUso);
    // var_dump($dtFimUso);

    

    if($matricula != NULL){
        $sql = "INSERT INTO `registros` (`matricula`, `placa`, `dtInicioUso`, `dtFimUso`) 
        VALUES ('$matricula', '$placa', '$dtInicioUso', '$dtFimUso')";

    if($conn->query($sql) === TRUE) {
    echo "Dados adicionados ao banco de dados com sucesso.";
    } else {
    echo "Erro ao adicionar dados ao banco de dados: " . $conn->error;
     }
    }


}

$conn->close();