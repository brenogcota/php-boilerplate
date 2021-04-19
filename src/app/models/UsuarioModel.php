<?php
session_start();
require_once "./src/app/models/Model.php";

class UsuarioModel extends Model {


    function __construct() {
        parent::__construct();
    }


    public function register($nome, $login, $senha, $telefone){

        $query = "SELECT count(*) as total from USUARIO where login = '$login'";
        $res = $this->con->query($query);
        $rows = $res->fetch_assoc();

        if ($rows['total'] == 1) {
            $_SESSION['usuario_existe'] = true;
            header('Location: /cadastro');
            exit();
        }

        $sql = "INSERT INTO usuario(nome, login, senha, telefone, data_cadastro) VALUES ('$nome', '$login', md5('$senha'), '$telefone', NOW())";

        if($this->con->query($sql) === TRUE){
            $_SESSION['status_cadastro'] = true;
        }

        $this->con->close();
        header('Location: /cadastro');
        exit();

    }

    public function login($login, $senha){

        $loginquery = "SELECT count(*) as totallog FROM usuario WHERE login = '$login' and senha = md5('$senha')";
        $reslogin = $this->con->query($loginquery);
        $rowlogin = $reslogin->fetch_assoc();

        if($rowlogin['totallog'] == 1){
            $_SESSION['login'] = $login;
            header('Location: /usuario/painel');
            exit();
        } else{
            $_SESSION['nao_autenticado'] = true;
            header('Location: /login');
            exit();
        }

    }


    public function getById($id) {
        $userQuery = "SELECT * FROM usuario WHERE id_usuario = '$id'";

        if($result = $this->con->query($userQuery)){
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            }
        }

        $this->con->close();
    }
}