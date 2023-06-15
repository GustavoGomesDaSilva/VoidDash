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


$sinistro_list = mysqli_query($conn, "SELECT * FROM sinistros ORDER BY idRegistro DESC");



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/stylePainel.css">

    <link rel="shortcut icon" href="../components/assets/LogoVoid.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-**" crossorigin="anonymous" />


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
                    <img src="../components/assets/configIcon.png" alt="">
                </div>
            </section>
            <section id="opcoesMenu">
                <ul>
                    <li id="areaRegistros"> <img src="../components/assets/graficIcon.png" alt=""> Registros</li>
                    <li id="areaSinistros"> <img src="../components/assets/multasIcon.png" alt=""> Sinistros</li>
                    <li id="areaMotoristas"> <img src="../components/assets/motoIcon.png" alt=""> Motoristas</li>
                    <li id="areaCarros"> <img src="../components/assets/carIcon.png" alt=""> Carros</li>

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
                    <section>
                        <h1 class="tituloAreas">Área de Registros</h1>
                        <div class="m-5" style="width: 80%; margin:auto; margin-bottom: 5vh;">
                            <div class="button-container" style="margin-bottom: 1vh;">
                            <form action="../config/importRegistros.php" method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileImportRegistros" name="fileImportRegistros" style="display:none;">
                                    <label for="fileImportRegistros" class="btn-upload"><i class="fas fa-upload"></i> Upload</label>
                                    <button type="submit" class="btnEnviarUpload">Enviar</button>
                                </form>
                                <button class="btn-add-field" id="openModalBtnRegistro" onclick="openModalBtnRegistro()"><i class="fas fa-plus"></i> Adicionar Campo</button>
                            </div>
                            <div id="myModalRegistro" class="modalRegistro">
                                <div class="modal-contentRegistro">
                                    <span class="closeRegistro">&times;</span>
                                    <h2>Adicionar registro</h2>
                                    <span style="width: 100%; display:flex; justify-content: center;">
                                        <i><span style="color: red;">Importante*</span> a placa e a matrícula, ja devem existir em suas respectivas tabelas</i>
                                    </span>
                                    <form action="../config/insertRegistros.php" method="post">

                                        <article style="display: flex!important;">
                                            <div id="matriculaRegistro">
                                                <p>Matrícula</p>
                                                <input type="text" id="matriculaAdicionar" name="matriculaAdicionar">
                                            </div>
                                            <div id="placaRegistro">
                                                <p>Placa</p>
                                                <input type="text" id="placaAdicionar" name="placaAdicionar">
                                            </div>
                                            <div id="dtSaidaRegistro">
                                                <p>Data de Saída</p>
                                                <input type="text" id="dtSaidaAdicionar" name="dtSaidaAdicionar">
                                            </div>
                                            <div id="dtRetornoRegistro">
                                                <p>Previsão de Retorno</p>
                                                <input type="text" id="dtRetornoAdicionar" name="dtRetornoAdicionar">
                                            </div>
                                        </article>
                                        <div id="btnEnviarRegistro">
                                            <input type="submit" value="Enviar" id="enviarRegistro">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="carros-tabela">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">ID Registro</th> -->
                                        <th scope="col">Nome</th>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">CNH</th>
                                        <th scope="col">Veículo</th>
                                        <th scope="col">Placa</th>
                                        <th scope="col">Data da Saida</th>
                                        <th scope="col">Previsão do Retorno</th>
                                        <th scope="col">Ações</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($user_data = mysqli_fetch_assoc($result_registros)) {
                                        echo "<tr>";
                                        // echo"<td>" . $user_data ['idRegistro'] . "</td>";
                                        echo "<td>" . $user_data['nome'] . "</td>";
                                        echo "<td>" . $user_data['matricula'] . "</td>";
                                        echo "<td>" . $user_data['cnh'] . "</td>";
                                        echo "<td>" . $user_data['marca'] . $user_data['carro'] . "</td>";
                                        echo "<td>" . $user_data['placa'] . "</td>";
                                        echo "<td>" . $user_data['dtInicioUso'] . "</td>";
                                        echo "<td>" . $user_data['dtFimUso'] . "</td>";
                                        echo '<td><div class="btn-group-edit">
                                    <button class="btn-edit" onclick="editarRegistros(' . $user_data['matricula'] . ')"><i class="fas fa-edit"></i></button>
                                    <button class="btn-deletar" onclick="deletarRegistros(' . $user_data['matricula'] . ')"><i class="fas fa-trash-alt"></i></button>
                                    </div>
                                </td>';
                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </section>
                </article>

                <section id="sinistros" style="display: none">
                    <article>
                        <h1 class="tituloAreas">Área de Sinistros</h1>

                        <div class="m-5" style="width: 80%; margin:auto; margin-bottom: 5vh;">
                            <div class="button-container" style="margin-bottom: 1vh;">
                            <form action="../config/importSinistros.php"  method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileImportSinistros" name="fileImportSinistros" style="display:none;">
                                    <label for="fileImportSinistros" class="btn-upload"><i class="fas fa-upload"></i> Upload</label>
                                    <button type="submit" class="btnEnviarUpload">Enviar</button>
                                </form>
                                <button id="openModalBtnSinistro" class="btn-add-field"><i class="fas fa-plus"></i> Adicionar Campo</button>
                            </div>
                            <div id="myModalSinistro" class="modalSinistro">
                                <div class="modal-contentSinistro">
                                    <span class="closeSinistro">&times;</span>
                                    <h2>Adicionar sinistro</h2>
                                    <form action="../config/insertSinistros.php" method="post">

                                        <article style="display: flex;">
                                            <div id="idRegistroSinistro">
                                                <p>Identificação <br>Registro</p>
                                                <input type="text" id="idRegistroAdicionar" name="idRegistroAdicionar">
                                            </div>
                                            <div id="tipoSinistro">
                                                <p>Tipo</p><br>
                                                <input type="text" id="tipoAdicionar" name="tipoAdicionar">
                                            </div>
                                            <div id="descricaoSinistro">
                                                <p>Descrição</p><br>
                                                <input type="text" id="descricaoAdicionar" name="descricaoAdicionar">
                                            </div>
                                            <div id="dtSinistroSinistro">
                                                <p>Data</p><br>
                                                <input type="text" id="dtSinistroAdicionar" name="dtSinistroAdicionar">
                                            </div>
                                        </article>
                                        <div id="btnEnviarSinistro">
                                            <input type="submit" value="Enviar" id="enviarSinistro">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="sinistro-tabela">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">ID Registro</th> -->
                                        <th scope="col">Nome</th>
                                        <th scope="col">Matrícula</th>
                                        <th scope="col">CNH</th>
                                        <!-- <th scope="col">Marca</th> -->
                                        <th scope="col">Placa</th>
                                        <!-- <th scope="col">Data Final</th>
                                        <th scope="col">Data Inicial</th> -->
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Data do Sinistro</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($sinistro = mysqli_fetch_assoc($sinistro_list)) {
                                        $registro = mysqli_query($conn, "SELECT registros.*, carros.placa, motoristas.nome, motoristas.matricula, sinistros.tipo, sinistros.descricao, sinistros.dtSinistro, motoristas.cnh
                                            FROM registros
                                            INNER JOIN carros ON registros.placa = carros.placa
                                            INNER JOIN motoristas ON registros.matricula = motoristas.matricula
                                            INNER JOIN sinistros ON registros.idRegistro = sinistros.idRegistro
                                            WHERE registros.idRegistro = '$sinistro[idRegistro]'");
                                        if (mysqli_num_rows($registro) > 0) {
                                            $registro_data = mysqli_fetch_assoc($registro);
                                            echo "<tr>";
                                            // echo"<td>" . $user_data ['idRegistro'] . "</td>";
                                            echo "<td>" . $registro_data['nome'] . "</td>";
                                            echo "<td>" . $registro_data['matricula'] . "</td>";
                                            echo "<td>" . $registro_data['cnh'] . "</td>";
                                            // echo "<td>" . $registro_data['marca'] . "</td>";
                                            echo "<td>" . $registro_data['placa'] . "</td>";
                                            // echo "<td>" . $registro_data['dtInicioUso'] . "</td>";
                                            // echo "<td>" . $registro_data['dtFimUso'] . "</td>";
                                            echo "<td>" . $registro_data['tipo'] . "</td>";
                                            echo "<td>" . $registro_data['descricao'] . "</td>";
                                            echo "<td>" . $registro_data['dtSinistro'] . "</td>";
                                            echo '<td><div class="btn-group-edit">
                                            <button class="btn-deletar" onclick="deletarRegistros(' . $registro_data['matricula'] . ')"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                </td>';
                                            echo "</tr>";
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </article>
                </section>

                <section id="motoristas" style="display: none">
                    <article>
                        <h1 class="tituloAreas">Área de Motoristas</h1>

                        <div class="m-5" style="width: 84%!important; margin:auto; margin-bottom: 5vh;">
                            <div class="button-container" style="margin-bottom: 1vh;">
                            <form action="../config/importMotoristas.php" method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileImportMotoristas" name="fileImportMotoristas" style="display:none;">
                                    <label for="fileImportMotoristas" class="btn-upload"><i class="fas fa-upload"></i> Upload</label>
                                    <button type="submit" class="btnEnviarUpload">Enviar</button>
                                </form>
                                <button class="btn-add-field" id="openModalMotoristasBtn"><i class="fas fa-plus"></i> Adicionar Campo</button>
                            </div>
                            <div id="myModalMotorista" class="modalMotorista">
                                <div class="modal-contentMotorista">
                                    <span class="closeMotorista">&times;</span>
                                    <h2>Adicionar motorista</h2>


                                    <form action="../config/insertMotoristas.php" method="post">
                                        <article style="display: flex!important;">

                                            <div id="matriculaMotorista">
                                                <p>Matrícula</p>
                                                <input type="text" id="matriculaAdicionar" name="matriculaAdicionar">
                                            </div>
                                            <div id="nomeMotorista">
                                                <p>Nome</p>
                                                <input type="text" id="nomeAdicionar" name="nomeAdicionar">
                                            </div>
                                            <div id="cnhMotorista">
                                                <p>CNH</p>
                                                <input type="text" id="cnhAdicionar" name="cnhAdicionar">
                                            </div>
                                            <div id="dataMotorista">
                                                <p>Data de Nascimento</p>
                                                <input type="text" id="dataAdicionar" name="dataAdicionar">
                                            </div>




                                        </article>
                                        <div id="btnEnviarMotorista">
                                            <input type="submit" value="Enviar" id="enviarMotorista">
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <table class="motoristas-tabela">
                                <thead>
                                    <tr>
                                        <th scope="col">Matrícula</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">CNH</th>
                                        <th scope="col">Data de Nascimento</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($user_data = mysqli_fetch_assoc($result_motoristas)) {
                                        echo "<tr>";
                                        echo "<td>" . $user_data['matricula'] . "</td>";
                                        echo "<td>" . $user_data['nome'] . "</td>";
                                        echo "<td>" . $user_data['cnh'] . "</td>";
                                        echo "<td>" . $user_data['dtNasc'] . "</td>";
                                        echo '<td><div class="btn-group-edit">
                                        <button class="btn-edit" onclick="editarMotorista(' . $user_data['matricula'] . ')"><i class="fas fa-edit"></i></button>
                                        <button class="btn-deletar" onclick="deletarMotorista(' . $user_data['matricula'] . ')"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                        
                            </td>';
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </section>

                <section id="carros" style="display: none">
                    <article>
                        <h1 class="tituloAreas">Área de Carros</h1>

                        <div class="m-5" style="width: 80%; margin:auto; margin-bottom: 50vh;">
                            <div class="button-container" style="margin-bottom: 1vh;">
                                <form action="../config/importCarros.php" method="post" enctype="multipart/form-data">
                                    <input type="file" id="fileImportCarros" name="fileImportCarros" style="display:none;">
                                    <label for="fileImportCarros" class="btn-upload"><i class="fas fa-upload"></i> Upload</label>
                                    <button type="submit" class="btnEnviarUpload">Enviar</button>
                                </form>
                                <button class="btn-add-field" id="openModalBtn"><i class="fas fa-plus"></i> Adicionar Campo</button>
                            </div>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h2>Adicionar carro</h2>

                                    <article style="display: flex;">
                                        <div id="locadorasCarro">
                                            <form action="../config/insertCarros.php" method="post">
                                                <p>Locadora </p>
                                                <select name="id_categoria" id="select">
                                                    <option value="1">Car4U</option>
                                                    <option value="2">EasyCar</option>
                                                    <option value="3">DriveOut</option>
                                                </select>

                                        </div>
                                        <div id="placaCarros">

                                            <p>Placa</p>
                                            <input type="text" id="placaAdicionar" name="placaAdicionar">

                                        </div>
                                        <div id="marcaCarros">
                                            <p>Marca</p>
                                            <input type="text" id="marcaAdicionar" name="marcaAdicionar">

                                        </div>
                                        <div id="carroCarros">
                                            <p>Nomne do carro</p>
                                            <input type="text" id="carroAdicionar" name="carroAdicionar">

                                        </div>
                                        <div id="modeloCarros">
                                            <p>Modelo do carro</p>
                                            <input type="text" id="modeloAdicionar" name="modeloAdicionar">
                                        </div>
                                        <div id="corCarros">
                                            <p>Cor do carro</p>
                                            <input type="text" id="corAdicionar" name="corAdicionar">

                                        </div>

                                    </article>
                                    <div id="btnEnviar">
                                        <input type="submit" value="Enviar" id="enviarCarros">
                                    </div>
                                    </form>
                                </div>
                            </div>
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
                                        <th scope="col">Ações</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($user_data = mysqli_fetch_assoc($result_carros)) {
                                        echo "<tr>";
                                        echo "<td>" . $user_data['locadora'] . "</td>";
                                        echo "<td>" . $user_data['placa'] . "</td>";
                                        echo "<td>" . $user_data['marca'] . "</td>";
                                        echo "<td>" . $user_data['carro'] . "</td>";
                                        echo "<td>" . $user_data['modelo'] . "</td>";
                                        echo "<td>" . $user_data['cor'] . "</td>";
                                        echo "<td>";

                                        echo '<button class="ativo-icone ' . ($user_data['ativo'] == 1 ? 'ativo' : 'inativo') . '" onclick="trocarAtivo(this)">' . ($user_data['ativo'] == 1 ? '&#10003;' : '&#10007;') . '</button>';

                                        echo '<td>
                                            <div class="btn-group-edit">
                                                <button class="btn-edit" onclick="editarCarro(' . $user_data['placa'] . ')"><i class="fas fa-edit"></i></button>
                                                <button class="btn-deletar" onclick="deletarCarro(this)" data-placa="' . $user_data['placa'] . '"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                          </td>';
                                        echo "</tr>";
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
        function deletarCarro(btn) {
            var placa = btn.getAttribute('data-placa');

            if (confirm('Deseja excluir a tupla com a placa: ' + placa + '?')) {
                // Faça uma solicitação AJAX para excluir a tupla no lado do servidor
                // Passando o valor da placa como parâmetro para identificar a tupla a ser excluída

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'excluir_carro.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                        // Atualize a tabela ou execute outras ações necessárias após excluir a tupla
                    } else {
                        alert('Erro ao excluir a tupla.');
                    }
                };
                xhr.send('placa=' + encodeURIComponent(placa));
            }
        }








        $(document).ready(function() {
            // ...

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

            $('.sinistro-tabela').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        text: 'Editar',
                        className: 'btn-editar',
                        action: function(e, dt, node, config) {
                            // Lógica para editar o registro
                            alert('Editar registro');
                        }
                    },
                    {
                        text: 'Deletar',
                        className: 'btn-deletar',
                        action: function(e, dt, node, config) {
                            // Lógica para deletar o registro
                            alert('Deletar registro');
                        }
                    },
                    {
                        text: 'Upload',
                        className: 'btn-upload',
                        action: function(e, dt, node, config) {
                            // Lógica para upload de arquivo
                            alert('Upload de arquivo');
                        }
                    }
                ]
            });

            // Adicionar botões na tabela de motoristas
            $('.motoristas-tabela').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        text: 'Editar',
                        className: 'btn-editar',
                        action: function(e, dt, node, config) {
                            // Lógica para editar o registro
                            alert('Editar registro');
                        }
                    },
                    {
                        text: 'Deletar',
                        className: 'btn-deletar',
                        action: function(e, dt, node, config) {
                            // Lógica para deletar o registro
                            alert('Deletar registro');
                        }
                    },
                    {
                        text: 'Upload',
                        className: 'btn-upload',
                        action: function(e, dt, node, config) {
                            // Lógica para upload de arquivo
                            alert('Upload de arquivo');
                        }
                    }
                ]
            });

            // Adicionar botões na tabela de carros
            $('.carros-tabela').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        text: 'Editar',
                        className: 'btn-editar',
                        action: function(e, dt, node, config) {
                            // Lógica para editar o registro
                            alert('Editar registro');
                        }
                    },
                    {
                        text: 'Deletar',
                        className: 'btn-deletar',
                        action: function(e, dt, node, config) {
                            // Lógica para deletar o registro
                            alert('Deletar registro');
                        }
                    },
                    {
                        text: 'Upload',
                        className: 'btn-upload',
                        action: function(e, dt, node, config) {
                            // Lógica para upload de arquivo
                            alert('Upload de arquivo');
                        }
                    }
                ]
            });

            // ...
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




    // Obtém o botão de abrir o modal
    var openModalBtn = document.getElementById("openModalBtn");

    // Obtém o modal
    var modal = document.getElementById("myModal");

    // Obtém o elemento <span> que fecha o modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Quando o usuário clicar no botão, abre o modal
    openModalBtn.onclick = function() {
        modal.style.display = "block";
    };

    // Quando o usuário clicar no botão de fechar, fecha o modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    };

    // Quando o usuário clicar fora do modal, fecha-o
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    // modal motoristas



    // Quando o usuário clicar no botão, abre o modal
    var openModalBtnMotorista = document.getElementById("openModalMotoristasBtn");

    // Obtém o modal
    var modalMotorista = document.getElementById("myModalMotorista");

    // Obtém o elemento <span> que fecha o modal
    var closeBtnMotorista = document.getElementsByClassName("closeMotorista")[0];

    // Quando o usuário clicar no botão, abre o modal
    openModalBtnMotorista.onclick = function() {
        modalMotorista.style.display = "block";
    };

    // Quando o usuário clicar no botão de fechar, fecha o modal
    closeBtnMotorista.onclick = function() {
        modalMotorista.style.display = "none";
    };

    // Quando o usuário clicar fora do modal, fecha-o
    window.onclick = function(event) {
        if (event.target == modalMotorista) {
            modalMotorista.style.display = "none";
        }
    };


    // modal registros

    var openModalBtnRegistro = document.getElementById("openModalBtnRegistro");
    var modalRegistro = document.getElementById("myModalRegistro");
    var closeBtnRegistro = document.getElementsByClassName("closeRegistro")[0];

    // Verifica se o elemento existe antes de atribuir o evento
    if (openModalBtnRegistro) {
        openModalBtnRegistro.onclick = function() {
            modalRegistro.style.display = "block";
        };
    }

    // Verifica se o elemento existe antes de atribuir o evento
    if (closeBtnRegistro) {
        closeBtnRegistro.onclick = function() {
            modalRegistro.style.display = "none";
        };
    }

    // Quando o usuário clicar fora do modal, fecha-o
    window.onclick = function(event) {
        if (event.target == modalRegistro) {
            modalRegistro.style.display = "none";
        }
    };

    // modal sinistros

    var openModalBtnSinistro = document.getElementById("openModalBtnSinistro");
    var modalSinistro = document.getElementById("myModalSinistro");
    var closeBtnSinistro = document.getElementsByClassName("closeSinistro")[0];

    // Verifica se o elemento existe antes de atribuir o evento
    if (openModalBtnSinistro) {
        openModalBtnSinistro.onclick = function() {
            modalSinistro.style.display = "block";
        };
    }

    // Verifica se o elemento existe antes de atribuir o evento
    if (closeBtnSinistro) {
        closeBtnSinistro.onclick = function() {
            modalSinistro.style.display = "none";
        };
    }

    // Quando o usuário clicar fora do modal, fecha-o
    window.onclick = function(event) {
        if (event.target == modalSinistro) {
            modalSinistro.style.display = "none";
        }
    };


    // 

    function trocarAtivo(botao) {
        botao.classList.toggle("ativo");
        botao.classList.toggle("inativo");
        botao.innerHTML = botao.classList.contains("ativo") ? "&#10003;" : "&#10007;";

        // Faça qualquer outra ação necessária aqui ao alternar entre "ativo" e "inativo"
    }
</script>