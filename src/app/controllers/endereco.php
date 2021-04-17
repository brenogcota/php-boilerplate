<?php
require_once "./src/app/models/EnderecoModel.php";
require_once "./src/app/validators/EnderecoValidator.php";

class EnderecoController {
    private $endereco;

    public static function create($req) {
        EnderecoValidator::validateAll($req);

        $endereco = new EnderecoModel();

        $logradouro = $req['logradouro'];
        $numero = $req['numero'];
        $complemento = $req['complemento'];
        $bairro = $req['bairro'];
        $cidade = $req['cidade'];
        $login = 1;

        $endereco->create($logradouro, $numero, $complemento, $bairro, $cidade, $login);
    }

    
}
