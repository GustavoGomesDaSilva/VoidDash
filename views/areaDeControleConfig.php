<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styleConfig.css">

    <link rel="shortcut icon" href="../components/assets/LogoVoid.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->

    <title>VoidDash</title>
</head>

<body>
    
    <main>
        <article id="menuEsquerda">
            <section id="topoMenuEsquerda">
                <img src="../components/assets/imgExemploPerfil.png" alt="">
                <p id="nomeUsuario" name="nomeUsuario">Marcos Oliveira</p>
                <p id="nomeUsuario" name="nomeUsuario">Analista de Dados</p>
                <div id="iconsTopEsquerda">
                    <a href="../index.php"><img src="../components/assets/sairIcon.png" alt=""></a>
                    <img src="../components/assets/configIcon.png" alt="">
                </div>
            </section>
            <section id="opcoesMenu"> 
                <ul>
                    <li> <img src="../components/assets/graficIcon.png" alt=""> Relatório</li>
                    <li> <img src="../components/assets/manutencaoIcon.png" alt=""> Manutenção</li>
                    <li> <img src="../components/assets/multasIcon.png" alt=""> Multas</li>
                    <li> <img src="../components/assets/motoIcon.png" alt=""> Motoristas</li>
                    <li> <img src="../components/assets/mapaIcon.png" alt=""> Rotas</li>
                </ul>
            </section>
        </article>
        <div id="conteudoPrincipal">
            <header id="topoPainel">
                <img src="../components/assets/LogoVoidTech.png" alt="">
            </header>
            <article id="painlePConfig">
                <form action="" method="get">
                    Nome: <input type="text" name="nome" id="nome">
                    Email: <input type="text" name="email" id="email">

                    <button id="btnSalvar">Salvar Alterações</button>

                </form>
            </article>
        </div>
    </main>
</body>

</html>