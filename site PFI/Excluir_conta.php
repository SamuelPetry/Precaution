<?php 
	include 'Banco.php';
	session_start();

	$nome = $_SESSION['nome'];
	$query = "DELETE FROM usuarios WHERE nome = '$nome'";
	$query2 = "DELETE FROM texto WHERE autor = '$nome'";

	if (mysqli_query($con, $query2)) {
		session_destroy();
	} else {
	 	echo "Erro:" . mysqli_error($con);
	}

	if (mysqli_query($con, $query)) {
		session_destroy();
		header('Location: Home.php'); 
		exit;
	} else {
	 	echo "Erro:" . mysqli_error($con);
	}
?>