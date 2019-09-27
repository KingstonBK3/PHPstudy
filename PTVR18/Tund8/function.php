<?php
include 'info.php';
function sport($sport){
	foreach ($sport as $value) {
		echo '<a href="news.php?sport=',$value,'">',$value,'</a><br>';
	}
}
function allsport($football,$cybersport,$basketball){
	echo "<h1>All news</h1>";
	echo "<h2>Football</h2>";
	foreach ($football as $value) {
		echo '<p>',$value,'</p>';
	}
	echo "<h2>Cybersport</h2>";
	foreach ($cybersport as $value) {
		echo '<p>',$value,'</p>';
	}
	echo "<h2>Basketball</h2>";
	foreach ($basketball as $value) {
		echo '<p>',$value,'</p>';
	}
}
function sportnews($a,$football,$cybersport,$basketball){
	if () {
		foreach ($football as $key => $value) {
			echo '<p>',$value,'</p>';
		}
	}
	elseif () {
		foreach ($football as $key => $value) {
		}
		
	}
}
?>