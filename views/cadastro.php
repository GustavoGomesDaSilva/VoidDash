<?php 
include("config.php"); 

// $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
// $email = mysqli_real_escape_string($conn, trim($_POST['email']));
// $senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

// $sql = "select count(*) as total from email where email = '$email'";
//  $result = mysqli_query($conn,$sql);
//  $row = mysqli_fetch_assoc($result);
 
//  if($row['total'] == 1) {
//     $_SESSION['email_existe'] = true;
//     print "<script>alert('Email existente em nosso banco de dados');</script>";
//     print "<script>location.href='cadastro.php';</script>";
//     exit;

//  }

//  $sql = "INSERT INTO tb_funcionarios (email, nome, senha) VALUES (`$email`, `$nome`, `$senha`)";

//  if($conn->query($sql) === TRUE) {
//      $_SESSION['status-cadastro'] = true;
//  }

//  $conn->close();

// header('Location: cadastro.php');




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/styleCadastro.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../components/assets/LogoVoidTech.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    <title>VoidDash</title>
</head>
<body>
    
    <div class ="main-login">
    <div class ="login-esquerda">
        <img src="../components/assets/imgCadastro.png" class="imagem-esquerda-login" alt="">
    </div>
    <div class="login-direita">
      
       
            <div class ="card-login">
                <form action="cadastrar.php" method="POST">
                <img src="../components/assets/logoVoidTech.png" alt="">
                <h1>Cadastre-se</h1>
                <div class="text-field">
                    <label for="nome">Nome</label>
                    <input type="text" class="login-email" name= "nome" placeholder="Digite seu nome">
                </div>
                <div class="text-field">
                    <label for="email">Endereço de email</label>
                    <input type="text" class="login-email" name= "email" placeholder="Digite seu email">
                </div>
                <div class="text-field">
                    <label for="login-email">Confirme seu email</label>
                    <input type="text" class="login-email" name= "email-confirm" placeholder="Confirme seu email">
                </div>
                <div class="text-field">
                    <label for="Senha">Senha</label>
                    <input type="password" class="login-senha" name="senha" placeholder="Senha">
                </div>
                
                <button type="submit" class="btn-login" >CADASTRAR</button>
                </form>
            </div>
    </div>
</body>
</html>