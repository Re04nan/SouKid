<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="soukidicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/homepage.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/homepage.js"></script>
    <title>Sou Kid</title>
</head>

<body>
    <?php
            require_once('menu.html');
        ?>

    <div id="main" class="container">
        <div class="d-flex justify-content-center">
            <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="hover">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <figure>
                            <img src="./img/bemVindo.png" class="d-block w-100" alt="Bem Vindo(a)" title="Bem Vindo(a)">
                            <figcaption>Design by<a href="https://www.instagram.com/ruth_cherrys/" target="_blank"> @ruth_cherrys <img src="./img/instagram.svg"></a></figcaption>
                        </figure>
                    </div>
                    <div class="carousel-item">
                        <figure>
                            <img src="./img/partesRecompensa.png" class="d-block w-100" alt="Prêmios" title="Prêmios">
                            <figcaption>Design by<a href="https://www.instagram.com/ruth_cherrys/" target="_blank"> @ruth_cherrys <img src="./img/instagram.svg"></a></figcaption>
                        </figure>
                    </div>
                    <div class="carousel-item">
                        <figure>
                            <img src="./img/semaforo.png" class="d-block w-100" alt="Jogos" title="Jogos">
                            <figcaption>Design by<a href="https://www.instagram.com/ruth_cherrys/" target="_blank"> @ruth_cherrys <img src="./img/instagram.svg"></a></figcaption>
                        </figure>
                    </div>
                    <div class="carousel-item">
                        <figure>
                            <img src="./img/avatar.png" class="d-block w-100" alt="Personagens" title="Personagens">
                            <figcaption>Design by<a href="https://www.instagram.com/ruth_cherrys/" target="_blank"> @ruth_cherrys <img src="./img/instagram.svg"></a></figcaption>
                        </figure>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only shadow">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
    <br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <h3>Se conecte conosco!</h3>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <a href="#">
                        <img class="icone" src="./img/facebook.png" />
                    </a>                            
                
                    <a href="#">
                        <img class="icone" src="./img/instagram.png" />
                    </a>                            
                    
                    <a href="#">
                        <img class="icone" src="./img/twitter.png" />
                    </a>                            
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="./img/amanda_regina.jpeg">
                    <span>Amanda Regina
                        <br />Desenvolvedora Jr.</span>
                    <a href="http://linkedin.com/in/amandaregina"><img class="icone-equipe"
                            src="./img/linkedin.png" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="./img/daniela-lopes.jpg">
                    <span>Daniela Lopes
                        <br />Desenvolvedora Jr.</span>
                    <a href="https://www.linkedin.com/in/danielablopess"><img class="icone-equipe"
                            src="./img/linkedin.png" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="./img/isaque-gabriel.jpg">
                    <span>Isaque Gabriel
                        <br />Desenvolvedor Jr.</span>
                    <a href="http://linkedin.com/in/isaque-gabriel-6203951a1"><img class="icone-equipe"
                            src="./img/linkedin.png" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="./img/leandro-souza.jpg">
                    <span>Leandro de Souza
                        <br />Desenvolvedor Jr.</span>
                    <a href="#"><img class="icone-equipe" src="./img/linkedin.png" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="./img/renan_marques.jpeg">
                    <span>Renan Marques
                        <br />Desenvolvedor Jr.</span>
                    <a href="http://linkedin.com/in/renan-marques-615882a4"><img class="icone-equipe"
                            src="./img/linkedin.png" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="./img/renan_victor.jpeg">
                    <span>Renan Victor
                        <br />Desenvolvedor Jr.</span>
                    <a href="#"><img class="icone-equipe" src="./img/linkedin.png" /></a>
                </div>
            </div>
            <div id="assinatura-footer" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <span id="ano"></span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>