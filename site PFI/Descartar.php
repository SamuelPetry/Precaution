<?php
	include 'Banco.php';
	session_start();

	$id = $_GET['id'];

	$query = "SELECT id_texto FROM denuncia WHERE id = '$id'";
	$resultado = mysqli_query($con, $query);

	if ($resultado) {
	    $row = mysqli_fetch_array($resultado);
	    $id_texto = $row['id_texto'];

	    $query2 = "DELETE FROM denuncia WHERE id_texto = '$id_texto'";

	    if (mysqli_query($con, $query2)) {
	        header("Location: Mod.php");
	    } else {
	        echo "Erro ao excluir o registro: " . mysqli_error($con);
	    }
	    
	} else {
	    echo "Erro ao obter o id_texto: " . mysqli_error($con);
	}

	mysqli_close($con);
?>