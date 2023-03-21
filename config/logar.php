<?php include("config.php");

if (isset($_POST['btn-login'])) {
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
                print "<script>location.href='../views/areaDeControlePrincipal.php';</script>";
            } else{
                print "<script>alert('Email e/ou senha incorreto(s)');</script>";
                print "<script>location.href='login.php';</script>";
            }
        }

    
}
// session_start();
// if (isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

//     if(strlen($_POST['email']) == 0) {
//         print ('Preencha seu e-mail');
//     } else if(strlen($_POST['senha']) == 0) {
//         print('Preencha sua senha') ;
//     } else {
//         $sql = "SELECT * FROM tb_funcionarios
//             WHERE email = '{$email}'
//             AND senha = '{$senha}'";

//             $res = $conn->query($sql) or die($conn->error);

//             $row = $res->fetch_object();

//             $qtd = $res->num_rows;

//             if($qtd > 0){
//                 $_SESSION["email"] = $email;
//                 $_SESSION["nome"] = $row->nome;
//                 $_SESSION["cargo"] = $row->cargo;
//                 print "<script>Location.heref='dashboard.php';</script";
//                 print ("logado");
//             } else{
//                 print "<script>alert('Email e/ou senha incorreto(s)');</script>";
//                 print "<script>location.href='login.php';</script>";
//             }
//         }

    
// }