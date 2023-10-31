<?php

include 'Banco.php';

    $conec = $con;
    $conector = fetch($conec);

    function fetch($conec){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $pesq = "SELECT id, titulo, corpo, autor, dat, tipo FROM texto WHERE id = '$id'";
        } else {
            echo 'ID não encontrado na URL.';
        }

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