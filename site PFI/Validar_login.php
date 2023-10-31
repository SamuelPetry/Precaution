<?php
//session_start();
if(isset($_POST['Submit'])){
  // extract($_POST);
  extract($_POST, EXTR_PREFIX_ALL, "z");
  // echo $z_email;
  // echo $z_senha;

  include 'Banco.php';
  $sql=mysqli_query($con,"SELECT * FROM usuarios WHERE email='$z_email' and senha='$z_senha'");
  $row = mysqli_fetch_array($sql); 
    
  if(is_array($row)){ 
    // echo "Usuário: ".$row["nome"];
    session_start();
    $_SESSION['id']=$row['id'];
    $_SESSION['nome']=$row['nome'];
    $_SESSION['email']=$row['email'];
    $_SESSION['senha']=$row['senha'];
    $_SESSION['pontos']=$row['pontos'];
    $_SESSION['tipo']=$row['tipo'];
    header("Location: Perfil.php"); 
  } else {
    // Esse session_start() e $_SESSION servem para definir que as informações inseridas não condizem com nada no banco de dados, uma vez que o usuário seja informado disso o $_SESSION['login_falha'] voltará a ser falso.
    session_start();
    $_SESSION['login_falha'] = true;
    header("Location: Login.php"); 
  }
  mysqli_close($con);
}
?>