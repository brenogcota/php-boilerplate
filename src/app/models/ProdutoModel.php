<?php
require_once "./src/app/models/Model.php"; 

class ProdutoModel extends Model {

/*
    public function index() {
        $query = "SELECT * FROM produto";

        if($result = $this->con->query($query)){
            if($result->num_rows > 0) {
                $produtos = mysqli_fetch_all($result,MYSQLI_ASSOC);
                return $produtos;
            }
        }
        

        $this->con->close();
    }
*/
    public function getByCategory($idCat) {
        $query = "SELECT * from produto where id_categoria = $idCat";

        if($result = $this->con->query($query)){
            if($result->num_rows > 0) {
                $produtos = mysqli_fetch_all($result,MYSQLI_ASSOC);
                return $produtos;
            }
        }
        

        $this->con->close();
    }
}