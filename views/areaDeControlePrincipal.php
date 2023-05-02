<?php

include("../config/config.php");
include("../config/sec.php")
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
                        <form method="POST" action="processa.php" enctype="multipart/form-data">
                            <li> <img src="../components/assets/CloudArrowUp.png" alt=""> <input type="file" name="arquivo"></li>
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
                        Registros
                    </section>
                </article>

                <section id="sinistros" style="display: none">
                    <article >
                        Sinistros
                    </article>
                </section>

                <section id="motoristas" style="display: none">
                    <article >
                        Motoristas
                    </article>
                </section>

                <section id="carros" style="display: none">
                    <article >
                        Carros
                    </article>
                </section>
            </article>
        </div>
    </main>
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