<?php

namespace controllers;

use Model\Category;
use Model\Product;

include(ROOT . '/model/Category.php');
include(ROOT . '/model/Product.php');

class SiteController {
    public function actionIndex(){
        # getCategories
        $categories = array();
        $categories = Category::getCategory();

        # get latest products
        $latestProduct = array();
        $latestProduct = Product::getLatestProduct(9);
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

} 