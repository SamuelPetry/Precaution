<?php 
	include 'Banco.php';
  	session_start();

    if($_SESSION['id'] === null){
    	header("Location: Login.php");
    }

  	$id = $_GET['id'];
  	$corpo = $_GET['corpo'];

  	if(isset($_GET['corpo'])) {
	    $autor = $_SESSION['nome'];
	    $dat = date('Y-m-d');
	    $ofc = $_SESSION['tipo'];

    	$sql = "INSERT INTO comentarios (id_texto, corpo, autor, dat, tipo) VALUES ('$id','$corpo', '$autor', '$dat', '$ofc')";

	    if (mysqli_query($con, $sql)) {
	     	$ultimo_id = mysqli_insert_id($con);
	      	header("Location: Lista_texto.php");
	    } else {
	    	echo "Não foi possível fazer o post. ERRO: " . $sql . "<br>" . mysqli_error($con);
	    }

	    mysqli_close($con);
  	}
?>