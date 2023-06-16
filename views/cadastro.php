<?php
include("../config/config.php");
include("../config/cadastrar.php")

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/styleCadastro.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../components/assets/novaLogo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    <title>VoidDash</title>
</head>

<body>
    
    <div class="main-cadastro">
        <div class="cadastro-esquerda">
            <form action="../config/cadastrar.php" method="POST" id="formCadastro">
                <div id="logoCadastro">
                   <a href="../index.php"> <img src="../components/assets/novaLogo.png" alt=""></a>
                </div>
                <h1>Cadastre-se</h1>
                <div class="text-field">
                    <label for="nome">Nome</label>
                    <input type="text" class="cadastro-nome" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="text-field">
                    <label for="email">Endereço de email</label>
                    <input type="text" class="cadastro-email" name="email" placeholder="Digite seu email">
                </div>
                <div class="text-field">
                    <label for="cadastro-email">Insira sua matricula</label>
                    <input type="text" class="cadastro-email-confirmar" name="matricula" placeholder="Insira sua matricula">
                </div>
                <div class="text-field">
                    <label for="Senha">Senha</label>
                    <input type="password" class="cadastro-senha" name="senha" placeholder="Senha">
                </div>
                <div id="btnCadastro">
                    <button type="submit" class="btn-cadastro" name="btn-cadastrar">CADASTRAR</button>
                </div>
            </form>

        </div>
        <div class="cadastro-direita">
            <img src="../components/assets/imgCadastro.png" class="imagem-esquerda-cadastro" alt="">
        </div>
    </div>
</body>

</html>