<?php 
  session_start();
  $id = $_SESSION['id'];
  $valor = $_SESSION['pontos'] + 1;

  if(isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $corpo = $_POST['corpo'];
    $autor = $_SESSION['nome'];
    $dat = date('Y-m-d');
    $ofc = $_SESSION['tipo'];

    $sql = "INSERT INTO texto (titulo, corpo, autor, dat, tipo) VALUES ('$titulo', '$corpo', '$autor', '$dat', '$ofc')";
    $sql2 = "UPDATE usuarios SET pontos = $valor WHERE id = '$id'";

    include 'Banco.php';

    if (mysqli_query($con, $sql)) {
      $last_id = mysqli_insert_id($con);
    } else {
      echo "Não foi possível fazer o post.";
    }

    if (mysqli_query($con, $sql2)) {
      header("Location: Lista_texto.php"); 
    } else {
      echo "Não foi possível atualizar a sua quantidade de posts.";
    }

    mysqli_close($con);
  }
?>