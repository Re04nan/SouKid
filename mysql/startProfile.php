<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../soukidicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=".././css/startProfile.css">
    <script src=".././js/start.js"></script>
    <title>Sou Kid | Defina o Personagem</title>
</head>

<body>
    <section class="painel-avatar container-fluid text-center align-items-center">
        <header class="nome-avatar col p-2">
            <h1><? echo $_SESSION['nome']; ?><p>Escolha o seu avatar para começarmos ☺</p></h1>
        </header>
        <div class="row row-col-2 p-4 justify-content-md-center">
            <div class="row-md-auto w-20">
                <!-- Masculion -->
                <figure class="figure">
                    <img src=".././img/modelosProntos/p00.png" id="back00" class="figure-img img-fluid" alt="Visual Masculino" title="Visual Masculino">
                    <img src=".././img/corpoM/m00.png" id="img-avatar" class="figure-img img-fluid"
                        alt="Personagem Masculino" title="Personagem Masculino">
                </figure>
            </div>
            <div class="row-md-auto w-20">
                <!-- Feminino -->
                <figure class="figure">
                    <img src=".././img/modelosProntos/p01.png" id="back01" class="figure-img img-fluid" alt="Visual Feminino" title="Visual Feminino">
                    <img src=".././img/corpoF/f00.png" id="img-avatar2" class="figure-img img-fluid"
                        alt="Personagem Feminino" title="Personagem Feminino">
                </figure>
            </div>
            <article class="col-md-auto p-2 m-4 w-20">
                <!--tons de pele -->
                <div class="col-md-auto m-2">
                    <span class="tonalidades-pele" style="background-color:#f0bd9c;"></span>
                    <span class="mark-check" id="b1" onclick="mark(this)"></span>
                </div>
                <div class="col-md-auto m-2">
                    <!-- Tratar a questão da position do mark em telas diferente -->
                    <span class="tonalidades-pele" style="background-color:#bc7c4b;"></span>
                    <span class="mark-check" id="b2" onclick="mark(this)"></span>
                </div>
                <div class="col-md-auto m-2">
                    <span class="tonalidades-pele" style="background-color:#feebda;"></span>
                    <span class="mark-check" id="b3" onclick="mark(this)"></span>
                </div>
                <div class="col-md-auto m-2">
                    <span class="tonalidades-pele" style="background-color:#58301d;"></span>
                    <span class="mark-check" id="b4" onclick="mark(this)"></span>
                </div>
                <div class="col-md-auto m-2">
                    <span class="tonalidades-pele" style="background-color:#ffffff;"></span>
                    <span class="mark-check" id="b5" onclick="mark(this)"></span>
                </div>
                <div class="col-md-auto m-2">
                    <span class="tonalidades-pele" style="background-color:#ffecdb;"></span>
                    <span class="mark-check" id="b6" onclick="mark(this)"></span>
                </div>
                <div class="col-md-auto m-2">
                    <span class="tonalidades-pele" style="background-color:#121212;"></span>
                    <span class="mark-check" id="b7" onclick="mark(this)"></span>
                </div>
            </article>
        </div>
    </section>
</body>

</html>