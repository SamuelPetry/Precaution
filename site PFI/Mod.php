<?php
    session_start();
    include 'Armazen_denuncias.php'
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Moderação</title>

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
            <h1 class="apt" style="color: white;">Administrador</h1>
            <div class="row">
                <p class="apt" style="color: white;">Lembre-se, sua função é manter a integridade das postagens realizadas pelos usuárioas desse site de acordo com nossas normas, qualquer artigo que não condiz com a mensagem do site ou possui palavras de baixo calão devem ser excluidas.</p>
                <div class="d-flex justify-content-center" style="margin-bottom: 25px">
                    <a type="button" class="btn btn-sm bg-secondary" href="Lista_usuarios.php">Gerenciar usuários</a>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card overflow-auto">
                        <div class="card-body">
                            <h4 class="card-title apt" style="color: black">Denuncias
                            </h4>
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Texto</th>
                                            <th>Autor</th>
                                            <th>Status de Banimento</th>
                                            <th>Data da denúncia</th>
                                            <th>Verificação Atual</th>
                                            <th>Alterar</th>
                                        </tr>
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
                                        <td>Pendente</td>
                                        <td><?php echo $val['dat']; ?></td>
                                        <td><?php echo $val['tipo']; ?></td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <button class="btn mt-auto" data-bs-toggle="modal" data-bs-target="#modalADM" style="margin-right: 3px;">Definir</button>
                                                <?php
                                                if (isset($val['id'])) {
                                                    echo '<a class="btn btn-dark mt-auto" href="Artigo.php?id=' . urlencode($val['id_texto']) . '">Post</a>';
                                                } else {
                                                    echo 'Link não encontrado';
                                                }
                                            ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $sim++;}} ?>
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

    <div class="modal fade" id="modalADM" tabindex="-1" role="dialog" aria-labelledby="modalADMLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalADMLabel">Defina uma ação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>Selecione uma das ações.</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                   <?php echo '<a class="btn btn-dark mt-auto" href="Descartar.php?id=' . urlencode($val['id']) . '">Excluir denúncia</a>' ?>
                   <?php echo '<a class="btn btn-dark mt-auto" href="Banir.php?id=' . urlencode($val['autor']) . '">Excluir usuario</a>' ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>