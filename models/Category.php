<?php

class Category {
    public static function getCategory(){
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query("SELECT id, name FROM category ORDER BY sort_order ASC");
        $i = 0;
        while($row = $result->fetch(\PDO::FETCH_ASSOC)){
            $categoryList[$i]['id']   = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }

    /**
     * Get all category
     * @return array
     */
    public static function getCategoriesListAdmin(){
        $categoriesList = array();

        $db = Db::getConnection();
        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

        $i = 0;
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $categoriesList[$i]['id']         = $row['id'];
            $categoriesList[$i]['name']       = $row['name'];
            $categoriesList[$i]['sort_order'] = $row['sort_order'];
            $categoriesList[$i]['status']     = $row['status'];
            $i++;
        }

        return $categoriesList;

    }
}