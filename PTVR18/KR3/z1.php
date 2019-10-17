<!DOCTYPE html>
<html>
<head>
	<title>Kontrollitoo</title>
</head>
<body>
<h1>1-ое задание</h1>
<?php
$Students=["Andreev","Petrov","Egorov","Dmitriev","Antonov","Aleksandrov"];
print_r($Students);
/*echo $Students[0];
echo $Students[1];*/
?>
<h2>Выберите студента:</h2>
<form method="post">
	<select name="StudentChoise">
		<option value="1st"><?php echo $Students[0]; ?></option>
		<option value="2st"><?php echo $Students[1]; ?></option>
		<option value="3st"><?php echo $Students[2]; ?></option>
		<option value="4st"><?php echo $Students[3]; ?></option>
		<option value="5st"><?php echo $Students[4]; ?></option>
		<option value="6st"><?php echo $Students[5]; ?></option>
	</select>
	<h2>Введите оценку:</h2>
	<input type="text" name="Hind">
	<input type="submit" value="Поставить">
	<?php
	if (isset($_POST['Hind'])) {
		$Hind=$_POST['Hind'];
		$line="$Hind\n";
		file_put_contents('hinded.txt', $line, FILE_APPEND);
	}
	?>
</form>
</body>
</html>