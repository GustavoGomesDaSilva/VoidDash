
<?php
    @session_start();

    $search = $_GET['search'];

    require('config/config.php');
        if(!$search == ""){
            $registro_list = mysqli_query($conn, "SELECT * FROM registros INNER JOIN `motoristas` ON `registros`.`matricula` = `motoristas`.`matricula` INNER JOIN `carros` ON `registros`.`placa` = `carros`.`placa` WHERE `registros`.`matricula` LIKE '%$search%' OR `registros`.`placa` LIKE '%$search%' OR `registros`.`dtInicioUso` LIKE '%$search%'");
            echo "<div class =\"box\">";
            while($registros_list = mysqli_fetch_array($registro_list)){
                echo "<div class =\"sc\">";
                echo "<p id= pag>$registros_list[nome] </p>";
                echo "<p id= pag>$registros_list[matricula] </p>";
                echo "<p id= pag>$registros_list[cnh] </p>";
                echo "<p id= pag>$registros_list[marca] $registros_list[carro]</p>";
                echo "<p id= pag>$registros_list[placa]</p>";
                echo "<p id= pag>$registros_list[dtInicioUso]</p>";
                echo "<p id= pag>$registros_list[dtFimUso] </p>";
                
                // if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
                    
                // }else{
                //     echo"<p><a href=alterar.php?cod=$skin[codigo]>Alterar</a></p>";
                //     echo"<p><a href=javascript:confirmar($skin[codigo])>Excluir</a></p>";
                // }
                echo "</div>";
                }
                echo "</div>";
                
        }
?>