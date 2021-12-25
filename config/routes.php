<?php

return array(
    'order' => 'order/view',

    'good/([a-z]+)/([0-9]+)'=>'good/show/$1/$2',
    'good/([a-z]+)' => 'clas/show/$1',

    'clas/([a-z]+)'=>'clas/show/$1',

    // Товар:
    'product/([0-9]+)/([0-9]+)' => 'product/view/$2', // actionView в ProductController
    'productList' => 'product/showAllProducts',

    //Фильтры:
    'productListOver' => 'product/showListOver',
    'productListLess' => 'product/showListLess',
//    'guitar' => 'good/showguitar',
//    'sint' => 'good/showsint',

    //Корзина:
    'cart/addAjax/([a-z]+)/([0-9]+)' => 'cart/addAjax/$1/$2',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/deleteAjax/([0-9]+)' => 'cart/deleteAjax/$1',

    'cart/ppp/([a-z]+)/([0-9]+)' => 'cart/ppp/$1/$2',

    'cart/schAjax/([0-9]+)' => 'cart/schAjax/$1',
    'cart/price' => 'cart/price',
    'cart' => 'cart/index',

    // Пользователь:
    'user/changelogin' => 'user/changelogin',
    'user/changepassword' => 'user/changepassword',
    'user/showchange' => 'user/showchange',
    'user/showchangepassword' => 'user/showchangepassword',
    'user/saveUser' => 'user/saveUser',
    'user/register' => 'user/register',
    'user/auth' => 'user/auth',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    //Кабинет:
    'cabinet' => 'cabinet/index',

    // Главная страница
     'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController

);
