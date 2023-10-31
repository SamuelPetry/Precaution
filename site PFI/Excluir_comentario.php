<?php 
	include 'Banco.php';
	session_start();

	$id = $_GET['id'];
	$sql = "DELETE FROM comentarios WHERE id = '$id'";

	if (mysqli_query($con, $sql)) {
		header("Location: Lista_texto.php");
	} else {
	 	echo "Erro:" . mysqli_error($con);
	}
?>