<?php
extract($_POST);
extract($_FILES);


require('config/config.php');
require ('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;

// var_dump($_FILES["xlsx"]["tmp_name"]);

$arquivo = $_FILES["xlsx"]["tmp_name"];


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
            if($conn->query($sql) === TRUE){
                print "<script>alert('UPLOAD CONCLUÍDO COM SUCESSO!!!');</script>";
        continue;
            } else {
                print "<script>alert('ERRO AO ADICIONAR DADOS AO BANCO DE DADOS' . );</script>";
                echo $conn->error;
            }
        } else {
            print "<script>alert('ALGUMA ID DE REGISTRO PRESENTE NA PLANILHA NÃO CONSTA NO BANCO DE DADOS, FAVOR REVER DADOS INSERIDOS' . );</script>";
        }
    
}
header("Refresh: 0; url=views/areadecontroleprincipal.php");



$conn->close();