<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="Estilo.css" />

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>
<body class="d-flex flex-column min-vh-100 primario" style="background-color: #367588;">

	<?php include 'Barras.php'; ?>

    <br>
    <div class="container d-flex justify-content-center align-items-center h-100" style="max-width: 650px; color: white;">
        <div class="text-center mb-5 apt" style="max-width: 650px;">
            <h1 class="card-title apt alert bg-secondary" role="alert"  style="color: white;">Bem-Vindo</h1>

            <p class="apt" style="text-align: justify; font-size: 1.3em;">     Bem-vindo ao site Precaution, esse site tem como objetivo auxiliar no combate ao abuso infantil por meio da conscientização de responsáveis e demais sobre o assunto. Como? Nós fornecemos um espaço onde pessoas do dia a dia podem relatar suas experiências e ler publicações feitas por especialistas na área. Abaixo desta introdução você pode fazer um pequeno quiz sobre conhecimentos gerais envolvendo o objetivo do site. Esperamos que em sua visita possamos ajudá-lo ou que possa ajudar alguém.</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center h-100" style="max-width: 650px; margin-top: -30px; margin-bottom: 30px;">
        <a type="button"class="btn btn-block btn-lg bg-secondary" style="margin-bottom: 10px; background-color: #567ebb; color: white;" href="Quiz.php">QUIZ</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title apt alert bg-secondary" role="alert" 
                        style="color: #FFF; font-size: 1.5em ;font-weight: bold;"
                        >Destaque 1</h5>
                        <p class="card-title apt" style="text-align: justify; font-size: 1.2em;">     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet auctor leo. Integer quis libero nulla. Cras placerat purus a sagittis vehicula. In malesuada, mauris viverra sagittis facilisis, leo mauris blandit lacus, sed porta quam metus sed elit. Morbi consectetur luctus mollis. Vestibulum scelerisque felis ut mauris sagittis venenatis. Aliquam ac neque et tellus hendrerit volutpat. Maecenas at massa vitae nibh vestibulum hendrerit. Aliquam sed ex tellus.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title apt alert bg-secondary" role="alert" 
                        style="color: #FFF; font-size: 1.5em ;font-weight: bold;"
                        >Destaque 2</h5>

                        <p class="card-title apt" style="text-align: justify;font-size: 1.2em;">    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet auctor leo. Integer quis libero nulla. Cras placerat purus a sagittis vehicula. In malesuada, mauris viverra sagittis facilisis, leo mauris blandit lacus, sed porta quam metus sed elit. Morbi consectetur luctus mollis. Vestibulum scelerisque felis ut mauris sagittis venenatis. Aliquam ac neque et tellus hendrerit volutpat. Maecenas at massa vitae nibh vestibulum hendrerit. Aliquam sed ex tellus.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title apt alert bg-secondary" role="alert" 
                        style="color: #FFF; font-size: 1.5em ;font-weight: bold;"
                        >Destaque 3</h4>
                        <p class="card-title apt" style="text-align: justify;font-size: 1.2em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet auctor leo. Integer quis libero nulla. Cras placerat purus a sagittis vehicula. In malesuada, mauris viverra sagittis facilisis, leo mauris blandit lacus, sed porta quam metus sed elit. Morbi consectetur luctus mollis. Vestibulum scelerisque felis ut mauris sagittis venenatis. Aliquam ac neque et tellus hendrerit volutpat. Maecenas at massa vitae nibh vestibulum hendrerit. Aliquam sed ex tellus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

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