<?php


namespace MVC\core;


class helpers
{
    public static function redirect($path){
        header('Location: http://mvc.test' . $path);
    }
}