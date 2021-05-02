<?php
include('./src/app/Utils/Router.php');
include('./src/app/controllers/Home.php');

Route::add('/', function(){
    HomeController::index('John');
});

Route::run('/');