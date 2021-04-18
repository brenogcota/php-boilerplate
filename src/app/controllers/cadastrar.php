<?php
session_start();
require_once "./src/app/models/UsuarioModel.php";
require_once "./src/app/controllers/base.php";


class UsuarioController extends BaseController{
	private $usuario;

	public static function createLogin(){
		header("Location: ./src/app/views/templates/auth/login.php");
	}

	public static function createRegister(){
		header("Location: ./src/app/views/templates/auth/cadastro.php");
	}

	public static function register($requisicao){


		$usuario = new UsuarioModel();

		$nome = $requisicao['nome'];
		$login = $requisicao['login'];
		$senha = $requisicao[md5('senha')];
		$telefone = $requisicao['telefone'];

		$usuario->register($nome, $login, $senha, $telefone);

	}

	public static function logar($reqlogar){

		$usuario = new UsuarioModel();

		$login = $reqLogar['login'];
		$senha = $reqLogar[md5('senha')];

		if (empty(['login']) || empty([md5('senha')])){
    		header('Location: /login');
    		exit();
		}

		$usuario->login($login, $senha);

	}

	public function logout(){
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }
}



/*if (empty($_POST['nome']) || empty($_POST['login']) || empty($_POST['telefone']) || empty($_POST['senha'])) {
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
exit();*/
?>