<?php
    @session_start();

    $texto = $_GET['texto'];

    require('config.php');
        if(!$texto == ""){
            $registros = mysqli_query($con, "Select * from `registros` where `idRegistros` = '%$texto%'");

            
            if($registros){
                echo `<p>Id existente</p>`;
            }else{
                echo `<p>Id inexistene</p>`;
            }
        }
?>