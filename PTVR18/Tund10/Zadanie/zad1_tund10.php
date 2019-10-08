<!DOCTYPE html>
<html>
<head>
	<title>Zadanie 1</title>
</head>
<body>
	<!--Создать форму для регистрации на экскурсию (имя, группа-выбор из комбобокса, телефон)
	Данные записать в файл
	Создать ссылку на страницу, где выводится список зарегистрировавшихся на экскурсию-->
	<h1>Запись на экскурсию</h1>
	<form method="post">
	<p>Ваше имя:<input type="text" name="Name"></p>
	<p>Ваша группа:
		<input type="radio" name="Group" value="PTVR18">PTVR18
		<input type="radio" name="Group" value="KTVR17">KTVR17
		<input type="radio" name="Group" value="PTVR16">PTVR16
		<input type="radio" name="Group" value="KTVR18">KTVR18
	</p>
	<p>Ваш номер телефона:<input type="text" name="Tnumber"></p>
	<input type="submit" value="Отправить">
	</form>
	<?php
	if (isset($_POST['Name']) and isset($_POST['Group']) and isset($_POST['Tnumber'])) {
		$name=$_POST['Name'];
		$group=$_POST['Group'];
		$Tnumber=$_POST['Tnumber'];

		$line="$name|$group|$Tnumber\n";

		file_put_contents("data.txt", $line, FILE_APPEND);
		file_put_contents("data.php", $line, FILE_APPEND);
	}
	?>
</body>
</html>