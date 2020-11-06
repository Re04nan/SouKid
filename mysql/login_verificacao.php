<?php
    session_start();
    // echo $_POST['usuario'];
    // echo $_POST['senha'];
    // echo $_POST['entrada'];

	if (strlen($_POST['usuario']) > 5 && strlen($_POST['senha']) > 6 && isset($_POST['entrada'])) {

    // Fazendo o insert de cadastro no BD
	include_once "conexao.php";
        
		$user = $_POST['usuario'];
        $senha_cripto = md5($_POST['senha']); 
        $entrada = $_POST['entrada'];

    // Execução da instrução SQL
    $verifica = $conn->query("SELECT * from alunos where login_aluno = '$user' AND senha_aluno = '$senha_cripto'");

    // $usuarios = Retorno da consulta no banco de dados
    $usuario = mysqli_fetch_assoc($verifica);
    
    // Guardar o nome do user para utilizar na página de escolha do avatar

    if ($entrada == "aluno"){
        $_SESSION['nome'] = $usuario["nome_aluno"];
        header('Location: startProfile.php');
    } else {
        header('Location: conteudo_tabela.php');
    }

	}
    else {
        echo "
            <script>
                alert('E-mail ou senha inválidos!')
                location.href = '../Login.php'
            </script>
        ";
    }
?>