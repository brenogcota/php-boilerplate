<?php 
require_once "./src/app/helpers/view.php";

class BaseController {

    public static function render($folder, $template, $data) {
        $view = new view($folder, $template);
        $view->assign('data', $data);
        return $view;
    }
}