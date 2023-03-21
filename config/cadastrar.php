<?php
require('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
  $email = mysqli_real_escape_string($conn, trim($_POST['email']));
  
   $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));
   $hash_senha = password_hash($senha, PASSWORD_DEFAULT);

  $sql = "INSERT INTO tb_funcionarios (`email`, `nome`, `senha`)
          VALUES ('$email', '$nome', '$hash_senha')";

  if (mysqli_query($conn, $sql)) {
      echo "Funcionário cadastrado com sucesso!";
  } else {
      echo "Erro ao cadastrar funcionário: " . mysqli_error($conn);
  } 
}
?>
<!-- // session_start();
//  include("config.php");

//  $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
//  $email = mysqli_real_escape_string($conn, trim($_POST['email']));
//  $senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

//  $sql = "SELECT COUNT(*) AS total FROM email WHERE email = ?";
// $stmt = mysqli_prepare($conn, $sql);
// mysqli_stmt_bind_param($stmt, "s", $email);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);
// $row = mysqli_fetch_assoc($result);

// if ($row['total'] == 1) {
//     $_SESSION['email_existe'] = true;
//     echo "<script>alert('Email existente em nosso banco de dados');</script>";
//     echo "<script>location.href='cadastro.php';</script>";
//     exit;
// }
//   else {

//  $sql = "INSERT INTO `tb_funcionarios` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";
    

// if($conn->query($sql) === TRUE) {
//     $_SESSION['status-cadastro'] = true;
// }

// $conn->close();

// header('Location: cadastro.php');
// exit;
{
 
//    -->