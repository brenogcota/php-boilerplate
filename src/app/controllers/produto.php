<?php
require_once "./src/app/models/ProdutoModel.php";

class ProdutoController {

    public static function index() {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->index();
        foreach($produtos as $produto) {
            echo $produto['nome'].'<br/>';
        }
    }
    
}

