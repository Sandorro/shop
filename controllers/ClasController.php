<?php

class clasController
{
    public function actionShow($tabl)
    {
        $sortirovka = Product::classification($tabl);
        require_once(ROOT . '/view/guitars.php');
        return true;
    }
}