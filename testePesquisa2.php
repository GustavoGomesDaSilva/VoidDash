
<?php
    @session_start();

    $texto = $_GET['texto'];

    require('connect.php');
        if(!$search == ""){
            $registro_list = mysqli_query($con, "SELECT * FROM registros INNER JOIN `motoristas` on `registros`.`matricula` = `motoristas`.`matricula` INNER JOIN `carros` on `registros`.`placa` = `carros`.`placa` WHERE `matricula` LIKE `%$search%` or `placa` LIKE `%$search%` or `dtInicio` LIKE `%$search%`");
            echo "<div class =\"box\">";
            while($quadra = mysqli_fetch_array($quadras)){
                echo "<div class =\"sc\">";
                echo "<p id= pag>$quadra[nome_local] </p>";
                echo "<p id= pag>$quadra[desc_local] </p>";
                echo "<p id= pag>$quadra[desc_categoria] </p>";
                echo "<p id= pag>$quadra[rua]</p>";
                echo "<p id= pag>$quadra[bairro]</p>";
                echo "<p id= pag>$quadra[cidade]</p>";
                echo "<p id= pag>$quadra[estado] </p>";
                echo "<p id= pagimg><img src=$quadra[img1]></p>";
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