<?php

class CabinetController
{
    //Показать личный кабинет
    public function actionIndex(){
        if (User::checkUser()){

            require_once (ROOT. '/view/cabinet.php');
            return true;
        }
        return header('Location:./user/login');
    }
}