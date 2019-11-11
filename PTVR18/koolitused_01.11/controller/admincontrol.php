<?php 


include_once 'controller/sql.php';
include_once 'view/adminView.php';

class AdminControl
{ 

public static function adminMenu() 
{
	
	AdminView::viewMenu();
	
}

public static function adminCat()
{
	$arr=KoolitusedMySQL::getAllCategorias();
	AdminView::viewAllCat($arr);
}

public static function deleteCat($id)
{
	KoolitusedMySQL::deleteCategoriabyID($id);
	header ('Location: index.php?adminid=Category'); 
}

public static function insertCat($nimetus,$kirjeldus)
{
	$cat=new Categoria(1,$nimetus,$kirjeldus);
	KoolitusedMySQL::InsertCategory($cat);
	header ('Location: index.php?adminid=Category&do=insert'); 
}

public static function updateFormCat($id)
{
	$cat=KoolitusedMySQL::getCategoriaById($id);
	AdminView::viewUpdateCatForm($cat);
}

public static function updateCat($id,$nimetus,$kirjeldus)
{
	$cat=new Categoria($id,$nimetus,$kirjeldus);
	$cat=KoolitusedMySQL::UpdateCategory($cat);
	header ('Location: index.php?adminid=Category'); 
}

public static function adminCourses()
{
	$arr=KoolitusedMySQL::getAllCourses();
	AdminView::viewAllCourses($arr);
}

}



?>


