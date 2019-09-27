<?php
include 'info.php';
include 'function.php';

echo "<p>Menu </p>";
sport($sport);

if (!isset($_GET['sport'])) {
	allsport($football,$cybersport,$basketball);
}
/*else{
	echo "<h2>",$_GET['sport'],"</h2>";
	sportnews($_GET['sport'],$football,$cybersport,$basketball]);
}
*/
?>