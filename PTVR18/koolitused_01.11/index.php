<html>
<body>

<h1>IVKHK koolitused!</h1>

<?php 
session_start();
include_once 'controller/catcontrol.php';
include_once 'controller/usercontrol.php';
include_once 'controller/admincontrol.php';


CatControl::getCategorias(); // menüü

if (isset($_GET["id"]))
{CatControl::getCategoriaByID($_GET["id"]);
echo "<br>";
	CatControl::getCoursesByCatID($_GET["id"]); // koolituse info
}
?>

<form action="index.php" >
  Nimi:<br>
  <input type="text" name="name" >
  <br>
  Parool:<br>
  <input type="text" name="parol">
  <br><br>
  <input type="submit" value="Registreeri">
</form> 
<?php 
if (isset($_GET["name"]) && isset($_GET["parol"]))
{
	UserControl::NewUser($_GET["name"],$_GET["parol"]); // uue kasutaja registreerimine
}
?>

<?php 
if (!(isset($_SESSION["user"])))
 echo '<form action="index.php" >
  Login:<br>
  Nimi:<br>
  <input type="text" name="kname" >
  <br>
  Parool:<br>
  <input type="text" name="kparol">
  <br><br>
  <input type="submit" value="Sisse">
</form> ';
else
	echo '<a href="index.php?logout=1">Logout</a><br>';

if (isset($_GET["logout"]))
{
	session_unset();
	session_destroy();
	header ('Location: index.php'); 
}

if (isset($_GET["kname"]) && isset($_GET["kparol"]))
{
	$u=UserControl::SearchUser($_GET["kname"],$_GET["kparol"]); // sisseloogimine
	$_SESSION["user"]=$u->getNimi();
	$_SESSION["status"]=$u->getStatus();
	$_SESSION["id"]=$u->getId();
	header ('Location: index.php'); 
}


if (isset($_SESSION["user"]))
{  
	
	if ($_SESSION["status"]=="admin")
	{
		AdminControl::adminMenu() ; // Admini menüü kuvamine
		if (isset($_GET["adminid"]))
		{
			if($_GET["adminid"]=="Category") // kui valitud kategooria
			{
				AdminControl::adminCat();
				
				if(isset($_GET["catnimetus"])&& isset($_GET["catkirjeldus"]))
					{
						AdminControl::insertCat($_GET["catnimetus"],$_GET["catkirjeldus"]);
					}
					
				if(isset($_GET["catunimetus"])&& isset($_GET["catukirjeldus"]))
					{
						AdminControl::updateCat($_GET["id"],$_GET["catunimetus"],$_GET["catukirjeldus"]);
					}
						
				
				if (isset($_GET["do"])&& $_GET["do"]=="delete") // kustutamine
				{
					AdminControl::deleteCat($_GET["catid"]);
					
				}
				if(isset($_GET["do"])&& $_GET["do"]=="insert")
				{
					adminView::viewInsertCatForm();
				}
			
			if(isset($_GET["do"])&& $_GET["do"]=="update")
				{
					AdminControl::updateFormCat($_GET["catid"]);
				}
			
		}
		
		
		if($_GET["adminid"]=="Cours") // kui valitud kategooria
			{
				AdminControl::adminCourses();
			}
		
		
	}
	}
	
	 if ($_SESSION["status"]=="user")
	{
		userView::UserMenu();
		echo "<br>" ; // Kasutaja menüü kuvamine
		if (isset($_GET["idc"],$_GET["idu"]))
		{
			UserControl::RegisterUserToCourses($_GET["idc"],$_GET["idu"]);
		}
		if(isset($_GET["do"])&& $_GET["do"]=="my")
				{
					UserControl::UserData($_GET["idu"]);
				}
				
		if(isset($_GET["do"])&& $_GET["do"]=="mycours")
				{
					UserControl::UserCourses($_GET["idu"]);
				}		
		
	}
	
}



?>
</body>
</html>

