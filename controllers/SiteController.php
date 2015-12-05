<?php

class SiteController {
    public function actionIndex(){
        # getCategories
        $categories = array();
        $categories = Category::getCategory();

        # get latest products
        $latestProduct = array();
        $latestProduct = Product::getLatestProduct(9);
        $sliderProducts = Product::getRecommendedProducts(6);
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

} 