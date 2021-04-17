<?php
require_once "./src/app/models/Sql.php";

class Model {
    protected $Sql;
    protected $con;

    function __construct() {
        $this->Sql = new Sql();
        $this->con = $this->Sql->connect();
    }
}