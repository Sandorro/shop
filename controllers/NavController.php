<?php

class NavController
{
public function actionIndex(){
    $arr = Product::getProductList();
    require_once (ROOT. '/view/mainPage.php');
    return true;
}
}

