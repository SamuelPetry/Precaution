<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fazer post</title>

    <link rel="stylesheet" type="text/css" href="Estilo.css" />

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<?php 
    session_start();
    if($_SESSION['id'] === null){
        header("Location: Login.php");
    }
?>

<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">

    <?php include "Barras.php"; ?>
    
    <form action="Validar_post.php" method="POST">
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card overflow-auto">
                        <div class="card-body">
                                <h2 class="text-uppercase text-center mb-5 apt">Escreva um texto</h2>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="titulo" class="form-control form-control-lg" style="background-color: white;" required>
                                        <label class="form-label" for="titulo">Titulo</label>
                                    </div>

                                    <div class="form-group form-outline mb-4">
                                        <textarea class="form-control" name="corpo" rows="5" cols="40" style="background-color: white;"></textarea>
                                        <label  class="form-label"for="corpo">Texto</label>
                                    </div>
                                    <div class="d-flex justify-content-center form" style="margin-bottom: 10px;">
                                        <button type="submit" class="btn btn-block btn-lg bg-secondary" id="Btn" name="Submit">Enviar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <footer class="py-5 bg-dark mt-auto">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; PRECAUTION 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">

    </script>

</body>
</html>