<?php
require_once "./src/config/connection.php";

class Sql {
    private $host;
    private $user;
    private $pass;
    private $db;

    function __construct() {
        $this->host = HOST;
        $this->user = USUARIO;
        $this->pass = SENHA;
        $this->db = DB;
    }

    public function connect() {
        $conexao = mysqli_connect($this->host, $this->user, $this->pass, $this->db) or die ("Não foi possível conectar!");
        return $conexao;
    }
}



?>