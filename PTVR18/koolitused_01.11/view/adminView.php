<?php 
class adminView
{

public static function viewMenu()
{
 echo '<a href="index.php?adminid=Category">Kategooriad</a><br>';
 echo '<a href="index.php?adminid=Cours">Koolitused</a><br>';
 echo '<a href="index.php?adminid=Users">Kasutajad</a><br>';
 //....
}
public static function viewAllCat($arr)
{
	foreach ($arr as $value) {
    echo "<p>".$value->displayId()."&nbsp;&nbsp;".$value->displayNimetus()." &nbsp;&nbsp;".$value->displayKirjeldus() ;
	
	echo '<a href="index.php?adminid=Category&do=update&catid=',$value->displayId(),'">Update</a>&nbsp;&nbsp;';
	echo '<a href="index.php?adminid=Category&do=delete&catid=',$value->displayId(),'">Delete</a></p>';
}
echo '<a href="index.php?adminid=Category&do=insert">Insert</a><br>';

}
public static function viewInsertCatForm()
{
echo '<form action="index.php" >
							  Uus kategooria:<br>
							  Nimetus:<br>
							  <input type="text" name="catnimetus" >
							  <br>
							 Kirjeldus:<br>
							  <input type="text" name="catkirjeldus">
							  <br><br>
							    <input type="hidden" name="adminid" value="Category">
								<input type="hidden" name="do" value="insert">
							  <input type="submit" value="Salvesta">
							</form> ';		
}


public static function viewUpdateCatForm($cat)
{
	echo '<form action="index.php" >
							  Muuda kategooria andmed:<br>
							  Nimetus:<br>
							<input type="text" name="catunimetus" value="'.$cat->getNimetus().'" >
							  <br>
							 Kirjeldus:<br>
							  <input type="text" name="catukirjeldus" value="'.$cat->getKirjeldus().'">
							  <br><br>
							  <input type="hidden" name="id" value="'.$cat->getId().'">
							    <input type="hidden" name="adminid" value="Category">
								<input type="hidden" name="do" value="update">
							  <input type="submit" value="Muuta">
							</form> ';	

}

public static function viewAllCourses($arr)
{
	foreach ($arr as $value) {
    echo "<p>".$value->displayId()."&nbsp;&nbsp;".$value->displayNimetus()." &nbsp;&nbsp;".$value->displayHind() ." &nbsp;&nbsp;".$value->displayKategooria() ;
	
	echo '<a href="index.php?adminid=Cours&do=update&userid=',$value->displayId(),'">Update</a>&nbsp;&nbsp;';
	echo '<a href="index.php?adminid=Cours&do=delete&userid=',$value->displayId(),'">Delete</a></p>';
}
echo '<a href="index.php?adminid=Cours&do=insert">Insert</a><br>';

}


}
?>
