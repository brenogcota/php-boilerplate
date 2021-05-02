<?php
include('./src/app/routes/Routes.php');


Route::add('/', function(){
    echo 'Welcome :-)';
});

Route::run('/');
