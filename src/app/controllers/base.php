<?php 
require_once "./src/app/Utils/view.php";

class BaseController {

    public static function render($folder, $template, $data) {
        $view = new view($folder, $template);
        $view->assign('data', $data);
        return $view;
    }
}