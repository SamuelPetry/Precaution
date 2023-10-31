<?php 
  
  include 'Banco.php';

  session_start();
  $id = $_SESSION['id'];
  $senha = $_POST['senha'];


  $sql = "UPDATE usuarios SET senha = '$senha' WHERE id = '$id'";

  if (mysqli_query($con, $sql)) {
    header("Location: Perfil.php");
  } else {
     echo "Não foi possível mudar a senha. ERRO ";
  }

  mysqli_close($con);
  
?>