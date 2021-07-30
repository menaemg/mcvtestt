<?php

namespace MVC\core;

class app
{
    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    public function index(){
        echo 'mohamed';
    }

    protected function url(){
        $url = explode('/' , trim($_SERVER['REQUEST_URI'] , '/') , 3);

        $this->controller = isset($url[0]) && $url[0] != '' ? $url[0] . 'controller' : 'homecontroller';

        $this->method = isset($url[1]) && $url[1] != '' ? $url[1] : 'index';

        $this->params = isset($url[2]) && $url[2] != '' ? explode('/', $url[2] ) : [];

    }

    protected function render(){
        $controller = 'MVC\controllers\\' . $this->controller;


        if (class_exists($controller)){

            $cont = new $controller;

            if (method_exists($cont , $this->method)){

                call_user_func_array([$cont , $this->method], $this->params);

            } else {

                echo 'method not found';

            }
        
        } else {
            
            echo 'class not found';

        }
    }

}