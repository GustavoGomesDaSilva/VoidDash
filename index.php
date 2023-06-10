<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylePrincipal.css">

    <link rel="shortcut icon" href="components/assets/LogoVoid.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    <title>VoidDash</title>
</head>

<body>
    <main>
        <div id="homeTopo">
            <a name="Home"></a>
                <header>
                    <div id="logoTopo">
                        <a href="https://void-tech-empresa.vercel.app/" target="_blank"><img src="components/assets/novaLogo.png" alt=""></a>
                    </div>
                    <ul>
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#Servicos">Serviços</a></li>
                        <li><a href="#SobreNos">Sobre Nós</a></li>
                        <li><a href="#Contato">Contato</a></li>
                    </ul>
                    <div id="btnTopoContainer">
                        <a href="views/login.php"><button class="btnTopo">Login</button></a>
                        <a rel="" href="views/cadastro.php"><button class="btnTopo">Cadastro</button></a>
                    </div>
                </header>
                <section id="conteudoHomeTopo">
                    <div id="imgsCarrosEsquerda">
                        <img src="components/assets/caminhao3d 1.png" alt="">
                        <img src="components/assets/helicoptero 1.png" id="helicoptero" alt="">
                    </div>
                    <div id="txtCentral">
                        <p>V<span class="txtRoxo">o</span><span class="txtLaranja">i</span>dDash<br>
                            Nunca foi tão <span class="txtRoxo">fácil</span>
                            controlar sua <span class="txtRoxo">frota</span></p>
                        <a href="views/cadastro.php"><button id="btnPrincipal">Comece Agora</button></a>
                    </div>
                    <div id="imgsCarrosDireita">
                        <img src="components/assets/caminhao4.png" alt="">
                        <!-- <img src="components/assets/carrinho1.png" alt=""> -->
                    </div>
                </section>
        </div>
        <a name="Servicos"></a>
        <section id="sessaoServicos">
            <h1 id="tituloServicos"><span class="tituloRoxo">Nossos</span><span class="tituloAmarelo"> Serviços</span></h1>
            <p class="subTitulo">Tenha total controle sobre sua frota com nossa vasta gama de serviços</p>
            <article id="cartaoUm">
                <div id="imgCardUm">
                    <img src="components/assets/gpsImgCard1.png" alt="">
                </div>
                <div id="txtCardUm">
                    <h2>Controle da Forta</h2>
                    <p>O VoidDash oferece relatórios detalhados e personalizáveis sobre o desempenho dos motoristas, tempos de entrega e eficiência de combustível. Essas informações permitem identificar áreas de melhoria e otimizar a operação da frota com base em dados.</p>
                    <a href="views/login.php">Saiba Mais -></a>
                </div>
            </article>

            <article id="cartaoDois">

                <div id="txtCardDois">
                    <h2>Gerenciamento</h2>
                    <p>O VoidDash oferece relatórios detalhados e personalizáveis sobre o desempenho dos motoristas, tempos de entrega e eficiência de combustível. Essas informações permitem identificar áreas de melhoria e otimizar a operação da frota com base em dados.</p>
                    <a href="views/login.php">Saiba Mais -></a>
                </div>
                <div id="imgCardDois">
                    <img src="components/assets/imgCarddois.svg" alt="">
                </div>
            </article>
            <article id="cardsVerticais">
                <section class="CardVertical">
                    <div id="imgCardVerticalUm">
                        <img src="components/assets/imgCardTres.png" alt="">
                    </div>
                    <div class="txtCardVertical">
                        <h5>Controle Financeiro</h5>
                        <p>Oferece um controle financeiro eficiente, permitindo análise detalhada dos gastos com combustível, manutenção e outros custos operacionais para as frotas da sua empresa.</p>
                        <a href="views/login.php">Saiba Mais -></a>
                    </div>
                </section>
                <section class="CardVertical">
                    <div id="imgCardVerticalDois">
                        <img src="components/assets/imgCardQuatro.png" alt="">
                    </div>
                    <div class="txtCardVertical">
                        <h5>Manutenção</h5>
                        <p>Permite que os veículos da frota estejam em boas condições, reduzindo o risco de falhas mecânicas e aumentando a segurança operacional.</p>
                        <a href="views/login.php">Saiba Mais -></a>
                    </div>
                </section>
            </article>
        </section>
        <!-- fim servicos -->
        <a name="SobreNos"></a>
        <section id="sobreNos">
            <h1 id="tituloSobre"><span class="tituloRoxo">Sobre Nós</span></h1>
            <article id="conteudoSobre">
                <div id="imgSobre">
                    <img src="components/assets/sobreNosImg.svg" alt="">
                </div>
                <div id="txtSobre">
                    <p>A voidTech é uma empresa de soluções tecnológicas que se dedica a fornecer soluções personalizadas e inovadoras para nossos clientes. Com nossa equipe altamente qualificada e experiente, estamos sempre atualizados com as últimas tendências do mercado.
                        <br><br>
                        A VoidTech está comprometida em fornecer atendimento excepcional aao cliente e estamos prontos para ajudar seus clientes a alcançar seus objetivos de negócios através de tecnologia de ponta.
                    </p>
                </div>
            </article>
            <article id="propositos">
                <h1 id="tituloProposito"><span class="tituloRoxo">Nosso</span><span class="tituloAmarelo"> Propósito</span></h1>
                <p class="subTitulo">Nosso propósito como empresa, é ajudar e transformar a vida de pessoas</p>

                <section>
                    <div class="cardProposito">
                        <img src="components/assets/iconeMissao.png" alt="">
                        <h2>Missão</h2>
                        <p>Ajudar as pessoas e empresas em todo o mundo a concretizarem seu potencial máximo</p>
                    </div>


                    <div class="cardProposito">
                        <img src="components/assets/iconeVisao.png" alt="">

                        <h2>Visão</h2>
                        <p>Ser conhecidos pelo nosso trabalho eficaz e honesto e ter os melhores e mais práticos softwares</p>
                    </div>

                    <div class="cardProposito">
                        <img src="components/assets/iconeValores.png" alt="">

                        <h2>Valores</h2>
                        <p>Honestidade, Respeito, Praticidade, Fidelidade, Inovação, empatia e trabalho em equipe</p>
                    </div>

                </section>
            </article>
        </section>

        <a name="Contato"></a>
        <footer>
            <section id="footerTopo">
            <a href="#Home">
                <div>
                    <img src="components/assets/novaLogo.png" alt="">
                </div>
                </a>
                <div id="footerDireita">
                    <!-- <a href="#Home">Home ^</a> -->
                    <a href="https://github.com/GustavoGomesDaSilva/VoidDash" target="_blank"><img src="components/assets/GitHub.svg" alt="logo do GitHub"></a>
                    <a href="https://linktr.ee/voiddash" target="_blank"><img src="components/assets/LinkedInIcon.svg" alt=""></a>
                </div>
            </section>
            <section>
                <p>Copyrigth © 2023 VoidTech. Todos os direitos reservados</p>
            </section>
        </footer>
    </main>
</body>

</html>