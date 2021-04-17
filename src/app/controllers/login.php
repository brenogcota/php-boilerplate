<?php
session_start();
include ("../models/conexao.php");



if (empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: ../views/templates/html/index.php');
    exit();
}

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_usuario, login from usuario 
where login = '{$login}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['login'] = $login;
	header('Location: ../views/templates/html/painel.php');
	exit();
} else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../views/templates/html/index.php');
	exit();
}


?>