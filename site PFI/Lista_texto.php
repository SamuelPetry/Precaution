<?php
    session_start();
    include 'Armazen_textos.php'
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Publicações</title>

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

    <?php
    include "Barras.php";
    // Sem o isset o código alertará que o $_SESSION está vazio, resultando em um erro.
    if (isset($_SESSION['Denuncia_sucesso']) && $_SESSION['Denuncia_sucesso'] === true) {
        echo "<script type='text/javascript'>alert('Sua denuncia foi registrada.');</script>";
        $_SESSION['Denuncia_sucesso'] = false;
    }
    ?>
    
    <section class="py-5">
        <div class="container">
            <h1 class="apt" style="color: white;">Faça a sua publicação hoje!</h1>
            <div class="row">
                <p class="apt" style="color: white;">O objetivo dessas publicações é que pessoas normais e especialistas possam compartilhar maneiras de combater o abuso infantil, ao fazer uma publicação você pode contribuir para a causa. Lembre-se de seguir as regras estabelicidas pelo site, qualquer publicação indevida será analizada pela administração, caso ela infrinja as normas do site o responsável terá sua conta excluida.</p>
                <div class="d-flex justify-content-center" style="margin-bottom: 25px">
                    <a type="button" class="btn btn-sm bg-secondary" href="Fazer_post.php">+ Escrever</a>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card overflow-auto">
                        <div class="card-body">
                            <h4 class="card-title apt" style="color: black">Textos publicados
                            </h4>
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead><tr>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Data</th>
                                        <th>Tipo do usuário</th>
                                        <th>Link</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(is_array($conector)){
                                        // Checagem se o array esta funcionando      
                                        $sim = 1;
                                        // O foreach percorre todos so elementos legiveis de um array, ele é responsável por ler todos os diferentes valores de um memsmo elemento da tabela.
                                        foreach($conector as $val){
                                    ?>
                                    <tr> 
                                        <td><?php echo $val['titulo']; ?></td>
                                        <td><?php echo $val['autor']; ?></td>
                                        <td><?php echo $val['dat']; ?></td>
                                        <td><?php echo $val['tipo']; ?></td>
                                        <td>
                                            <?php
                                                if (isset($val['id'])) {
                                                    echo '<a href="Artigo.php?id=' . urlencode($val['id']) . '">Link</a>';
                                                } else {
                                                    echo 'Link não encontrado';
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php $sim++;}}?>
                                    </tbody>
                                </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>