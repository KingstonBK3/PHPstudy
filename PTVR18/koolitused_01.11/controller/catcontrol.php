<?php 

include 'controller/sql.php';
include 'view/allcat.php';

class CatControl
{

public static function getCategorias() {
    $arr=KoolitusedMySQL::getAllCategorias();
	CatView::viewCategoria($arr);
}

public static function getCategoriaByID($id) {
    $cat=KoolitusedMySQL::getCategoriaById($id);
	CatView::viewCategoriaInfo($cat->displayKirjeldus());
}

public static function getCoursesByCatID($id) {
    $c=KoolitusedMySQL::getAllCoursesByCatId($id);
	CatView::viewCategoriaCourses($c);
}
}
?>


