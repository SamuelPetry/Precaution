<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

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
    // Sem o isset o código alertará que o $_SESSION está vazio, resultando em um erro.
    if (isset($_SESSION['login_falha']) && $_SESSION['login_falha'] === true) {
        echo "<script type='text/javascript'>alert('Falha ao fazer login! Dados incorretos.');</script>";
        $_SESSION['login_falha'] = false;
        session_destroy();
    }
    if (isset($_SESSION['email_falha']) && $_SESSION['email_falha'] === true) {
        echo "<script type='text/javascript'>alert('Falha ao recuperar email.');</script>";
        $_SESSION['cadastro_falha'] = false;
        session_destroy();
    }
?>
    
<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">  
    <form action="Validar_login.php" method="POST">
    <section class="vh-100">
        <div class="d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5 apt">Login</h2>

                                <form action="Validar_login.php" method="post" enctype="multipart/form-data">

                                    <div class="form-outline mb-4">
                                        <input type="email"  name="email" class="form-control form-control-lg" required>
                                        <label class="form-label" for="email">E-mail</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="senha" class="form-control form-control-lg" required>
                                        <label class="form-label" for="senha">Senha</label>
                                    </div>

                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="submit" class="btn btn-block btn-lg bg-secondary" id="Btn" name="Submit">Enviar</button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a type="button" class="btn btn-dark btn-block btn-lg" href="Home.php">Cancelar</a>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Ainda não tem uma conta? 
                                    <a href="Cadastro.php" class="fw-bold text-body"><u>Faça o Cadastro Aqui</u></a></p>
                                </form>
                                <p class="text-center text-muted"><u><a class="fw-bold text-body" data-bs-toggle="modal" data-bs-target="#modalEm" style="margin-right: 3px;">Esqueci a senha</a></u></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalEm" tabindex="-1" role="dialog" aria-labelledby="modalEmLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEmLabel">Defina uma ação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <form action="Recuperar.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <p>Confira suas mensagens de e-mail ao realizar a ação.</p>
                        <div class="form-outline mb-4">
                            <input type="email"  name="email" class="form-control form-control-lg" required>
                            <label class="form-label" for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark mt-auto">Confirmar</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>