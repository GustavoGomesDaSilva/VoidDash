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
    $registro_list = mysqli_query($conn, "select * from `registros` INNER JOIN `motoristas` on `registros`.`matricula` = `motoristas`.`matricula` 
INNER JOIN `carros` on `registros`.`placa` = `carros`.`placa`  order by `idRegistro` desc");
    while($registros_list = mysqli_fetch_array($registro_list)){
        echo "$registros_list[idRegistro]";
        echo "$registros_list[nome]";
        echo "$registros_list[matricula]";
        echo "$registros_list[cnh]";
        echo "$registros_list[marca] $registros_list[carro]";
        echo "$registros_list[placa]";
        echo "$registros_list[dtInicioUso]";
        echo "$registros_list[dtFimUso]";
    }
    ?>
    
</body>
</html>