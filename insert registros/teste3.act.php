<?php
    require('../config/config.php');
    extract($_POST);
    
    $dataH = date('Y-m-d', time());
    $tresD = 259200;
    $dataF = date('Y-m-d', time()+$tresD);
   
    $sql = "INSERT INTO `registros`( `matricula`, `placa`, `dtInicioUso`, `dtFmiUso`) VALUES ('$matricula','$placa','$dataH','$dataF')";

    if(mysqli_query($conn, $sql)){
        echo "funcionou!";
    }else{
        echo "num conecto";
    }

    var_dump($dataH);
    var_dump($dataF);
?>