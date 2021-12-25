<?php

// FRONT CONTROLLER

// Общие настройки

session_start();


ini_set('display_errors',1);
error_reporting(E_ALL);



// Подключение файлов системы
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/models/Product.php');
require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/models/User.php');
require_once(ROOT.'/models/Order.php');

// Вызов Router
$router = new Router();
$router->run();

