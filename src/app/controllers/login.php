<?php
/*session_start();
require_once "./src/app/models/UsuarioModel.php";

if (empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: /login');
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
	header('Location: /painel');
	exit();
} else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: /login');
	exit();
}

*/
?>