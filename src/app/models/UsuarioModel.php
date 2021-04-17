<?php
require_once "./src/app/models/conexao.php";

class UsuarioModel {
    private $Sql;
    private $con;

    function __construct() {
        $this->Sql = new Sql();
        $this->con = $this->Sql->connect();
    }

    public function getById($id) {
        $userQuery = "SELECT * FROM usuario WHERE id_usuario = '$id'";

        if($result = $this->con->query($userQuery)){
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            }
        }

    }
}