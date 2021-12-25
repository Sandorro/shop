<?php

class GoodController
{
    public function actionShow($tabl, $id)
    {
//        $arr = Product::getProductList();
        $product = Product::getProductById($tabl, $id);
        var_dump($product);

        require_once(ROOT . '/view/showGood' . '.' . 'php');


        return true;

//        return header ('Location:/view/showGood' . '.' . 'php');
    }

    public function actionShowguitar()
    {

        $sortirovka = Product::classificationGuitar();
        require_once(ROOT . '/view/guitars.php');
        return true;
    }

    public function actionShowsint()
    {

        $sortirovka = Product::classificationSint();
        require_once(ROOT . '/view/sints.php');
        return true;
    }

}