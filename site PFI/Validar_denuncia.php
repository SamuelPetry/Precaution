<?php
    include 'Banco.php';
    //$id = isset($_GET['id']) ? $_GET['id'] : '';
    $id = $_GET['id'];

    if (!empty($id)) {
        $sql = "INSERT INTO denuncia (id_texto) VALUES ('$id')";

        if (mysqli_query($con, $sql)) {
            $ultimo_id = mysqli_insert_id($con);
            session_start();
            $_SESSION['Denuncia_sucesso'] = true;
            header("Location: Lista_texto.php"); 
        } else {
            echo "Falhou";
        }
    }
    mysqli_close($con);
?>