<?php
require_once "./src/app/models/ProdutoModel.php";
require_once "./src/app/controllers/base.php";

class ProdutoController extends BaseController {

    public static function index() {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->index();

        parent::render('html', 'produtos', $produtos);
    }

    public static function store($req) {
        
    }
    
}

