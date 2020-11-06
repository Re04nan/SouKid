<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="mysql/assets/css/estilo_cadastro.css">
	<link rel="stylesheet" type="text/css" href="mysql/assets/css/homepage.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body class="campo-cadastro">
	<header>
		<div class="container">
			<div>
				<a href="#">Iní­cio</a>
			</div>
			<div class="right">
				<a href="#">Sobre</a> 
			</div>
			<div class="right">
				<img src="mysql/assets/img/soukidlogo.png" id="logo" alt="Logo">
			</div>
			<div class="right">
				<a href="#">Contato</a>
			</div>
			<div class="right">
				<a href="#">Login</a>
			</div>
		</div>
	</header>

	<section class="container">
		<div class="row align-items-center" style="margin-left:350px; margin-top:100px; width: 410px; height: 625px; border-radius: 10px; background-color:#f1eeee;	box-shadow: 5px 5px 5px #363636;">
			<div class="col">
				<form action="mysql/insert_cadastro.php" method="POST">
					<p>Novo Cadastro</p>

					<label for="id_escolar">Identificação Escola:</label><br>
					<input class="box-txt" type="text" name="id_escolar" value="1001"><br>

					<label for="id_aluno">Identificação Aluno:</label><br>
					<input class="box-txt" type="text" name="id_aluno" placeholder="Registro do Aluno (RA)"><br>

					<label for="nome">Nome do Aluno:</label><br>
					<input class="box-txt" type="text" name="nome_aluno" placeholder="Nome completo" value=""><br>

					<label for="dnasc">Data de Nascimento:</label><br>
					<input class="box-txt" type="date" name="datanasc" value=""><br>

					<label for="user">Usuário:</label><br>
					<input class="box-txt" type="text" name="user" placeholder="Id da Escola + Id do Aluno - Exemplo 10002021" value=""><br>

					<label for="senha">Senha:</label><br>
					<input class="box-txt" type="password" name="senha" placeholder="Data de nascimento do aluno" value=""><br><br>

					<input id="btn_enviar" type="submit" onmouseover="sobrebtnCadastrar(this)" onmouseout="forabtnCadastro(this)" name="enviar" value="Cadastrar">
				</form>
				<center>
					<a href="mysql/conteudo_tabela.php">Consultar alunos cadastrados.</a>
				</center>
			</div>			
		</div>
	</section>
	<script type="text/javascript" src="js/função.js"></script>
</body>
</html>