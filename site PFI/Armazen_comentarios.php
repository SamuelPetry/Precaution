<?php 
	include 'Banco.php';
	$conec2 = $con;
	$id2 = $_GET['id'];
	$pesq2 = "SELECT * FROM comentarios WHERE id_texto = '$id2'";

	$resultado2 = $conec2->query($pesq2);

	if($resultado2 == true){ 
		if ($resultado2->num_rows > 0) {
			$row2 = mysqli_fetch_all($resultado2, MYSQLI_ASSOC);
			$mensagem2 = $row2;
		} else {
			$mensagem2 = "Nenhum valor encontrado"; 
		}
	}
?>