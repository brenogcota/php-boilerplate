<?php
session_start();
require_once "./src/app/models/EnderecoModel.php";
require_once "./src/app/validators/EnderecoValidator.php";

class EnderecoController {

    public static function create() {
        header("Location: /src/app/views/templates/html/endereco.php");
    }

    public static function store($req) {
        EnderecoValidator::validateAll($req);

        $endereco = new EnderecoModel();

        $logradouro = $req['logradouro'];
        $numero = $req['numero'];
        $complemento = $req['complemento'];
        $bairro = $req['bairro'];
        $cidade = $req['cidade'];

        $endereco->create($logradouro, $numero, $complemento, $bairro, $cidade);
    }

    
}
