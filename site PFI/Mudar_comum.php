<?php 
  
  include 'Banco.php';

  session_start();
  $id = $_GET['id'];

  $ofc = "Comum";

  $sql = "UPDATE usuarios SET tipo = '$ofc' WHERE id = '$id'";

  if (mysqli_query($con, $sql)) {
    header("Location: Lista_usuarios.php");
  } else {
     echo "Não foi possível fazer o post. ERRO: " . $sql . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
  
?>