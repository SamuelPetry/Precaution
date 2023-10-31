<?php
    include 'Banco.php';

    session_start();
    $nome = $_GET['id'];
    $nome = str_replace("+", " ", $nome);

    $query = "DELETE FROM usuarios WHERE nome = '$nome'";
    $query2 = "DELETE FROM texto WHERE autor = '$nome'";

    if (mysqli_query($con, $query2)) {
        if (mysqli_query($con, $query)) {
            header('Location: Mod.php'); 
            exit;
        } else {
            echo "Erro usuário não encontrado";
        }
    } else {
        echo "Erro texto não encontrado";
    }


    mysqli_close($con);
?>