<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    require('../config/config.php');
    extract($_POST);
    if($id_categoria == 1){
        $sql = "SELECT * FROM `carros` WHERE `locadora` = 'car4U'";
        $locadora = "car4U";
    }else if($id_categoria == 2){
        $sql = "SELECT * FROM `carros` WHERE `locadora` = 'EasyCar'";
        $locadora = "EasyCar";
    }else if($id_categoria == 3){
        $sql = "SELECT * FROM `carros` WHERE `locadora` = 'DriveOut'";
        $locadora = "DriveOut";
    }
    $res = mysqli_query($conn, $sql);
?>
<body>
    <form action="teste3.act.php" method="post">
        <input type="hidden" name="locadora" value="<?php echo $locadora?>">
        <p>Carro desejado: <select name="placa">
        <?php while($carro = mysqli_fetch_array($res)){
           echo "<option value=$carro[placa]>$carro[marca]  $carro[carro]  $carro[modelo]</option>";
        }
        ?>
        </select></p>
        <p>Matricula do motorista
        <input type="text" name="matricula"></p>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>