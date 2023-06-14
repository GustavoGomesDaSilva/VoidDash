<?php
require('config.php');
    extract($_POST);
    $inserted = false;
    
    if($id_categoria == 1){
        $locadoraAdicionar = "Car4U";
    }else if($id_categoria == 2){
        $locadoraAdicionar = "EasyCar";
    }else if($id_categoria == 3){
        $locadoraAdicionar = "DriveOut";
    }
   
    $sql = "INSERT INTO `carros`( `locadora`, `placa`, `marca`, `carro`, `modelo`, `cor`, `ativo`) 
            VALUES ('$locadoraAdicionar','$placaAdicionar','$marcaAdicionar','$carroAdicionar', '$modeloAdicionar', '$corAdicionar', '1')";
        if ($conn->query($sql) === TRUE) {
            $inserted = true; // Indica que pelo menos uma inserção ocorreu com sucesso
        } else {
            echo "Erro ao adicionar dados ao banco de dados: " . $conn->error;
        }



        $conn->close();

        if ($inserted) {
        header('Location: ../views/areaDeControlePrincipal.php'); // Redireciona para a página desejada
        exit(); // Encerra a execução do script
        }


