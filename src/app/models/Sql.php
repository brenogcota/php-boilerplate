<?php
require_once "./src/config/connection.php";

class Sql {
    private $host;
    private $user;
    private $pass;
    private $db;

    function __construct() {
        $this->host = HOST;
        $this->user = User;
        $this->pass = Password;
        $this->db = DB;
    }

    public function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db) or die ("Connection refused");
        return $con;
    }
}
