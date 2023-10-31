<!doctype html>
<html lang="pt-br">

<?php 
    session_start();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Configurar Conta</title>

    <link rel="stylesheet" type="text/css" href="Estilo.css" />

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>


<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">

    <?php include "Barras.php"; ?>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card overflow-auto">
                        <div class="card-body">
                            <h2 class="text-uppercase text-center mb-5 apt">Configurar conta</h2>
                            <p class="d-flex justify-content-center">AVISO: Suas aleterações só serão aparente ao deslogar e logar em sua conta novamente</p>
                            <form action="Mudar_nome.php" method="POST">
                                <div class="form-outline mb-4">
                                    <input type="text" class="form-control form-control-lg" style="background-color: white;" name="nome" required>
                                    <label class="form-label">Alterar Nome</label>
                                </div>
                                <div class="d-flex justify-content-center form" style="margin-bottom: 10px;">
                                    <button type="submit" class="btn btn-block btn-lg bg-secondary" id="Btn" name="Submit">Enviar</button>
                                </div>
                            </form>
                            <br>
                            <form action="Mudar_senha.php" method="POST">
                                <div class="form-outline mb-4">
                                    <input type="text" class="form-control form-control-lg" style="background-color: white;" name="senha" required>
                                    <label class="form-label">Alterar Senha</label>
                                </div>
                                <div class="d-flex justify-content-center form" style="margin-bottom: 10px;">
                                    <button type="submit" class="btn btn-block btn-lg bg-secondary" id="Btn" name="Submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">

    </script>

</body>
</html>