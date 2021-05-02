<?php

class View {
    private $data = array();

    private $render = FALSE;

    public function __construct($folder, $template) {
        try {
            $file = './src/app/views/templates/' . strtolower($folder) . '/' . strtolower($template) . '.php';

            if (file_exists($file)) {
                $this->render = $file;
            } else {
                echo 'Template ' . $template . ' not found!';
            }
        }
        catch (Exception $e) {
            echo $e->errorMessage();
        }
    }

    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }

    public function __destruct()
    {
        extract($this->data);
        include($this->render);

    }
}