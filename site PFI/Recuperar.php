<?php 

  include 'Banco.php';

  if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $mail = (String)$_POST['email'];

    $sql = "SELECT senha FROM usuarios WHERE email = '$email'";

    $res = (mysqli_query($con, $sql)); 
    if ($res) {
        $senha = mysqli_fetch_assoc($res);
        $senha2 = $senha['senha'];
        mail($mail, "Sua senha", $senha2);
        header("Location: Login.php");
    } else {
      session_start();
      $_SESSION['email_falha'] = true;
      header("Location: Login.php");
    }

  } else {
    echo "Erro ao enviar e-mail";
  }
?>