<?php

class Cart {
    public static function addAjax($id){
        $id = intval($id);

        $productsInCart = array();

        # if isset products in card, add to $productsInCard
        if($_SESSION['products']){
            $productsInCart = $_SESSION['products'];
        }
        # check if array key(products) isset in card
        if(array_key_exists($id, $productsInCart)){
            $productsInCart[$id]++;
        }else{
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        # return quantity of products
        return self::countItems();


    }

    public static function countItems(){
        if(isset($_SESSION['products'])){
            $count = 0;

            # count quantity of products
            foreach($_SESSION['products'] as $id => $quantity){
                $count = $count + $quantity;
            }

            return $count;
        }else{

            # default value
            return 0;
        }
    }

    public static function getProducts(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }

        return false;
    }

    public static function getTotalPrice($products)
    {
        # get array with id's and quantity
        $productsInCart = self::getProducts();
        # count total price
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                # price * quantity
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }
} 