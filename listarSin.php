<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require('config/config.php');
    $sinistro_list = mysqli_query($conn, "select * from `sinistros` order by `idRegistro` desc");
    while($sinistros_list = mysqli_fetch_array($sinistro_list)){
        $registros = mysqli_query($conn, "select * from `registros`  
                                            INNER JOIN `carros` on `registros`.`placa` = `carros`.`placa` 
                                            INNER JOIN `motoristas` on `registros`.`matricula` = `motoristas`.`matricula`
                                            where `idRegistro` = '$sinistros_list[idRegistro]'");
        $registro = mysqli_fetch_array($registros);
        echo "$sinistros_list[idSinistro]";
        echo "$sinistros_list[idRegistro]";
        echo "$registro[nome]";
        echo "$registro[matricula]";
        echo "$registro[cnh]";
        echo "$registro[marca] $registro[carro]";
        echo "$registro[placa]";
        echo "$registro[dtInicioUso]";
        echo "$registro[dtFimUso]";
    }
    ?>
    
</body>
</html>