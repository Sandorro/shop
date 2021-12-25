<?php

class UserController
{
    public function actionRegister(){
        require_once (ROOT. '/view/register.php');

        return true;
    }

    public function actionSaveUser(){


        User::saveUser($_POST);
        require_once(ROOT. '/view/save.php');
        return true;
    }

    public function actionLogin(){
        require_once (ROOT. '/view/login.php');

        return true;
    }

    public function actionAuth(){

        $user = User::getUserById($_POST['login'], $_POST['password']);

    if($user){
        $_SESSION['user'] = $user;


    }
        return header('Location:/cabinet');
    }

    public function actionLogout(){
        if (isset($_SESSION)){
            session_unset();
            return header('Location:/index.php');
        }
        return header('Location:/index.php');
    }

    public function actionShowchange(){
        require_once (ROOT. '/view/changelogin.php');
        return true;
    }

    public function actionShowchangepassword(){
        require_once (ROOT. '/view/changePassword.php');
        return true;
    }

    public function actionChangelogin(){

        User::newLogin($_SESSION['user']['login'], $_POST['newlogin']);
        require_once (ROOT. '/view/cabinet.php');
        return true;
    }

    public function actionChangepassword(){

        User::newPassword($_SESSION['user']['login'], $_POST['newpassword']);
        require_once (ROOT. '/view/cabinet.php');
        return true;
    }

}