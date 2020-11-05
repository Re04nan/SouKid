<?php
	// Fazendo o insert de cadastro no BD
	include_once "conexao.php";

	if (isset($_POST['id_escolar']) && isset($_POST['id_aluno']) && isset ($_POST['nome_aluno']) 
				&& isset($_POST['datanasc']) && isset($_POST['user']) && isset($_POST['senha'])) {

		$id_escolar = $_POST['id_escolar'];
		$id_aluno = $_POST['id_aluno'];
		$nome_aluno = $_POST['nome_aluno'];
		$datanasc = $_POST['datanasc'];
		$user = $_POST['user'];
		$senha = md5($_POST['senha']); 

		$sql = "insert into alunos (id_escolar, id_aluno, nome_aluno, data_nascto_aluno, login_aluno, senha_aluno) 
				values ('$id_escolar', '$id_aluno', '$nome_aluno', '$datanasc', '$user', '$senha')";

		$result = $conn->query($sql); 
		if ($result) {
			echo "Dados enviados";
		}else{
			echo "Falha ao enviar os dados Error ". mysqli_connect_error();
		}

	}else{
		echo "Erro ao passar os dados";
	}
?>