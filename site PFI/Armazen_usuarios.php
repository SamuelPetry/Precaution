<?php 
	include 'Banco.php';
	$conec = $con;
	$conector = fetch($conec);

	function fetch($conec){
		$pesq = "SELECT id, nome, email, senha, pontos, tipo FROM usuarios ORDER BY id ASC";
		$resultado = $conec->query($pesq);

		if($resultado == true){ 
			if ($resultado->num_rows > 0) {
				$row = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
			    $mensagem = $row;
			} else {
			   $mensagem = "Nenhum valor encontrado"; 
			}
		}
		return $mensagem;
	}
 ?>