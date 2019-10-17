<!DOCTYPE html>
<html>
<head>
	<title>Kontrollitoo</title>
</head>
<body>
<h1>Задание 2</h1>
<?php
readfile("Goroda.txt");
?>
<form>
	<p>Search:<input type="text" name="search_maakond"></p>
	<input type="submit" value="Поиск">
	<form method="post">
		<select name="Maakond"></select>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
	</form>
</form>
</body>
</html>