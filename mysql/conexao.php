<?php
	//Conexão com banco de dados
	include_once "tabela.php";

	$userhost = "localhost";
	$username = "root";
	$password = "";
	$database = "soukid";
	$conn = mysqli_connect($userhost, $username, $password, $database);

	if (!$conn) {
		die("Erro ao conectar com banco Error ". mysqli_connect_error());
	}
?>
