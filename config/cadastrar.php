<?php
require('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
  $email = mysqli_real_escape_string($conn, trim($_POST['email']));
  $matricula = mysqli_real_escape_string($conn, trim($_POST['matricula']));
  
  
   $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));
   $hash_senha = password_hash($senha, PASSWORD_DEFAULT);

           $sql = "INSERT INTO `usuarios` (`matricula`, `nome`, `email`, `senha`) VALUES ('$matricula', '$nome', '$email', '$hash_senha')";
   
  // var_dump($matricula);
  // var_dump($nome);
  // var_dump($email);
  // var_dump($hash_senha);
  // var_dump($senha);



  if (mysqli_query($conn, $sql)) {
      echo "Funcionário cadastrado com sucesso!";
      print "<script>location.href='../views/areaDeControlePrincipal.php';</script>";
  } else {
      echo "Erro ao cadastrar funcionário: " . mysqli_error($conn);
  } 

} 

?>
