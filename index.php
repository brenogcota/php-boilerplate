<?php
include('./src/app/routes/Router.php');
include('./src/app/controllers/endereco.php');
include('./src/app/controllers/produto.php');
include('./src/app/controllers/cadastrar.php');

Route::add('/', function(){
    echo 'Welcome :-)';
});

// GET routes
Route::add('/index', function(){
    header("Location: /src/app/views/templates/html/painel.php");
}, 'get');
Route::add('/login', function(){
    header("Location: /src/app/views/templates/auth/login.php");
}, 'get');

Route::add('/cadastro', function(){
    header("Location: /src/app/views/templates/auth/cadastro.php");
}, 'get');

Route::add('/endereco', function(){
    header("Location: /src/app/views/templates/html/endereco.php");
}, 'get');

Route::add('/logout', function(){
    UsuarioController::logout();
}, 'get');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::create();
}, 'get');
/*
Route::add('/produtos', function(){
    ProdutoController::index();
}, 'get');
*/
Route::add('/produto/categoria/([0-9]*)', function($param){
    ProdutoController::getByCategory($param);  //////TESTE
}, 'get');

// POST routes
Route::add('/test', function(){
    $data = json_encode(file_get_contents('php://input'), true);
    ProdutoController::store($data);
}, 'post');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::store($_POST);
}, 'post');

Route::add('/usuario/logar', function(){
    UsuarioController::createLogin();
}, 'get');

Route::add('/usuario/cadastrar', function(){
    UsuarioController::createRegister();
}, 'get');

Route::add('/usuario/cadastrar', function(){
    UsuarioController::register($_POST);
}, 'post');

Route::add('/usuario/logar', function(){
    UsuarioController::logar($_POST);
}, 'post');

Route::add('/usuario/painel', function(){
    header("Location: /src/app/views/templates/html/painel.php");
}, 'get');


Route::run('/');
