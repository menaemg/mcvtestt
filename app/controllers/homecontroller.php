<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helpers;
use MVC\core\session;
use MVC\models\user as user;
use Rakit\Validation\Validator;

class homecontroller extends controller
{
    public function __construct()
    {
        session::start();
    }

    public function index(){

        $user = new user;

        $res = $user->getAlluser();

        var_dump($res);die;

        $this->view('/home/index', ['title' => 'index view', 'h1' => 'menaem' , 'data' => $res]);

    }

    public function login(){
        $this->view('/home/login');
    }

    public function checkLogin(){

        $validator = new Validator();
        $validation = $validator->make($_POST, [
            'email'                 => 'email',
            'password'              => 'required|min:6'
        ]);
        // then validate
        $validation->validate();

        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $user = new user();

            $userData = $user->userLogin($_POST['email'], $_POST['password']);

            if($userData){
                session::set('user', $userData);
                header('Location: http://mvc.test/user/index');
            } else {
                echo 'invalid login data';
            }
        }
    }

    public function register(){
        $this->view('/home/register');
    }

    public  function checkReg(){
        $validator = new Validator();
        $validation = $validator->make($_POST, [
            'email'                 => 'required|email',
            'password'              => 'required|min:6',
            'username'              => 'required|min:6'
        ]);
        // then validate
        $validation->validate();

        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $user = new user();

            $userData = $user->getUserByEmail($_POST['email']);

            if ($userData) {
                echo 'this email existed please login';
            } else {

                $userData = [
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                ];

                $user->setUser($userData);

                session::set('user', $userData);

                helpers::redirect('user/index');
            }
        }
    }

    public function logout(){
        session::stop();
        echo 'you logout successfully';
    }
}