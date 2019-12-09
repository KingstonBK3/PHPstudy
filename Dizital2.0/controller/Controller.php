<?php
class Controller
{
    public static function StartSite(){
        $array=Category::getAllCategory();//писок всех категорий    
        include_once 'view/start.php';
    }
    public static function AllCategory(){
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews(){
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }
    public static function NewsBCatyID(){
        $arr=News::getNewsByCatID();
        include_once 'view/catnews.php';
    }
    public static function NewsByID($id){
        $n=News::getNewsByID();
        include_once 'views/readnews.php';
    }
    public static function error404(){
        include_once 'view/error404.php';
    }
}