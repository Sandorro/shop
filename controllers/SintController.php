<?php

class SintController
{
    public function actionShow(){

        $sortirovka = Product::classificationSint();
        require_once (ROOT.'/view/sints.php');
        return true;
    }
}