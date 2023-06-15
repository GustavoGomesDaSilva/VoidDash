<?php
extract($_POST);
extract($_FILES);


require('config.php');
require ('../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;


$arquivo = $_FILES["fileImportMotoristas"]["tmp_name"];
$inserted = false;

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load($arquivo);
$sheet = $spreadsheet->getActiveSheet();

foreach ($sheet->getRowIterator() as $row) {
    $matricula = $sheet->getCellByColumnAndRow(1, $row->getRowIndex())->getValue();
    $nome = $sheet->getCellByColumnAndRow(2, $row->getRowIndex())->getValue();
    $cnh = $sheet->getCellByColumnAndRow(3, $row->getRowIndex())->getValue();
    $dtNasc = intval($sheet->getCellByColumnAndRow(4, $row->getRowIndex())->getValue());

    $matricula = strval($matricula);

    $dtNasc = Date::excelToDateTimeObject($dtNasc)->format('Y-m-d');

    if(strlen($matricula)<=4 && !is_null($matricula) && is_numeric($matricula)){
    $matricula = str_pad($matricula, 4, "0", STR_PAD_LEFT);
    intval($matricula);
    }else{
        $matricula = NULL;
    }
    if(strlen($cnh) < 11){
        str_pad($cnh, 11, "0", STR_PAD_RIGHT);
    }

    // strval($matricula);
    // var_dump($matricula);
    // var_dump($nome);
    // var_dump($dtNasc);
    // var_dump($cnh);

    

    if($matricula != NULL){
        $sql = "INSERT INTO `motoristas` (`matricula`, `nome`, `cnh`, `dtNasc`) 
        VALUES ('$matricula', '$nome', '$cnh', '$dtNasc')";
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