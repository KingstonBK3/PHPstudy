<!DOCTYPE html>
<html>
<head>
	<title>Kontrollitoo</title>
</head>
<body>
<?php
$Students=["Andreev","Petrov","Egorov","Dmitriev","Antonov","Aleksandrov"];

?>
<h2>Выберите студента:</h2>
<form method="post">
	<select name="student">
		<?php
			foreach ($Students as $key => $value) {
				echo "<option value='{$value}'>$value</option>";
			}
		?>
	</select>
	<input type="text" name="hind">
	<input type="submit" value="поставить оценку">
</form>
	<?php
		$Student = $_POST['student'];
		$hinded = $_POST['hind'];
		$data = $Student . ' : ' . $hinded . PHP_EOL;
		file_put_contents('hinded', $data, FILE_APPEND)
	?>
</body>
</html>