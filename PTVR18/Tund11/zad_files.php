<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<h1>Как хорошо ты знаешь Эстонию?</h1>
<form method="post">
<p>Ваше имя:<input type="text" name="Name"></p>
<p>1)Выберите столицу Эстонии.</p>
	<input type="radio" name="Country" value="Johvi">a)Йыхви
	<input type="radio" name="Country" value="Tartu">b)Тарту
	<input type="radio" name="Country" value="Tallinn">c)Таллинн
<p>2)С каким Государством Эстония граничит на востоке?</p>
	<input type="radio" name="East" value="Litva">a)Литва
	<input type="radio" name="East" value="Latvia">b)Латвия
	<input type="radio" name="East" value="Russia">c)Россия
<p>3)Сколько уездов в Эстонии?</p>
	<input type="radio" name="County" value="17">a)17
	<input type="radio" name="County" value="15">b)15
	<input type="radio" name="County" value="12">c)12
<p>4)Какой центр уезда Ида-Вирумаа?</p>
	<input type="radio" name="CenterCounty" value="Jogevamaa">a)Йыгевама
	<input type="radio" name="CenterCounty" value="Rakvere">b)Раквере
	<input type="radio" name="CenterCounty" value="Johvi">c)Йыхви
<p>5)3-ий по населению город в Эстонии?</p>
	<input type="radio" name="City" value="Narva">a)Нарва
	<input type="radio" name="City" value="Tallinn2">b)Таллинн
	<input type="radio" name="City" value="Tartu2">c)Тарту
	<br>
	<br>
<input type="submit" value="Результат">
<?php
if (isset($_POST['Country']) and isset($_POST['East']) and isset($_POST['County']) and isset($_POST['CenterCounty']) and isset($_POST['City'])) {
	$Name1=$_POST['Name'];
	$Country=$_POST['Country'];
	$East=$_POST['East'];
	$County=$_POST['County'];
	$CenterCounty=$_POST['CenterCounty'];
	$City=$_POST['City'];
	
	$line="$Name1|$Country|$East|$County|$CenterCounty|$City\n";

	echo $line;

	if ($Country == 'Tallinn') {
		$count +1;
	}
	elseif ($East == 'Russia') {
		$count +1;
	}
	elseif ($County == 15) {
		$count +1;
	}
	elseif ($CenterCounty == 'Johvi') {
		$count +1;
	}
	elseif ($City == 'Narva') {
		$count +1;
	}                    
	else {
		$count -1;
	}

	echo $count;
}
?>
</form>
</body>
</html>