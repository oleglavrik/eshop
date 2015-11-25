<?php

namespace models;

use components\Db;

class Product {
    const SHOW_BY_DEFAULT = 10;

    public static function getLatestProduct($count = self::SHOW_BY_DEFAULT){
        $count = intval($count);
        $db = Db::getConnection();

        $productList = array();

        $query = $db->query('SELECT id, name, image, price, image, is_new FROM product '
        . 'WHERE status = "1"'
        . 'ORDER BY id DESC '
        . 'LIMIT ' . $count);


        $i = 0;
        while ($row = $query->fetch(\PDO::FETCH_ASSOC)){
            $productList[$i]['id']     = $row['id'];
            $productList[$i]['name']   = $row['name'];
            $productList[$i]['price']  = $row['price'];
            $productList[$i]['image']  = $row['image'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productList;

    }

    public static function getProductsListByCategory($categoryId = false){
        $db = Db::getConnection();
        $products = array();

        $result = $db->query("SELECT id, name, price, image, is_new FROM product "
        . "WHERE status = '1' AND category_id = '$categoryId' "
        . "ORDER BY id DESC "
        . "LIMIT " . self::SHOW_BY_DEFAULT);

        $i = 0;
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $products[$i]['id']     = $row['id'];
            $products[$i]['name']   = $row['name'];
            $products[$i]['price']  = $row['price'];
            $products[$i]['image']  = $row['image'];
            $products[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $products;

    }

    public static function getProductById($id){
        $id = intval($id);

        if($id){
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id = ' . $id);

            return $result->fetch(\PDO::FETCH_ASSOC);
        }
    }
} 