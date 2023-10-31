<?php
    session_start();
    include 'Link.php'
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Página do Documento</title>

    <link rel="stylesheet" type="text/css" href="Estilo.css" />

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<style>
    .icone {
        background-color: transparent;
        border: none;
    }

    .paragrafo {
    margin-left: 20px;
    }
</style>

<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">

    <?php
        include "Barras.php";
        $id = $_GET['id'];
    ?>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card overflow-auto">
                        <div class="card-body">
                            <?php
                                if(is_array($conector)){
                                // Checagem se o array esta funcionando      
                                $sim = 1;
                                 // O foreach percorre todos so elementos legiveis de um array, ele é responsável por ler todos os diferentes valores de um memsmo elemento da tabela.
                                foreach($conector as $val){
                                ?>
                                <div class="row justify-content-center align-items-center">
                                    <h2 class="text-uppercase mb-5 apt">
                                        <?php echo $val['titulo'];
                                            if ($val['tipo'] === 'Especialista') { ?><span class="bi bi-check-lg"></span>
                                        <?php } ?>
                                    </h2>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="justify-content-start"><?php echo $val['autor']; ?></div>
                                    <div class="justify-content-end"><?php echo $val['dat']; ?></div>
                                </div><br>

                                <div class="form-group form-outline mb-4" style="text-align:justify;">
                                    <p><?php 
                                            $texto = $val['corpo']; 
                                            echo '<div>' . nl2br($texto) . '</div>';
                                        ?></p>
                                </div>
                            <?php $sim++;}}?>
                        </div>
                    </div><br>
                    <form action="Validar_denuncia.php" method="GET">
                        <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input class="btn bg-secondary" type="submit" value="Denunciar">
                        </div>
                    </form>
                    <h3 style="color: white;">Comentários</h3>
                    <form action="Comentar.php" method="GET">
                        <div class="form-outline d-flex align-items-center mb-4 bg-secondary" style="border-radius: 10px;">
                            <input type="hidden" name="id" value="<?php echo urlencode($val['id']); ?>">
                            <input type="text" class="form-control form-control-lg" name="corpo" required>
                            <label class="form-label" style="color: white;">Faça o seu comentário</label>
                            <button type="submit" class="fas bi-chat-fill fa-xl is tb icone" style="color: white;"></button>
                        </div>
                    </form>
                    <?php
                        include 'Armazen_comentarios.php';
                        if(is_array($mensagem2)){  

                        // Variável contadora
                        $s = 0;

                        // O foreach percorre todos so elementos legiveis de um array, ele é responsável por ler todos os diferentes valores de um memsmo elemento da tabela.
                        foreach($mensagem2 as $val2){
                        
                    ?>
                    <div class="card overflow-auto">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="justify-content-start"><?php echo $val2['autor']; ?></div>
                                    <div class="justify-content-end">
                                        <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                            <?php echo $val2['dat']; 
                                            if (isset($_SESSION['tipo']) && $_SESSION['tipo'] === 'Administrador') { ?>
                                                    <form action="Excluir_comentario.php" method="GET">
                                                        <input type="hidden" name="id" value="<?php echo urlencode($val2['id']); ?>">
                                                        <button type="submit" class="fas bi-trash-fill fa-xl is tb icone" ></button>
                                                    </form>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group form-outline mb-4">
                                    <p><?php echo $val2['corpo']; ?></p>
                                </div>
                            </div>
                        </div>
                    <br>
                    <?php $s++;}}?>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark mt-auto">
        <div class="container">
            <p class="m-0 text-center text-white">PRECAUTION 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>