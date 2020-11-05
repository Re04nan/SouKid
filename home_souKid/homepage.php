<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="soukidicon.png" type="image/png" sizes="16x16">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
                            <img src="assets/img/bemVindo.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/partesRecompensa.png" class="d-block w-100" alt="...">
                        </div> 
                        <div class="carousel-item">
                            <img src="assets/img/semaforo.png" class="d-block w-100" alt="...">
                        </div> 
                        <div class="carousel-item">
                            <img src="assets/img/avatar.png" class="d-block w-100" alt="...">
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
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                  <img src="assets/img/amanda_regina.jpeg">
                  <span>Amanda Regina
                    <br />Desenvolvedora Jr.</span>
                  <a href="http://linkedin.com/in/amandaregina"><img class="icone"
                      src="assets/img/linkedin.png" /></a>
                </div>
            
                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                    <img src="assets/img/daniela-lopes.jpg">
                    <span>Daniela Lopes
                        <br />Desenvolvedora Jr.</span>
                    <a href="https://www.linkedin.com/in/danielablopess"><img class="icone"
                        src="assets/img/linkedin.png" /></a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                  <img src="assets/img/personIcon.jpg">
                  <span>Isaque Gabriel
                    <br />Desenvolvedor Jr.</span>
                  <a href="http://linkedin.com/in/isaque-gabriel-6203951a1"><img class="icone"
                      src="assets/img/linkedin.png" /></a>
                </div>
          
                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                  <img src="assets/img/personIcon.jpg">
                  <span>Leandro de Souza
                    <br />Desenvolvedor Jr.</span>
                  <a href="https://www.linkedin.com/in/danielablopess"><img class="icone"
                      src="assets/img/linkedin.png" /></a>
                </div>
          
                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                  <img src="assets/img/renan_marques.jpeg">
                  <span>Renan Marques
                    <br />Desenvolvedor Jr.</span>
                  <a href="http://linkedin.com/in/renan-marques-615882a4"><img class="icone"
                      src="assets/img/linkedin.png" /></a>
                </div>
          
                <div class="col-lg-4 col-md-4 col-sm-12 equipe">
                  <img src="assets/img/renan_victor.jpeg">
                  <span>Renan Victor
                    <br />Desenvolvedor Jr.</span>
                  <a href="https://www.linkedin.com/in/maur%C3%ADcio-correia-dantas-491a62170/"><img class="icone"
                      src="assets/img/linkedin.png" /></a>
                </div>
              </div>
            </div>
        </footer>
    </body>
</html>