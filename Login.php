<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sou Kid | Login</title>
    <link rel="icon" href="soukidicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/Login.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
            require_once('menu.html');
        ?>
    <div class="container-fluid mt-5">
        <!-- HEADER inicio-->
        <header>
            <div class="espaco"></div>
            <div id="teste" class="row justify-content-center">
                <div id="login" onmousemove="sombra1(this)" onmouseout="sombra2(this)" class="btn btn-success ">LOGIN
                </div>
            </div>
            <div class="row justify-content-center">
                <div id="texto" class="col-sm-6 col-md-12 text-center text-white mt-2">
                    <p>Seu nome de usuário e senha</p>
                    
                    <p>foram fornecidos pela escola.</p>
                </div>
            </div>
        </header>
        <!-- HEADER fim-->
        <!-- Form inicio -->
        <main>
            <div class="row justify-content-center">
                <form method="POST" action="./mysql/login_verificacao.php">
                    <input type="text" name="usuario" onmouseover="sombra1(this)" onmouseout="sombra2(this)"
                        id="formulario" placeholder="Usuario">
                    <br>
                    <input type="password" name="senha" class="mt-5" onmouseover="sombra1(this)"
                        onmouseout="sombra2(this)" id="formulario" placeholder="Senha">
                    <br>
                    <label for="" id="radio" class="ml-5">Aluno</label>
                    <input type="radio" name="entrada" value="aluno" id="aluno">
                    <label for="" id="radio" class="ml-5">Administrador</label>
                    <input type="radio" name="entrada" value="adm" id="adm">
                    <br>
                    <div class="text-center">
                        <div class="text-white mt-4">
                            <p class="text"><b> Esqueceu sua senha? Clique <a class="text-white" href="#">aqui</a></b>
                            </p>
                        </div>
                        <div class="text-center">
                            <button id="botao" type="submit" onmousemove="efeito1(this)" onmouseout="efeito2(this)"
                                class="btn btn-success">ENTRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!-- Form final -->
        <div class="row justify-content-center">
            <div class="mt-5" id="squad">© 2021 - SQUAD 5</div>
        </div>
    </div>
    <script src="./js/login.js"></script>
</body>

</html>
