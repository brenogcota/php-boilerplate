<?php
require_once "./src/app/models/Model.php";

class UsuarioModel extends Model {

    function __construct() {
        parent::__construct();
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