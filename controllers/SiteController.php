<?php

class SiteController
{
public function actionIndex(){
//    $_SESSION['cart'] = [];
    $arr = Product::getProductList();
    $catList = Product::getCategories();


//    var_dump($catList);
//    die;
    require_once (ROOT.'/view/mainPage.php');
    return true;
}
}