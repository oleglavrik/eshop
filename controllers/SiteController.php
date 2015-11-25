<?php

namespace controllers;

use models\Category;
use models\Product;

include(ROOT . '/models/Category.php');
include(ROOT . '/models/Product.php');

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