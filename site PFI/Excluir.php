<?php 
	include 'Banco.php';
	session_start();

	$id = $_GET['id'];
	$us_id = $_SESSION['id'];
	$valor = $_SESSION['pontos'] - 1;

	$query = "DELETE FROM texto WHERE id = '$id'";
	$query2 = "UPDATE usuarios SET pontos = $valor WHERE id = '$us_id'";

	if (mysqli_query($con, $query)) {
		if (mysqli_query($con, $query2)) {
		    header("Location: Lista_historico.php"); 
		} else {
		    echo "Não foi possível fazer o post. ERRO: " . $sql . "<br>" . mysqli_error($con);
		}
	} else {
	  echo "Erro:" . mysqli_error($con);
	}

    mysqli_close($con);
?>