<?php


namespace MVC\models;

class user extends model
{
    public function getAllUser(){
        return $this::db()->run("select * FROM users")->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function userLogin($email,$password){
        return $this::db()->row("select username, email FROM users WHERE email = ? and password = ?", [$email , $password]);
    }

    public function getUserByEmail($email){
        return $this::db()->row("select username, email FROM users WHERE email = ? ", [$email]);
    }

    public function setUser($data){
        return $this::db()->insert('users', $data);
    }
}