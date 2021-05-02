<?php
require_once './src/app/controllers/base.php';

class HomeController extends BaseController {

    public static function index($name) {
        parent::render('html', 'index', $name);
    }
}