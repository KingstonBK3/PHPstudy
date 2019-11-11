<?php 

include_once 'model/categoria.php';
include_once 'model/Cours.php';
include_once 'model/User.php';

class KoolitusedMySQL
{
private static $servername = "localhost";
private  static $username = "root";
private  static $password = "";
private static  $db = "koolitused";
	

public static function getAllCategorias()
{
$allcat=array();
	

// Create connection
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{
	if ($result = $conn->query("SELECT id,Nimetus,Kirjeldus FROM kategooria")) 
	{
	while ($obj = $result->fetch_object()) {
      
	   $allcat[]=new Categoria($obj->id,$obj->Nimetus, $obj->Kirjeldus);
    }

    /* free result set */
    $result->close();
	}
}
$conn->close();

return $allcat;
}

public static function getCategoriaById($id)
{

// Create connection
$conn = mysqli_connect(self::$servername, self::$username,self::$password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{
	if ($result = $conn->query("SELECT id,Nimetus,Kirjeldus FROM kategooria WHERE id=".(string)$id)) 
	{
	while ($obj = $result->fetch_object()) {
      
	   $cat=new Categoria($obj->id,$obj->Nimetus, $obj->Kirjeldus);
    }

    /* free result set */
    $result->close();
	}
}
$conn->close();

return $cat;

}

public static function getAllCoursesByCatId($id)
{
 $courses=array();
	

// Create connection
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{
	if ($result = $conn->query("SELECT * FROM kursus WHERE kategoriaId=".(string)$id)) 
	{
	while ($obj = $result->fetch_object()) {
      
	   $courses[]=new Cours($obj->id,$obj->Nimetus, $obj->Hind,$obj->kategoriaID);
    }

    /* free result set */
    $result->close();
	}
}
$conn->close();

return  $courses;
}

public static function InsertUser($user)
{
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
$result = $conn->query('Insert into kasutaja (nimi,parool,status) values("'.$user->getNimi().'","'.$user->getParool().'","'.$user->getStatus().'")');
	
}
$conn->close();
return $result;
}

public static function SearchUser($user)
{
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
if ($result = $conn->query('SELECT * FROM kasutaja WHERE nimi="'.$user->getNimi().'"and parool="'.$user->getParool().'"' ))
	{
	while ($obj = $result->fetch_object()) {
      
	   $u=new User($obj->id,$obj->nimi, $obj->parool,$obj->status);
    }

    
    $result->close();
	}
}
$conn->close();

return $u;
}


public static function deleteCategoriabyID($id)
{
	$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);
	
	if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
$result = $conn->query('DELETE FROM kategooria WHERE id='.$id);
	
}
$conn->close();
return $result;
}

public static function InsertCategory($cat)
{
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
$result = $conn->query('Insert into kategooria (nimetus,kirjeldus) values("'.$cat->getNimetus().'","'.$cat->getKirjeldus().'")');
	
}
$conn->close();
return $result;
}
	
public static function UpdateCategory($cat)
{
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
$result = $conn->query('Update kategooria set  nimetus="'.$cat->getNimetus().'", kirjeldus="'.$cat->getKirjeldus().'" where id='.$cat->getId());
	
}
$conn->close();
return $result;
}	



public static function getAllCourses()
{
$allcourses=array();
	

// Create connection
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{
	if ($result = $conn->query("SELECT kursus.id,kursus.Nimetus,kursus.Hind, kategooria.Nimetus as 'Kategooria' FROM kursus,kategooria WHERE kursus.kategoriaId=kategooria.id")) 
	{
	while ($obj = $result->fetch_object()) {
      
	   $allcourses[]=new Cours($obj->id,$obj->Nimetus, $obj->Hind,$obj->Kategooria );
    }

    /* free result set */
    $result->close();
	}
}
$conn->close();

return $allcourses;
}



public static function insertRegistratsion($idc,$idu)
{
	$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
$result = $conn->query('Insert into registratsioon (coursID,userID,data) values('.$idc.','.$idu.',"'.date("Y.m.d"). '")');
	
}
$conn->close();
return $result;
}



public static function UserById($id)
{
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{ 
if ($result = $conn->query('SELECT * FROM kasutaja WHERE id='.$id ))
	{
	while ($obj = $result->fetch_object()) {
      
	   $u=new User($obj->id,$obj->nimi, $obj->parool,$obj->status);
    }

    
    $result->close();
	}
}
$conn->close();

return $u;
}



public static function CoursesByUserId($id)
{
 $courses=array();
	

// Create connection
$conn = mysqli_connect(self::$servername, self::$username,self:: $password,self::$db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else 
{
	if ($result = $conn->query("select * from kursus, registratsioon where kursus.id=registratsioon.coursID and registratsioon.userID=".(string)$id)) 
	{
	while ($obj = $result->fetch_object()) {
      
	   $courses[]=new Cours($obj->id,$obj->Nimetus, $obj->Hind,$obj->kategoriaID);
    }

    /* free result set */
    $result->close();
	}
}
$conn->close();

return  $courses;
}


}



?>






