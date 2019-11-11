<?php 

class CatView
{


public static function viewCategoria($arr)
{

foreach ($arr as $value) {
    echo '<a href="index.php?id=',$value->displayId(),'">',$value->displayNimetus(),"</a><br>";
	
	
}
}

public static function viewCategoriaInfo($info)
{

	echo "<h2>",$info,"</h2>";
}

public static function viewCategoriaCourses($arr)
{

	foreach ($arr as $value) {
    echo '<p><b>',$value->displayNimetus(),"</b> ",$value->displayHind()," euro";
	if ( isset($_SESSION["status"]) && $_SESSION["status"]=="user")
	{
		 echo '<a href="index.php?idc=',$value->displayId(),'&idu='.$_SESSION["id"].'">Registreeri</a><br>';
	}
	echo "</p>";
	
	
}
}
}
?>

