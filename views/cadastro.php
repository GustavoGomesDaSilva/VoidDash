<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/styleCadastro.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="components/assets/LogoVoidTech.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    <title>VoidDash</title>
</head>
<body>
    <div class ="main-login">
    <div class ="login-esquerda">
        <img src="img/imgCadastro.png" class="imagem-esquerda-login" alt="">
    </div>
    <div class="login-direita">
            <div class ="card-login">
                <img src="img/LogoVoidTech" alt="">
                <h1>Cadastre-se</h1>
                <div class="text-field">
                    <label for="usuario">Endereço de Email</label>
                    <input type="text" class="login-email" name= "email" placeholder="Digite seu email">
                </div>
                <div class="text-field">
                    <label for="usuario">Confirmar endereço de email</label>
                    <input type="text" class="login-email-confirmar" name= "email-confirmar" placeholder="Confirme seu email">
                </div>
                <div class="text-field">
                    <label for="usuario">Digite seu cargo</label>
                    <input type="text" class="login-cargo" name= "cargo" placeholder="Digite seu cargo">
                </div>
                <div class="text-field">
                    <label for="Senha">Senha</label>
                    <input type="password" class="login-senha" name="senha" placeholder="Senha">
                </div>
                
                <button class="btn-login">Entrar na Plataforma</button>
            </div>
    </div>
</body>
</html>