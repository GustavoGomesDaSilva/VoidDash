<?php

include("../config/config.php");
include("../config/sec.php");

$sql_motoristas = "SELECT * FROM motoristas ORDER BY matricula DESC";
$result_motoristas = $conn->query($sql_motoristas);

$sql_carros = "SELECT * FROM carros ORDER BY locadora";
$result_carros = $conn->query($sql_carros);

$sql_registros = "SELECT * FROM registros INNER JOIN `motoristas` on `registros`.`matricula` = `motoristas`.`matricula` 
INNER JOIN `carros` on `registros`.`placa` = `carros`.`placa`  order by `idRegistro` desc ";

$result_registros = $conn->query($sql_registros);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/stylePainel.css">

    <link rel="shortcut icon" href="../components/assets/novaLogo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


    <title>VoidDash</title>
</head>
<body>

    <main>
        <article id="menuEsquerda">
            <section id="topoMenuEsquerda">
                <!-- <img src="../components/assets/imgExemploPerfil.png" alt=""> -->
                <p id="nomeUsuario" name="nomeUsuario"><?php echo $_SESSION['user_nome'] ?></p>
                <!-- <p id="nomeUsuario" name="nomeUsuario">Analista de Dados</p> -->
                <div id="iconsTopEsquerda">
                    <a href="../config/logout.php"><img src="../components/assets/SignOut.svg" alt=""></a>
                    <a href="areaDeControleConfig.php"><img src="../components/assets/configIcon.png" alt=""></a>
                </div>
            </section>
            <section id="opcoesMenu">
                <ul>
                    <li id="areaRegistros"> <img src="../components/assets/graficIcon.png" alt=""> Registros</li>
                    <li id="areaSinistros"> <img src="../components/assets/multasIcon.png" alt=""> Sinistros</li>
                    <li id="areaMotoristas"> <img src="../components/assets/motoIcon.png" alt=""> Motoristas</li>
                    <li id="areaCarros"> <img src="../components/assets/carIcon.png" alt=""> Carros</li>
                    <div id="btnUpload">
                        <form method="POST" action="../importSinistros.php" enctype="multipart/form-data">
                            <li> <img src="../components/assets/CloudArrowUp.png" alt=""> <input type="file" name="xlsx"></li>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </ul>
            </section>
        </article>
        <div id="conteudoPrincipal">
            <div id="topoPainel">
                <div id="logoPainel">
                    <img src="../components/assets/novaLogo.png" alt="">
                </div>
            </div>
            <article id="painlePrincipal">
                <div id="txtCentral">
                    <p>V<span class="txtRoxo">o</span><span class="txtLaranja">i</span>dDash<br>
                        Nunca foi tão <span class="txtRoxo">fácil</span>
                        controlar sua <span class="txtRoxo">frota</span></p>
                </div>
                
                <article id="registros" style="display: none;">
                    <section  >
                    <div class="m-5" style="width: 80%; margin:auto;" >
                        <table class="carros-tabela">
                            <thead>
                                <tr>
                                <!-- <th scope="col">ID Registro</th> -->
                                <th scope="col">Nome</th>
                                <th scope="col">Matricula</th>
                                <th scope="col">CNH</th>
                                <th scope="col">Veiculo</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Data da Saida</th>
                                <th scope="col">Previsao do Retorno</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while($user_data = mysqli_fetch_assoc($result_registros))
                                {
                                    echo "<tr>";
                                    // echo"<td>" . $user_data ['idRegistro'] . "</td>";
                                    echo"<td>" . $user_data ['nome'] . "</td>";
                                    echo"<td>" . $user_data ['matricula'] . "</td>";
                                    echo"<td>" . $user_data ['cnh'] . "</td>";
                                    echo"<td>" . $user_data ['marca'] . $user_data ['carro'] . "</td>";
                                    echo"<td>" . $user_data ['placa'] . "</td>";
                                    echo"<td>" . $user_data ['dtInicioUso'] . "</td>";
                                    echo"<td>" . $user_data ['dtFimUso'] . "</td>";
                                    
                                }
                                ?>

                            </tbody>
                            </table>
                        </div>
                    </section>
                </article>

                <section id="sinistros" style="display: none">
                    <article >
                        Sinistros
                    </article>
                </section>

                <section id="motoristas" style="display: none">
                    <article >
                        <div class="m-5" style="width: 80%; margin:auto;">
                        <table class="motoristas-tabela">
                            <thead>
                                <tr>
                                <th scope="col">Matricula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CNH</th>
                                <th scope="col">Data de Nascimento</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while($user_data = mysqli_fetch_assoc($result_motoristas))
                                {
                                    echo "<tr>";
                                    echo"<td>" . $user_data ['matricula'] . "</td>";
                                    echo"<td>" . $user_data ['nome'] . "</td>";
                                    echo"<td>" . $user_data ['cnh'] . "</td>";
                                    echo"<td>" . $user_data ['dtNasc'] . "</td>";
                                }
                                ?>

                            </tbody>
                            </table>
                        </div>
                    </article>
                </section>

                <section id="carros" style="display: none">
                    <article >
                    <div class="m-5" style="width: 80%; margin:auto;">
                        <table class="carros-tabela">
                            <thead>
                                <tr>
                                <th scope="col">Locadora</th>
                                <th scope="col">Placa</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Carro</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Cor</th>
                                <th scope="col">Ativo</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                while($user_data = mysqli_fetch_assoc($result_carros))
                                {
                                    echo "<tr>";
                                    echo"<td>" . $user_data ['locadora'] . "</td>";
                                    echo"<td>" . $user_data ['placa'] . "</td>";
                                    echo"<td>" . $user_data ['marca'] . "</td>";
                                    echo"<td>" . $user_data ['carro'] . "</td>";
                                    echo"<td>" . $user_data ['modelo'] . "</td>";
                                    echo"<td>" . $user_data ['cor'] . "</td>";
                                    echo"<td>" . $user_data ['ativo'] . "</td>";
                                    
                                }
                                ?>

                            </tbody>
                            </table>
                        </div>
                    </article>
                </section>
            </article>
        </div>
    </main>
    <script>
        // $(document).ready(function() {
        //     // Aplicar filtro na tabela de motoristas
        //     $('.motoristas-tabela').DataTable();

        //     // Aplicar filtro na tabela de carros
        //     $('.carros-tabela').DataTable();
        // });


    $(document).ready(function() {
        // Definir o idioma para português
        $.extend($.fn.dataTable.defaults, {
            language: {
                "sEmptyTable": "Nenhum dado encontrado na tabela",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                },
                "select": {
                    "rows": {
                        "_": "Selecionado %d linhas",
                        "0": "Nenhuma linha selecionada",
                        "1": "Selecionado 1 linha"
                    }
                }
            }
        });

        // Aplicar filtro na tabela de motoristas
        $('.motoristas-tabela').DataTable();

        // Aplicar filtro na tabela de carros
        $('.carros-tabela').DataTable();
    });

    </script>
