<?php

include("config.php");
include("cadastrar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

    $sql = "SELECT * FROM tb_funcionarios WHERE email = '{$email}'";
    $res = mysqli_query($conn, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        if (password_verify($senha, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_nome'] = $row['nome'];
            $_SESSION['user_email'] = $row['email'];
            print "<script>location.href='../views/areaDeControlePrincipal.php';</script>";
        } else {
            print "<script>alert('Email e/ou senha incorreto(s)');</script>";
            print "<script>location.href='login.php';</script>";
        }
    }
}

?>


