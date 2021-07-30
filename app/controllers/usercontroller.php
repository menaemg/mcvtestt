<?php


namespace MVC\controllers;

use MVC\core\session;
use MVC\models\user as user;
use Rakit\Validation\Validator;
use MVC\core\controller;

class usercontroller extends controller
{
    public function __construct()
    {
        session::start();
        $userData = session::get('user');
        if (empty($userData)){
            echo 'please login first';exit;
        }
    }

    public function index()
    {
        print_r($_SESSION['user']);
    }
}