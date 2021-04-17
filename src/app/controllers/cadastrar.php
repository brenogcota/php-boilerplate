<?php
session_start();
require_once "./src/app/models/conexao.php";

if (empty($_POST['nome']) || empty($_POST['login']) || empty($_POST['telefone']) || empty($_POST['senha'])) {
	header('Location: /cadastro');
    exit();
}

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$login = mysqli_real_escape_string($conexao, trim($_POST['login']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$query = "select count(*) as total from usuario where login = '$login'";
$result = mysqli_query($conexao, $query);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: /cadastro');
	exit();
}

$sql = "INSERT INTO usuario(nome, login, senha, telefone, data_cadastro) VALUES ('$nome', '$login', '$senha', '$telefone', NOW())";

if($conexao->query($sql) === TRUE){
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /cadastro');
exit();
?>