</body>

</html>
<script>
    var Principal = document.getElementById("txtCentral");
    var registros = document.getElementById("registros");
    var sinistros = document.getElementById("sinistros");
    var motoristas = document.getElementById("motoristas");
    var carros = document.getElementById("carros");

    var areaRegistros = document.getElementById("areaRegistros");
    var areaSinistros = document.getElementById("areaSinistros");
    var areaMotoristas = document.getElementById("areaMotoristas");
    var areaCarros = document.getElementById("areaCarros");

    // Adicionar um evento de clique a cada botão
    areaRegistros.addEventListener("click", function() {
        registros.style.display = "block";
        Principal.style.display = "none";
        sinistros.style.display = "none";
        motoristas.style.display = "none";
        carros.style.display = "none";

        Principal.classList.remove("fade");
        sinistros.classList.remove("fade");
        motoristas.classList.remove("fade");
        carros.classList.remove("fade");
        registros.classList.add("fade");
    });

    areaSinistros.addEventListener("click", function() {
        registros.style.display = "none";
        Principal.style.display = "none";
        sinistros.style.display = "block";
        motoristas.style.display = "none";
        carros.style.display = "none";

        Principal.classList.remove("fade");
        sinistros.classList.add("fade");
        motoristas.classList.remove("fade");
        carros.classList.remove("fade");
        registros.classList.remove("fade");
    });

    areaMotoristas.addEventListener("click", function() {
        registros.style.display = "none";
        Principal.style.display = "none";
        sinistros.style.display = "none";
        motoristas.style.display = "block";
        carros.style.display = "none";

        Principal.classList.remove("fade");
        sinistros.classList.remove("fade");
        motoristas.classList.add("fade");
        carros.classList.remove("fade");
        registros.classList.remove("fade");
    });

    areaCarros.addEventListener("click", function() {
        registros.style.display = "none";
        Principal.style.display = "none";
        sinistros.style.display = "none";
        motoristas.style.display = "none";
        carros.style.display = "block";

        Principal.classList.remove("fade");
        sinistros.classList.remove("fade");
        motoristas.classList.remove("fade");
        carros.classList.add("fade");
        registros.classList.remove("fade");
    });
</script>