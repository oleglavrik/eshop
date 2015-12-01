<?php

class CartController {

    public function actionIndex(){
        $categories = array();
        $categories = Category::getCategory();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();

        if($productsInCart){
            $prductsIDs = array_keys($productsInCart);
            $products = Product::getProductsByIds($prductsIDs);

            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    public function actionAddAjax($id){
        echo Cart::addAjax($id);
        return true;
    }
} 