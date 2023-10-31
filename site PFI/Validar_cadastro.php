<?php 
  if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, senha, pontos, tipo) VALUES ('$nome', '$email', '$senha', 0, 'Comum')";

    include 'Banco.php';

    if (mysqli_query($con, $sql)) {
      $ultimo_id = mysqli_insert_id($con) ;
      session_start();
      header("Location: Perfil.php"); 
    } else {
      session_start();
      $_SESSION['cadastro_falha'] = true;
      header("Location: Cadastro.php"); 
    }
    mysqli_close($con);
  }
?>