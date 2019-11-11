<?php 

class UserView
{

public static function viewInsertResult($result)
{

if ($result==TRUE)
	echo "Valmis! <br>";
else
	echo "Viga. <br>";

}

public static function DisplayUser($user)
{

	echo "<b>".$user->getNimi()."</b>";

}

public static function UserMenu()
{

	 echo '<a href="index.php?do=my&idu='.$_SESSION["id"].'">Minu andmed</a><br>';
	 echo '<a href="index.php?do=mycours&idu='.$_SESSION["id"].'">Minu koolitused</a><br>';

}


public static function UserInfo($user)
{

	echo $user->getId()." <b>".$user->getNimi()."</b> " .$user->getStatus();

}

public static function UserCourses($arr)
{
echo "<h2>Sinu koolitused</h2>";
	foreach ($arr as $value) {
    
	echo '<p><b> ',$value->displayNimetus(),"</b> ",$value->displayHind()," euro";

}

}
}



?>

