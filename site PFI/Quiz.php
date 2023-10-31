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

    <title>Quiz</title>

    <link rel="stylesheet" type="text/css" href="Estilo.css" />

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<script>

    var pontos = 0;

    function certo1() {
        document.getElementById("qst1").style.display = "none";
        document.getElementById("qst2").style.display = "block";
        pontos = pontos + 1;
        return pontos;
    }

    function certo2() {
        document.getElementById("qst2").style.display = "none";
        document.getElementById("qst3").style.display = "block";
        pontos = pontos + 1;
        return pontos;
    }

    function certo3() {
        document.getElementById("qst3").style.display = "none";
        document.getElementById("qst4").style.display = "block";
        pontos = pontos + 1;
        return pontos;
    }

    function certo4() {
        document.getElementById("qst4").style.display = "none";
        document.getElementById("qst5").style.display = "block";
        pontos = pontos + 1;
        return pontos;
    }

    function certo5() {
        pontos = pontos + 1;
        fim();
    }

    function fim(){

        var txt = "Você acertou " + pontos + " de 5 questões";
        var pont = "Você fez " + pontos * 50 + " pontos";

        document.getElementById("qst1").style.display = "none";
        document.getElementById("qst2").style.display = "none";
        document.getElementById("qst3").style.display = "none";
        document.getElementById("qst4").style.display = "none";
        document.getElementById("qst5").style.display = "none";

        document.getElementById("final").style.display = "block";

        document.getElementById("Qtdperguntas").innerHTML = txt;
        document.getElementById("Qtdpontos").innerHTML = pont;

        
        /*const destruir = document.querySelectorAll("card-body p-5");

        destruir.forEach(function(div) {
            if(!document.getElementById("ult")){
                div.style.display = "none";
            }
        });

        document.getElementById("ult").style.display = "block";*/
    }
    

</script>

<body class="d-flex flex-column min-vh-100" style="background-color: #367588;">

    <?php include "Barras.php"; ?>

    <section class="vh-100">
        <div class="d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5" id="qst1">
                                <h2 class="text-uppercase text-center mb-5 apt">Questão 1</h2>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-5 apt" id="pergunta">
                                        <p style="text-align: justify;">No Brasil é oferecido um sistema de denúncia de facil acesso a todos os seus cidadãos, esse sistema é responsável por receber, analisar e enviar violações de direitos humanos, dentre eles violações contra crianças e adolescentes, é possível acessá-lo ao digitar um número no celular ou telefone, que número é esse?</p>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 1" onclick="fim()"> 191 </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 3" onclick="fim()"> 192 </button>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 2" onclick="fim()"> 190 </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 4" onclick="certo1()"> 100 </button>
                                    </div> 
                                </form>

                            </div>
                            <div class="card-body p-5" id="qst2" class="hidden" style="display: none;">
                                <h2 class="text-uppercase text-center mb-5 apt">Questão 2</h2>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-5 apt" id="pergunta">
                                        <p style="text-align: justify;">Qual o nome do órgão do governo brasileiro responsável por garantir e proteger os direitos de crianças e adolescentes em território nacional?</p>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 1" onclick="certo2()"> Conselho Tutelar </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 3" onclick="fim()"> Policia Militar </button>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 2" onclick="fim()"> Sistema único de saúde </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 4" onclick="fim()"> Defesa civil </button>
                                    </div>
                                </form>

                            </div>
                            <div class="card-body p-5" id="qst3" class="hidden" style="display: none;">
                                <h2 class="text-uppercase text-center mb-5 apt">Questão 3</h2>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-5 apt" id="pergunta">
                                        <p style="text-align: justify;">A ONU é uma organização internacional voltada a manter a paz e garantir o cumprimento dos direitos humanos de seus membros além de promover a paz e segurança, essa organização possui uma agência inteiramente voltada a proteção garantia dos direitos a crianças e adolescentes, qual seu nome?</p>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 1" onclick="fim()"> União Postal Universal </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 3" onclick="certo3()"> Fundo das Nações Unidas para a Infância </button>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 2" onclick="fim()"> Organização das Nações Unidas para a Educação, a Ciência e a Cultura </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 4" onclick="fim()"> União Internacional de Telecomunicações </button>
                                    </div> 
                                </form>

                            </div>
                            <div class="card-body p-5" id="qst4" class="hidden" style="display: none;">
                                <h2 class="text-uppercase text-center mb-5 apt">Questão 4</h2>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-5 apt" id="pergunta">
                                        <p style="text-align: justify;">Por meio da Lei Federal nº 8.069 foi criado, o estatuto da criança e do adolescente, ele estabelece as responsabilidades da família, da sociedade e do Estado em relação seus direitos e cria mecanismos para garantir sua proteção quando essa lei foi aprovada?</p>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 1" onclick="fim()"> 2000 </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 3" onclick="fim()"> 1988 </button>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 2" onclick="certo4()"> 1990 </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 4" onclick="fim()"> 1943 </button>
                                    </div> 
                                </form>

                            </div>
                            <div class="card-body p-5" id="qst5" class="hidden" style="display: none;">
                                <h2 class="text-uppercase text-center mb-5 apt">Questão 5</h2>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-5 apt" id="pergunta">
                                        <p style="text-align: justify;">Qual é um dos principais desafios na detecção do abuso infantil que ocorre em ambiente doméstico?</p>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 1" onclick="fim()"> Lesões físicas evidentes </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 3" onclick="fim()"> Comportamento agressivo das crianças </button>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 2" onclick="fim()"> Notificações automáticas das escolas </button><br>
                                        <button type="button" class="btn btn-block btn-lg" id="Resposta 4" onclick="certo5()"> Falta de testemunhas independentes </button>
                                    </div> 
                                </form>

                            </div>

                            <div class="card-body p-5" id="final" class="hidden" style="display: none;">
                                <h2 class="text-uppercase text-center mb-5 apt">Fim do Quiz</h2>

                                <form method="post" enctype="multipart/form-data">
                                    <h3 class="text-uppercase text-center mb-5 apt" id="Qtdperguntas"></h3>
                                    <div class="mb-5 apt">
                                        <p id="Qtdpontos"></p>
                                    </div>
                                    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                                        <a type="button" class="btn btn-block btn-lg" href="Home.php"> Voltar ao inicio </a><br>
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript"></script>

</body>

</html>