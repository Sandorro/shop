<?php

class CartController
{
    //Показать корзину
public function actionIndex(){
//     session_create_id(prefix: "cart");
//     echo '<pre>';
    var_dump($_SESSION);
//    echo '<pre>';
    require_once (ROOT.'/view/cart.php');
    return true;
}


public function actionSchAjax($id){

    $sch = 0;
    foreach ($_SESSION['cart'] as $p){
        $sch += $p['dubler'];
    }
    echo($sch);
    return $sch;
}

//Посчитать суммарную стоимость товаров в корзине
public function actionPrice(){
    $pr = 0;
    foreach($_SESSION['cart'] as $p) {
        $pr += ($p['price']*$p['dubler']);
    }
    echo $pr;
    return $pr;
}

//Удаление товара из корзины ajax-запросом
public function actionDeleteAjax($id){
    $schet = [];

    foreach ($_SESSION['cart'] as $product) {
        if ($product['kolvo'] != 1) {
            array_push($schet, $product['id']);
        }
    }


    foreach ($_SESSION['cart'] as $key => &$product) {

        if ($product['kolvo'] == $id){
            if ($product['dubler'] != 1){
                $product['dubler'] = $product['dubler'] - 1;
            }
            else {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
    return false;

//    unset($_SESSION['cart'][$id]);
//    return false;
}

//Добавление товара в корзину ajax-запросом
public function actionAddAjax($tabl, $id){
//    var_dump($tabl, $id);
//    die;
    if (isset($_SESSION['cart'])==false) {
        $_SESSION['cart'] = [];
    }
    $arr = Product::getProductList();
    $product = Product::getProductById($tabl, $id);
    $product['categ'] = $tabl;
    $product['dubler'] = 1;
//    var_dump($tabl);

    $schet = count($_SESSION['cart']);
    $product['kolvo'] = $schet+1;
    $a = 0;
    foreach ($_SESSION['cart'] as &$p) {
        if (($p['id'] == $id) and ($p['categ'] == $tabl))
        {
            $p['dubler']++;
            $a = $a + 1;
        }
    }
    if ($a == 0){
    $_SESSION['cart'][] = $product;
    }
//    require_once (ROOT.'/view/car.php');

    return true;
}

    public function actionPpp($tabl, $id){
//    var_dump($_SESSION);
        echo $tabl;
//        echo " ";
    echo $id;
        return true;
}
}