<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/homepage.css">
    <link rel="stylesheet" href="Login.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4PK1HbGYGMaXqCHc6QfLWd9wbFJpoJp4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <nav id="header">
        <div class="container">
            <div>
                <a href="../home_souKid/homepage.php">Início</a>
            </div>
            <div class="right">
                <a href="#">Sobre</a> 
            </div>
            <div class="right">
                <img src="soukidlogo.png" id="logo" alt="Logo">
            </div>
            <div class="right">
                <a href="#">Contato</a>
            </div>
            <div class="right">
                <a href="../CompacLogin/Login.php">Login</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <!-- HEADER inicio-->
        <header>
            <div class="espaco"></div>
            <div id="teste" class="row justify-content-center">
                <div id="login" onmousemove="sombra1(this)" onmouseout="sombra2(this)" class="btn btn-success ">LOGIN</div>
            </div>
            <div class="row justify-content-center">
                <div id="texto" class="col-sm-6 col-md-12 text-center text-white mt-2">
                    <p>O seu nome de usuário e senha</p>
                    <p>foram fornecidas pela escola.</p> 
                </div>
            </div>
        </header>
        <!-- HEADER fim-->
        <!-- Form inicio -->
        <main>
            <div class="row justify-content-center">
               <form action="">
                   <input type="text" name="usuario" onmouseover="sombra1(this)" onmouseout="sombra2(this)" id="formulario" placeholder="Usuario">
                    <br>
                   <input type="password" name="Senha" class="mt-5" onmouseover="sombra1(this)" onmouseout="sombra2(this)" id="formulario" placeholder="Senha">
                   <br>
                   <label for="" id="radio" class="ml-5">Aluno</label>
                   <input type="radio" name="entrada" value="aluno" id="aluno">
                   <label for="" id="radio" class="ml-5" >Administrador</label>
                   <input type="radio" name="entrada" value="adm" id="adm">
                   <br>
                   <div class="text-center">
                        <div class="text-white mt-4">
                            <p class="text"><b> Esqueceu sua senha? Cliqui <a class="text-white" href="#">aqui</a></b></p>
                        </div>
                        <div class="text-center">
                            <button id="botao" type="submit"  onmousemove="efeito1(this)" onmouseout="efeito2(this)" class="btn btn-success">ENTRAR</button>
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
    <script src="./login.js"></script>
</body>
</html>