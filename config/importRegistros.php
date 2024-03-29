<?php
extract($_POST);
extract($_FILES);


require('config.php');
require ('../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;

// var_dump($_FILES["xlsx"]["tmp_name"]);

$arquivo = $_FILES["fileImportRegistros"]["tmp_name"];
$inserted = false;


$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($arquivo);
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