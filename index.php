<?php
    # errors on
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    # include Router
    define('ROOT', dirname(__FILE__));
    require_once(ROOT . '/components/Router.php');
    require_once(ROOT . '/components/Db.php');

    $router = new \components\Router();
    $router->run();