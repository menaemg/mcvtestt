<?php


namespace MVC\models;


use Dcblogdev\PdoWrapper\Database as Database;

class model
{
    public static function db(){
        // make a connection to mysql here
        $options = [
            //required
            'username' => DB_USERNAME,
            'database' => DB_NAME,
            //optional
            'password' => DB_PASSWORD,
            'type' => DB_TYPE,
            'charset' => 'utf8',
            'host' => DB_HOST,
            'port' => DB_PORT
        ];

        try {
            return $db = new Database($options);
        } catch (\Exception $e) {
        }
    }
}