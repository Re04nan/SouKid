<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sou Kid | Tabela Consulta</title>
    <link rel="icon" href="../soukidicon.png" type="image/png" sizes="16x16">
    <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href=".././css/homepage.css">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap');

    .consulta-user {
        background-color: #a749ff;
    }

    .my-custom-scrollbar {
        position: relative;
        height: 600px;
        overflow: auto;
    }

    .table-wrapper-scroll-y {
        display: block;
        margin-top: 150px;
        background-color: white;
        border-radius: 10px;
    }

    .table-wrapper-scroll-y form {
        margin: 20px;
    }

    .table-wrapper-scroll-y img {
        width: 30px;
    }

    input[type=submit] {
        font-size: 13px;
    }

    input[type=text] {
        width: 188px;
        height: 25px;
        font: 500 18px Roboto, sans-serif;
    }

    /* webkit solution */
    ::-webkit-input-placeholder {
        font-family: FontAwesome;
        text-align: left;
    }
    #cadAluno a{
        text-decoration: none;
        text-align: right;
        padding-left: 50vw;
        color: #6215D8;    
        font: 600 20px Roboto, sans-serif;
    }

    /* mozilla solution */
    input:-moz-placeholder {
        font-family: FontAwesome;
        text-align: right;
    }

    </style>
</head>

<?php
	include_once "conexao.php";

	$sql = "select * from alunos order by id_aluno desc";
	$result = $conn->query($sql);
?>
<!-- Criação da tabela de busca -->
<?php
if ($result && $result->num_rows != 0) {
?>

<body class="consulta-user">
    <?php
            require_once('menuInterno.html');
        ?>
    <div class="container table-wrapper-scroll-y my-custom-scrollbar">
        <form action="#" method="POST">
            <input type="text" name="busca" placeholder="Procurar &#xF002;" value="" tabindex="1" autocomplete="off">
            <input type="submit" value="Buscar">
            <label id="cadAluno"><a href="insert_cadastro.php">Cadastrar Aluno</a></label>
        </form>

        <!-- Cabeçalho da tabela -->
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>Identificação do Aluno</th>
                    <th>Nome do Aluno</th>
                    <th>Data de Nascimento</th>
                    <th>Identificação Escola</th>
                    <th>Usuário</th>
                </tr>
            </thead>
            <tbody>

                <?php
/* Função para criação do conteudo da tabela */
	function connectMysqlBd($res){
		while ($row_user = mysqli_fetch_assoc($res)){
		?>
                <tr>
                    <td><?php echo $row_user['id_aluno']; ?></td>
                    <td><?php echo $row_user['nome_aluno']; ?></td>
                    <td><?php echo $row_user['data_nascto_aluno']; ?></td>
                    <td><?php echo $row_user['id_escolar']; ?></td>
                    <td><?php echo $row_user['login_aluno']; ?></td>
                </tr>

                <?php
		}//While
	}//function

/* if para trabalhar com campo de busca */
	if (isset($_POST['busca'])) {
		$buscar = $_POST['busca'];
		$sql_pesquisa_nome = "select * from alunos where nome_aluno like '%$buscar%'";
		$result_pesquisa_nome = $conn->query($sql_pesquisa_nome); //Busca por nome do aluno
		//Chamando a função para retornar dados do campo de busca 
		connectMysqlBd($result_pesquisa_nome);
	}
	else{
		connectMysqlBd($result);//Se o campo de busca estiver vazio ele retorna a tabela padrão 
	}

}else{
	echo "Nenhum dado foi encontrado";//else do primeiro if 
}

?>

            </tbody>
        </table>
    </div>
</body>

</html>