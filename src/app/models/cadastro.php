<?php
include("../models/conexao.php");

class Cadastro {

    public function create($nome, $login, $senha, $telefone) {
        $sql = "INSERT INTO usuario(nome, login, senha, telefone, data_cadastro) VALUES ('$nome', '$login', '$senha', '$telefone', NOW())";

        if($conexao->query($sql) === TRUE){
            $_SESSION['status_cadastro'] = true;
        }

    }

    public function show($login) {
        $query = "select count(*) as total from usuario where login = '$login'";
        $result = mysqli_query($conexao, $query);
        $row = mysqli_fetch_assoc($result);

        if($row['total'] == 1){
            $_SESSION['usuario_existe'] = true;
            header('Location: ../views/templates/auth/cadastro.php');
            exit();
        }

    }
}