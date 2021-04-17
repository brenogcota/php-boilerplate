<?php
require_once "./src/app/models/Model.php";
require_once "./src/app/models/UsuarioModel.php";

class EnderecoModel extends Model {
    private $user;

    function __construct() {
        parent::__construct();
        $this->user = new UsuarioModel();
    }

    public function create($logradouro, $numero, $complemento, $bairro, $cidade, $id) {
        $user = $this->user->getById($id);
        $userId = $user['id_usuario'];

        $sql = "INSERT INTO endereco(logradouro, numero, complemento, bairro, cidade, id_usuario) VALUES ('$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$userId')";
        
        $result = $this->con->query($sql) or die (mysqli_error($this->con));
        if($result){
            echo 'show';
        } else {
            echo '', $result->error;
        }

        $this->con->close();
    }
}