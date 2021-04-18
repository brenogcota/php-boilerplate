<?php
include('./src/app/routes/Router.php');
include('./src/app/controllers/endereco.php');
include('./src/app/controllers/produto.php');

Route::add('/',function(){
    echo 'Welcome :-)';
});

// GET routes
Route::add('/login', function(){
    header("Location: /src/app/views/templates/auth/login.php");
}, 'get');

Route::add('/cadastro', function(){
    header("Location: /src/app/views/templates/auth/cadastro.php");
}, 'get');

Route::add('/logout', function(){
    header("Location: /src/app/controllers/logout.php");
}, 'get');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::create();
}, 'get');

Route::add('/produtos', function(){
    ProdutoController::index();
}, 'get');

// POST routes
Route::add('/test', function(){
    return $_POST['id'];
}, 'post');

Route::add('/signin', function(){
    header("Location: /src/app/controllers/login.php");
}, 'post');

Route::add('/signup', function(){
    header("Location: /src/app/controllers/cadastrar.php");
}, 'post');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::store($_POST);
}, 'post');


Route::run('/');