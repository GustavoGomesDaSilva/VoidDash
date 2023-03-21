<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylePrincipal.css">

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
            <section id="conteudoHomeTopo">
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
            </section>
        </div>
        <section id="sessaoServicos">
            <h1 id="tituloServicos"><span class="tituloRoxo">Nossos</span><span class="tituloAmarelo"> Serviços</span></h1>
            <p class="subTitulo">Tenha total controle sobre sua frota com nossa vasta gama de serviços</p>
            <article id="cartaoUm">
                <div id="imgCardUm">
                    <img src="components/assets/gpsImgCard1.png" alt="">
                </div>
                <div id="txtCardUm">
                    <h2>Controle da Forta</h2>
                    <p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>
                    <a href="views/login.php">Saiba Mais -></a>
                </div>
            </article>

            <article id="cartaoDois">
                
                <div id="txtCardDois">
                    <h2>Controle da Forta</h2>
                    <p>loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem</p>
                    <a href="views/login.php">Saiba Mais -></a>
                </div>
                <div id="imgCardDois">
                    <img src="components/assets/imgCarddois.png" alt="">
                </div>
            </article>
            <article id="cardsVerticais">
                <section class="CardVertical">
                    <div id="imgCardVerticalUm">   
                        <img src="components/assets/imgCardTres.png" alt="">
                    </div>
                    <div class="txtCardVertical">
                        <h5>Controle Financeiro</h5>
                        <p>Controle suas multas, impostos e finanças gerais</p>
                        <a href="views/login.php">Saiba Mais -></a>
                    </div>
                </section>
                <section class="CardVertical">
                    <div id="imgCardVerticalDois">   
                        <img src="components/assets/imgCardQuatro.png" alt="">
                    </div>
                    <div class="txtCardVertical">
                        <h5>Manutenção</h5>
                        <p>Saiba o estado dos veículos de sua Forta</p>
                        <a href="views/login.php">Saiba Mais -></a>
                    </div>
                </section>
            </article>
        </section>
        <!-- fim servicos -->
        <section id="sobreNos">
        <h1 id="tituloSobre"><span class="tituloRoxo">Sobre Nós</span></h1>
            <article id="conteudoSobre">
                <div id="imgSobre">
                    <img src="components/assets/sobreNosImg.png" alt="">
                </div>
                <div id="txtSobre">
                    <p>A voidTech é uma empresa de soluções tecnológicas que se dedica a fornecer soluções personalizadas e inovadoras para nossos clientes. Com nossa equipe altamente qualificada e experiente, estamos sempre atualizados com as últimas tendências do mercado. 
                    <br><br>
                    A VoidTech está comprometida em fornecer atendimento excepcional aao cliente e estamos prontos para ajudar seus clientes a alcançar seus objetivos de negócios através de tecnologia de ponta.
                    </p>
                </div>
            </article>
        </section>

    </main>
</body>
</html>