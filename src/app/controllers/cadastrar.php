<?php
require_once "./src/app/models/UsuarioModel.php";
require_once "./src/app/controllers/base.php";


class UsuarioController extends BaseController{

	public static function register($requisicao){

		$usuario = new UsuarioModel();

		$nome = $requisicao['nome'];
		$login = $requisicao['login'];
		$telefone = $requisicao['telefone'];
		$senha = $requisicao[('senha')];

		$usuario->register($nome, $login, $senha, $telefone);

	}

	public static function logar($reqLogar){

		$usuario = new UsuarioModel();

		$login = $reqLogar['login'];
		$senha = $reqLogar[('senha')];

		if (empty(['login']) || empty([('senha')])){
    		header('Location: /login');
    		exit();
		}

		$usuario->login($login, $senha);

	}

	public static function logout(){
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }

	public static function createLogin(){
		header("Location: /src/app/views/templates/auth/login.php");
	}

	public static function createRegister(){
		header("Location: /src/app/views/templates/auth/cadastro.php");
	}

}


?>