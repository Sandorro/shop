<?php

class User
{
    public static function saveUser($user){

        $db = Db::getConnection();
        $sql = 'INSERT INTO users (login, password)'
            . 'VALUES (:login, :password)';

        $result = $db->prepare($sql);
        $result->bindParam('login', $user['login'], PDO::PARAM_STR);
        $result->bindParam('password', $user['password'], PDO::PARAM_STR);
        return $result->execute();
    }

    public static function getUserById($login, $password){
        $db = Db::getConnection();
        $sql = 'SELECT * FROM users WHERE login = :login AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam('login', $login, PDO::PARAM_STR);
        $result->bindParam('password', $password, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function checkUser(){
        if (isset($_SESSION['user'])){
            return true;
        }
        return false;
    }

    public static function newLogin($oldlogin, $newlogin){
        $db = Db::getConnection();
        $sql = 'UPDATE users SET login = :newlogin WHERE login = :oldlogin; UPDATE orders SET user = :newlogin WHERE user = :oldlogin';
        $result = $db->prepare($sql);
        $result->bindParam('oldlogin', $oldlogin, PDO::PARAM_STR);
        $result->bindParam('newlogin', $newlogin, PDO::PARAM_STR);
        $_SESSION['user']['login'] = $newlogin;
        return $result->execute();
    }

    public static function newPassword($login, $password){
        $db = Db::getConnection();
        $sql = 'UPDATE users SET password = :password WHERE login = :login;';
        $result = $db->prepare($sql);
        $result->bindParam('login', $login, PDO::PARAM_STR);
        $result->bindParam('password', $password, PDO::PARAM_STR);
        $_SESSION['user']['password'] = $password;
        return $result->execute();
    }
}