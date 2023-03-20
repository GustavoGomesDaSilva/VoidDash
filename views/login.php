<?php include("config.php"); 
// session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(strlen($_POST['email']) == 0) {
        print ('Preencha seu e-mail');
    } else if(strlen($_POST['senha']) == 0) {
        print('Preencha sua senha') ;
    } else {
        $sql = "SELECT * FROM tb_funcionarios
            WHERE email = '{$email}'
            AND senha = '{$senha}'";

            $res = $conn->query($sql) or die($conn->error);

            $row = $res->fetch_object();

            $qtd = $res->num_rows;

            if($qtd > 0){
                $_SESSION["email"] = $email;
                $_SESSION["nome"] = $row->nome;
                $_SESSION["cargo"] = $row->cargo;
                print "<script>location.href='areaDeControlePrincipal.php';</script>";
            } else{
                print "<script>alert('Email e/ou senha incorreto(s)');</script>";
                print "<script>location.href='login.php';</script>";
            }
        }

    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/styleLogin.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../components/assets/LogoVoidTech.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> <!-- importantdo a font que será usada no site -->
    <title>VoidDash</title>
</head>
<body>


    <div class ="main-login">
    <div class ="login-esquerda">
        <img src="../components/assets/imgLogin.png" class="imagem-esquerda-login" alt="">
    </div>
    <div class="login-direita">
        <form action="" method="POST">
            <div class ="card-login">
                <img src="../components/assets/logoVoidTech.png" alt="">
                <h1>Faça login e começe a usar</h1>
                <div class="text-field">
                    <label for="email">Endereço de Email</label>
                    <input type="text" class="login-email" name= "email" placeholder="Digite seu email">
                </div>
                <div class="text-field">
                    <label for="senha">Senha</label>
                    <input type="password" class="login-senha" name="senha" placeholder="Senha">
                </div>
                <div class ="lembrar">
                    <!-- <input type="checkbox" id="checkbox"><label for="checkbox" id="lembrar">Lembrar-se de mim</label> -->
                </div>
                <button class="btn-login" type="submit" name="login">Fazer login</button>
        </form>
                <!-- <div class="esqueceu-senha"><a href="#"> Esqueceu sua Senha</a></div> -->
                <div class="cadastrar"><a href="cadastro.php">Não Possui Conta: Cadastre-se Agora</div>
            </div>


    </div>
</body>
</html>