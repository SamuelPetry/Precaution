<!doctype html>
<html lang="pt-br">

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
</html>