<?php

namespace controllers;

use Model\Category;
use Model\Product;

include(ROOT . '/model/Category.php');
include(ROOT . '/model/Product.php');

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
    }
} 