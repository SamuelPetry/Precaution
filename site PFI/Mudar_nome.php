<?php 
  
  include 'Banco.php';

  session_start();
  $id = $_SESSION['id'];
  $nome = $_POST['nome'];


  $sql = "UPDATE usuarios SET nome = '$nome' WHERE id = '$id'";

  if (mysqli_query($con, $sql)) {
    header("Location: Perfil.php");
  } else {
     echo "Não foi possível fazer o post. ERRO: " . $sql . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
  
?>