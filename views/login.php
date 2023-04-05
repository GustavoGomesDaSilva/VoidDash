   <!DOCTYPE html>
   <html lang="pt-br">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="../styles/styleLogin.css" rel="stylesheet" type="text/css" />
       <link rel="shortcut icon" href="../components/assets/novaLogo.png" type="image/x-icon">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
       <title>VoidDash</title>
   </head>

   <body>

       <div class="main-login">
           <div class="login-esquerda">
               <img src="../components/assets/imgLogin.png" class="imagem-esquerda-login" alt="">
           </div>
           <div class="login-direita">
               <form action="../config/logar.php" id="formularioLogin" method="POST">
                   <div id="logoLogin">
                       <img src="../components/assets/novaLogo.png" alt="">
                   </div>
                   <h1>Faça login e começe a usar</h1>
                   <div class="text-field">
                       <label for="email">Endereço de Email</label>
                       <input type="text" class="login-email" name="email" placeholder="Digite seu email">
                   </div>
                   <div class="text-field">
                       <label for="senha">Senha</label>
                       <input type="password" class="login-senha" name="senha" placeholder="Senha">
                   </div>
                   <div class="lembrar">
                       <input type="checkbox" id="checkbox"><label for="checkbox" id="lembrar">Lembrar-se de mim</label>
                   </div>
                   <div id="btnLogin">
                       <button class="btn-login" type="submit" name="btn-login">Fazer login</button>

                   </div>
               </form>
               <!-- <div class="esqueceu-senha"><a href="#"> Esqueceu sua Senha</a></div> -->
               <div class="cadastrar"><a href="cadastro.php">Não Possui Conta: Cadastre-se Agora</div>
           </div>
       </div>
   </body>

   </html>