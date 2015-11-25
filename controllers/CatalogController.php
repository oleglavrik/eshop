<?php

namespace controllers;


use models\Category;
use models\Product;

include(ROOT . '/models/Category.php');
include(ROOT . '/models/Product.php');

class CatalogController {
    public function actionIndex(){
        # getCategories
        $categories = array();
        $categories = Category::getCategory();

        # get latest products
        $latestProduct = array();
        $latestProduct = Product::getLatestProduct(10);
        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId){
        # getCategories
        $categories = array();
        $categories = Category::getCategory();

        #get category by id
        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId);

        require_once(ROOT . '/views/catalog/catalog.php');

        return true;
    }
} 