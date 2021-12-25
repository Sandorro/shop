<?php

class GuitarController
{
public function actionShowguitar(){

    $sortirovka = Product::classificationGuitar();
    require_once (ROOT.'/view/guitars.php');
    return true;
}
}