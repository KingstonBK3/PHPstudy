<?php
class Controller
{
    public static function StartSite(){
        $array=Category::getCategory();
        include_once 'view/start.php';
    }
    public static function AllCategory(){
        $arr = Category::getCategory();
        include_once 'view/start.php';
    }
    public static function error404(){
        include_once 'view/error404.php';
    }
}