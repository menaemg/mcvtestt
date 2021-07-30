<?php


namespace MVC\core;

use Dcblogdev\PdoWrapper\Database as Database;


class controller
{
    public function view($path,$param = []){
        extract($param);
        require_once( \VIEWS . $path . '.php');
    }
}