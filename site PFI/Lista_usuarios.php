<?php
    session_start();
    include 'Armazen_usuarios.php'
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lista de Usuários</title>

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
    ?>
    
    <section class="py-5">
        <div class="container">
            <h1 class="apt" style="color: white;">Faça a sua publicação hoje!</h1>
            <div class="row">
                <p class="apt" style="color: white;">O objetivo dessas publicações é que pessoas normais e especialistas possam compartilhar maneiras de combater o abuso infantil, ao fazer uma publicação você pode contribuir para a causa. Lembre-se de seguir as regras estabelicidas pelo site, qualquer publicação indevida será analizada pela administração, caso ela infrinja as normas do site o responsável terá sua conta excluida.</p>
                <div class="d-flex justify-content-center" style="margin-bottom: 25px">
                    <a type="button" class="btn btn-sm bg-secondary" href="Mod.php">Gerenciar Denuncias</a>
                </div>
                <div class="col-12 grid-margin">
                    <div class="card overflow-auto">
                        <div class="card-body">
                            <h4 class="card-title apt" style="color: black">Textos publicados
                            </h4>
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead><tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Publicações</th>
                                        <th>Tipos</th>
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
                                        <td><?php echo $val['nome']; ?></td>
                                        <td><?php echo $val['email']; ?></td>
                                        <td><?php echo $val['pontos']; ?></td>
                                        <td>
                                            <button class="btn mt-auto bg-secondary" data-bs-toggle="modal" data-bs-target="#modalUS" style="margin-right: 3px;"><?php echo $val['tipo']; ?></button>
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

    <div class="modal fade" id="modalUS" tabindex="-1" role="dialog" aria-labelledby="modalUSLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUSLabel">Defina uma ação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>Selecione uma das ações.</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <?php 
                        if ($val['tipo'] !== 'Comum') {
                            echo '<a class="btn btn-dark mt-auto" href="Mudar_comum.php?id=' . urlencode($val['id']) . '">Mudar para Comum</a>';
                        }
                    ?>
                    <?php 
                        if ($val['tipo'] !== 'Especialista') {
                            echo '<a class="btn btn-dark mt-auto" href="Mudar_especialista.php?id=' . urlencode($val['id']) . '">Mudar para Especialista</a>';
                        }
                    ?>
                    <?php 
                        if ($val['tipo'] !== 'Administrador') {
                            echo '<a class="btn btn-dark mt-auto" href="Mudar_administrador.php?id=' . urlencode($val['id']) . '">Mudar para Administrador</a>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>