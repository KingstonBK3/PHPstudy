<?php 


include_once 'controller/sql.php';
include_once 'view/userView.php';

class UserControl
{ 

public static function NewUser($nimi,$parol) 
{
	$user=new User(0,$nimi,$parol,"user");
	
    $r=KoolitusedMySQL::InsertUser($user);
	UserView::viewInsertResult($r);
	
}


public static function SearchUser($nimi,$parol) 
{
	$user=new User(0,$nimi,$parol,"user");
	
    $r=KoolitusedMySQL::SearchUser($user);
	UserView::DisplayUser($r);
	return $r;
}

public static function RegisterUserToCourses($idc,$idu) 
{
	$r=KoolitusedMySQL::insertRegistratsion($idc,$idu);
	echo "Registreeritud koolitusele";
}

public static function UserData($idu)
{
	$u=KoolitusedMySQL::UserById($idu);
	UserView::UserInfo($u);
}

public static function UserCourses($idu)
{
	$arr=KoolitusedMySQL::CoursesByUserId($idu);
	UserView::UserCourses($arr);
}

}
?>


