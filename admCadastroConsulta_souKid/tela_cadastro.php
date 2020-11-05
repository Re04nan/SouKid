<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/estilo_cadastro.css">
</head>
<body>
	<main>
		<section class="conteiner">
			<div class="box-cadastro">
				<h1>Novo Cadastro</h1>
				<form action="mysql/insert_cadastro.php" method="POST">
					
					<label for="id_escolar">Identificação Escola:</label><br>
					<input class="box-txt" type="text" name="id_escolar" value="1001"><br><br>

					<label for="id_aluno">Identificação Aluno:</label><br>
					<input class="box-txt" type="text" name="id_aluno" placeholder="Registro do Aluno (RA)"><br><br>

					<label for="nome">Nome do Aluno:</label><br>
					<input class="box-txt" type="text" name="nome_aluno" placeholder="Nome completo" value=""><br><br>

					<label for="dnasc">Data de Nascimento:</label><br>
					<input class="box-txt" type="date" name="datanasc" value=""><br><br>

					<label for="user">Usuário:</label><br>
					<input class="box-txt" type="text" name="user" placeholder="Id da Escola + Id do Aluno - Exemplo 10002021" value=""><br><br>

					<label for="senha">Senha:</label><br>
					<input class="box-txt" type="password" name="senha" placeholder="Data de nascimento do aluno" value=""><br><br>

					<center>
						<input id="btn_enviar" type="submit" onmouseover="sobrebtnCadastrar(this)" onmouseout="forabtnCadastro(this)" name="enviar" value="Cadastrar">
					</center>
				</form>
				<a href="mysql/conteudo_tabela.php">Consultar alunos cadastrados.</a>
			</div>
		</section>
	</main>
<script type="text/javascript" src="js/função.js"></script>
</body>
</html>