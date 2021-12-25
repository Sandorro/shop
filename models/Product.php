<?php

class Product
{
    public static function getProductById($tabl, $id){
        $db = Db::getConnection();


//        $result = $db->prepare ('SELECT * FROM products WHERE id = :id');
//        $result ->bindParam('id', $id, PDO::PARAM_INT);
//
//        $result->setFetchMode(PDO::FETCH_ASSOC);
//        $result->execute();
//        $product = $result->fetch();
//
//        $kolichestvo = array("kolvo" => "1");
//        $dubl = array("dubler" => "1");
//        $product = array_merge($product, $kolichestvo);
//        $product = array_merge($product, $dubl);
//        $product['category'] = intval($product['category']);
//        $product['kolvo'] = intval($product['kolvo']);
//        $product['dubler'] = intval($product['dubler']);
//        $product['id'] = intval($product['id']);
//
//        $result = $db->prepare ('SELECT cat FROM categories WHERE id = :num');
//        $result ->bindParam('num', $product['category'], PDO::PARAM_INT);
//        $result->setFetchMode(PDO::FETCH_ASSOC);
//        $result->execute();
//        $categ = $result->fetch();
//
//
//        $product['category'] = $categ['cat'];

        if ($tabl=='guitars') {
            $sql = 'SELECT * FROM guitars WHERE id = :id';
        }
        else {
            $sql = 'SELECT * FROM sints WHERE id = :id';
        }


//        $i = 0;
//        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//            $product[$i] = $row;
//            $i++;
//        }
        $result = $db->prepare($sql);
//        $result->bindParam('tabl', $tabl, PDO::PARAM_STR);
        $result->bindParam('id', $id, PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

//       echo $product[0]['header'];
//        $product[0]['categ'] = $tabl;
//        return $product;

//        $sql = 'SELECT * FROM :tabl WHERE id = :id';
//        $result = $db->prepare($sql);
//        $result->bindParam('tabl', $tabl, PDO::PARAM_STR);
//        $result->bindParam('id', $id, PDO::PARAM_STR);
//        $result->setFetchMode(PDO::FETCH_ASSOC);
//        $product = array();
//        $i = 0;
//        foreach ($result as $row) {
//            $product[$i] = $row[$i];
//            $i = $i + 1;
//        }
////        $result->execute();
////        $result->fetch();
////        $product = array();
////        $product = $result;
//        return $product;
//    }



    public static function getProductList(){

   $db = Db::getConnection();


    $result = $db->query("SELECT * FROM categories");
    $tabl = array();
    $i = 0;
    while ($row = $result->fetch()) {
        $tabl[$i] = $row['tabl'];
        $i++;
    }
    $p = array();
    $i = 0;
    for ($a=0; $a<count($tabl); $a++) {
        $result = $db->query("SELECT * FROM {$tabl[$a]}");
//        $r = array();
        while ($row = $result->fetch()) {

//            $p[$i-1]['categ'] = $t;
//            $p = array_merge($p, array('categ'=>$t));
            $p[$i] = $row;
//            $p[$i]['id'] = $row['id'];
//            $p[$i]['header'] = $row['header'];
//            $p[$i]['price'] = $row['price'];
//            $p[$i]['image'] = $row['image'];
            $p[$i]['categ'] = $tabl[$a];
            $i++;
        }


    }

    shuffle($p);
//        var_dump($p[1]);
    return $p;


}
    public static function getProductOverPrice($price){
    $db = Db::getConnection();


    $result = $db->query("SELECT * FROM products  WHERE price>$price");
    $productList = array();
    $i = 0;
    while ($row = $result->fetch()) {
        $productList[$i]['id'] = $row['id'];
        $productList[$i]['header'] = $row['header'];
        $productList[$i]['price'] = $row['price'];
        $productList[$i]['image'] = $row['image'];
        $i++;
    }
    return $productList;

}
    public static function getProductLessPrice($price){
        $db = Db::getConnection();


        $result = $db->query("SELECT * FROM products  WHERE price<$price");
        $productList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['header'] = $row['header'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productList;

    }


    public static function getCategories(){
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM categories");
        $catList = array();
        $i = 1;
        while ($row = $result->fetch()) {
            $catList[$i]['id'] = intval($row['id']);
            $catList[$i]['tabl'] = $row['tabl'];
            $catList[$i]['cat'] = $row['cat'];
            $i++;
        }
        return $catList;
    }

    public static function classification($tabl){
        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM {$tabl}");
        $sortirovka = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $sortirovka[$i]['id'] = $row['id'];
            $sortirovka[$i]['header'] = $row['header'];
            $sortirovka[$i]['price'] = $row['price'];
            $sortirovka[$i]['image'] = $row['image'];
            $sortirovka[$i]['categ'] = $tabl;
            $i++;
        }
        return $sortirovka;
    }
}