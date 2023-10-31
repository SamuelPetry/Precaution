<?php 
  $servidor = "localhost";
  $usuario = "samuel";
  $sen = "ifpr";
  $db = "pfi";

  $con = mysqli_connect($servidor, $usuario, $sen, $db);

  if (!$con) {
    die("Não foi possivel realizar a conexão com o banco de dados. ERRO: " . mysqli_connect_error());
  }
 ?>