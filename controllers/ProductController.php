<?php

namespace controllers;

use models\Category;
use models\Product;

include(ROOT . '/models/Category.php');
include(ROOT . '/models/Product.php');

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