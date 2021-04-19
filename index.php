<?php
include('./src/app/routes/Router.php');
include('./src/app/controllers/endereco.php');
include('./src/app/controllers/produto.php');
include('./src/app/controllers/cadastrar.php')

Route::add('/', function(){
    echo 'Welcome :-)';
});

// GET routes
/*Route::add('/login', function(){
    header("Location: /src/app/views/templates/auth/login.php");
}, 'get');

Route::add('/cadastro', function(){
    header("Location: /src/app/views/templates/auth/cadastro.php");
}, 'get');*/

Route::add('/logout', function(){
    UsuarioController::logout();
}, 'get');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::create();
}, 'get');

Route::add('/produtos', function(){
    ProdutoController::index();
}, 'get');

// POST routes
Route::add('/test', function(){
    return $_POST['pagamento'];
}, 'post');

Route::add('/signin', function(){
    UsuarioController::createLogin();
}, 'get');

Route::add('/signup', function(){
    UsuarioController::createRegister();
}, 'get');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::store($_POST);
}, 'post');

Route::add('/usuario/cadastrar', function(){
    UsuarioController::register($_POST);
}, 'post');

Route::add('/usuario/cadastrar', function(){
    UsuarioController::logar($_POST);
}, 'post');


Route::run('/');