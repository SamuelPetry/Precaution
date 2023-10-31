<!doctype html>
<html lang="pt-br">

<?php 
    session_start();
    if($_SESSION['id'] === null){
        header("Location: Login.php");
    }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Perfil de Usuario</title>

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
    .peq {
        font-size: 60%;
    }
</style>

<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">

    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
            <h4 class="apt" style="font-weight: bold; color: black;">Precaution</h4>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-row tb">
                    <?php if (isset($_SESSION['tipo']) && $_SESSION['tipo'] === 'Administrador') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="Mod.php">
                                <i class="fas bi-shield-fill fa-xl is tb"></i>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">
                            <i class="fas fa-house-chimney fa-xl is tb"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Lista_texto.php">
                            <i class="fas bi-file-text-fill fa-xl is tb"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Perfil.php">
                            <i class="fas fa-user fa-xl is tb"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body justify-content-center bg-secondary" style="border-radius: 10px;">
                            <div class="text-center">
                                <h2 class="apt" style="color: black; margin-top: 15px;" id="Nome">
                                    <div class="d-flex justify-content-center">
                                        <?php 
                                            include "Validar_login.php";
                                            echo $_SESSION["nome"]; 
                                        ?>
                                        <a class="nav-link" href="Mudar.php">
                                            <i class="bi bi-tools peq mr-2"></i>
                                        </a>
                                    </div>
                                </h2>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="table-responsive">
                                            <h4 class="apt" style="color: black;">Informações</h4>
                                            <div class="card overflow-auto border-dark">
                                                <div class="card-body text-dark">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo da conta</th>
                                                                <th>Publicações</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php 
                                                                        include "Validar_login.php";
                                                                        echo $_SESSION["tipo"];
                                                                    ?>
                                                                </td>
                                                                <td><?php 
                                                                        include "Validar_login.php";
                                                                        echo $_SESSION["pontos"];
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <h4 class="apt" style="color: black;">Opções</h4>
                                        <div class="card border-dark">
                                            <div class="card-body text-dark terciario">
                                                <a class="btn btn-block mt-auto d-flex justify-content-center bg-secondary"
                                                    style="margin-bottom: 10px;" href="Lista_historico.php">Historico de publicações</a>
                                                <a type="button" class="btn btn-block mt-auto d-flex justify-content-center bg-secondary" style="margin-bottom: 10px; " href="Logout.php">Sair</a>
                                                <button type="button" class="btn btn-block btn-black mt-auto d-flex justify-content-center"  data-bs-toggle="modal" data-bs-target="#modalExcluir">Excluir conta</button>
                                                <!-- <a type="button" class="btn btn-dark btn-block mt-auto d-flex justify-content-center" href="Excluir_conta.php">Excluir conta</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark mt-auto">
        <div class="container">
            <p class="m-0 text-center text-white">PRECAUTION 2023</p>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade primario" id="modalExcluir" tabindex="-1" aria-labelledby="modalExcluirLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalExcluirLabel">Tem certeza?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <p>Todas as suas publicações serão excluidas</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">  
                    <button type="button" class="btn" data-bs-dismiss="modal">Mudei de ideia</button>
                    <a type="button" class="btn"  href="Excluir_conta.php">Excluir conta</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>