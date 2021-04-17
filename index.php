<?php
include('./src/app/routes/Router.php');
include('./src/app/controllers/endereco.php');

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

Route::add('/cadastrar/endereco', function(){
    header("Location: /src/app/views/templates/html/endereco.php");
}, 'get');

// POST routes
Route::add('/signin', function(){
    header("Location: /src/app/controllers/login.php");
}, 'post');

Route::add('/signup', function(){
    header("Location: /src/app/controllers/cadastrar.php");
}, 'post');

Route::add('/endereco/cadastrar', function(){
    EnderecoController::create($_POST);
}, 'post');


Route::run('/');