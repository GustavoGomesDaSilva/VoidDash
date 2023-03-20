<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styleHome.css">

    <link rel="shortcut icon" href="components/assets/LogoVoidTech.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    <title>VoidDash</title>
</head>

<body>
    <main>
        <div id="homeTopo">
            <header>
                <a href="https://void-tech-empresa.vercel.app/" target="_blank"><img src="components/assets/LogoVoidTech.png" alt=""></a> 
                <ul>
                    <li>Home</li>
                    <li>Serviços</li>
                    <li>Sobre Nós</li>
                    <li>Contato</li>                    
                </ul>
                <div id="btnTopoContainer">
                   <a href="views/login.php"><button class="btnTopo">Login</button></a>
                    <a rel="" href="views/cadastro.php"><button class="btnTopo">Cadastro</button></a>
                </div>
            </header>
            <article id="conteudoHomeTopo">
                <div id="imgsCarrosEsquerda">
                    <img src="components/assets/caminhao3d 1.png" alt="">
                    <img src="components/assets/helicoptero 1.png" alt="">
                </div>
                <div id="txtCentral">
                    <p>V<span class="txtRoxo">o</span><span class="txtLaranja">i</span>dDash<br>
                        Nunca foi tão <span class="txtRoxo">fácil</span>
                        controlar sua <span class="txtRoxo">frota</span></p>
                    <a href="views/cadastro.php"><button id="btnPrincipal">Comece Agora</button></a>
                </div>
                <div id="imgsCarrosDireita">
                    <img src="components/assets/caminhao4.png" alt="">
                    <img src="components/assets/carrinho1.png" alt="">
                </div>
            </article>
        </div>
    </main>
</body>

</html>