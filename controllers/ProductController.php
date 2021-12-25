<?php

class ProductController
{
    public function actionShowAllProducts(){

        $productList = Product::getProductList();
        require_once (ROOT.'/view/productList.php');
        return true;
    }
    public function actionShowAllProductsOver(){
        $arr = Product::getProductOverPrice($_POST['dor']);
        require_once (ROOT.'/view/doroge.php');
        return true;
    }

    public function actionShowAllProductsLess(){
        $arr = Product::getProductLessPrice($_POST['desh']);
        require_once (ROOT.'/view/deshevle.php');
        return true;
    }

//    public function actionProductDeleteById($id){
//        $productList = productDelete($id);
//     //   require_once (ROOT.'/view/productList.php');
//        return true;
//    }

}