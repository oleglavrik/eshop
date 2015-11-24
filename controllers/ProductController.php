<?php

namespace controllers;

use Model\Category;
use Model\Product;

include(ROOT . '/model/Category.php');
include(ROOT . '/model/Product.php');

class ProductController {
    public function actionView($id){
        $id = intval($id);

        $categories = array();
        $categories = Category::getCategory();

        $product = Product::getProductById($id);

        require_once(ROOT . '/views/product/view.php');
        return true;
    }
} 