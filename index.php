<?php
    # errors on
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    # session start
    session_start();

    # include Router
    define('ROOT', dirname(__FILE__));
    require_once(ROOT . '/components/Autoload.php');
    # start
    $router = new Router();
    $router->run();

    // todo add .gitignore

    // edit some bug in catalog when who's add 1 product
