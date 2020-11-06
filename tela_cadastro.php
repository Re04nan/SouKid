<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
	<title>Sou Kid | Cadastro</title>
	<link rel="icon" href="soukidicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/estilo_cadastro.css">
	<link rel="stylesheet" type="text/css" href="./css/homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</head>

<body class="campo-cadastro">
    <?php
            require_once('menu.html');
        ?>
    <main>
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