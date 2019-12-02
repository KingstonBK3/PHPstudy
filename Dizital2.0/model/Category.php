<?php
class Category
{
    public static function getCategory(){
        $query = "SELECT * FROM category";
        $db = new Connection_DB();
        $arr = $db->getAll($query);
        return $arr;
    }
}