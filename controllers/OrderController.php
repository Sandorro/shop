<?php

class OrderController
{
public function actionView(){

    Order::saveOrder($_SESSION);
    require_once (ROOT.'/view/order.php');
    return true;
}


}