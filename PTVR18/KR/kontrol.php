<!DOCTYPE html>
<html>
<head>
	<title>KR</title>
</head>
<body>
<!--<h1>Задание 1</h1>
<p>Создайте программу-тест для проверки знаний таблицы умножения. С помощью случайных чисел создайте 5 примеров. При правильном ответе — на экране пишется Правильно зеленым цветом, при неправильном — Ошибка красным цветом. Также программа в зависимости от результата прохождения теста должна выставить оценку прохождения теста: если количество правильных ответов=5, то Молодец, 3 или 4, то Надо бы еще поучить, меньше 2 — Срочно нужно учить таблицу умножения.</p>
<hr>
<form action="kontrol.php" method="get">
<p><?php
	$a1=rand(1,10);
	$b1=rand(1,10);
	$result1=$a1*$b1;
	echo '1)',$a1 ,'*', $b1 , ' = ';
?><input type="text" name="1"></p>
<p><?php
	$a2=rand(1,10);
	$b2=rand(1,10);
	$result2=$a2*$b2;
	echo '2)',$a2 ,'*', $b2 , ' = ';
?><input type="text" name="2"></p>
<p><?php
	$a3=rand(1,10);
	$b3=rand(1,10);
	$result3=$a3*$b3;
	echo '3)',$a3 ,'*', $b3 , ' = ';
?><input type="text" name="3"></p>
<p><?php
	$a4=rand(1,10);
	$b4=rand(1,10);
	$result4=$a4*$b4;
	echo '4)',$a4 ,'*', $b4 , ' = ';
?><input type="text" name="4"></p>
<p><?php
	$a5=rand(1,10);
	$b5=rand(1,10);
	$result5=$a5*$b5;
	echo '5)',$a5 ,'*', $b5 , ' = ';
?><input type="text" name="5"></p>
<p><input type="submit" value="Решить"></p>
</form>
<?php;
if (empty($_GET['1']) and empty($_GET['2']) and empty($_GET['3']) and empty($_GET['4']) and empty($_GET['5'])){
	$result1==$_GET['1'];	
	$result2==$_GET['2'];
	$result3==$_GET['3'];
	$result4==$_GET['4'];
	$result5==$_GET['5'];
}
?>
<?php
	$check=0;
	//Проверка не сделана!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	if ($_GET['1']!=$result1){
		echo "Неправильно!";
	}
	elseif ($_GET['1']==$result1){
		echo "Правильно!";
		$check+1;
	}
	elseif ($_GET['2']!=$result2){
		echo "Неправильно!";
	}
	elseif ($_GET['2']==$result2){
		echo "Правильно!";
		$check+1;
	}
	elseif ($_GET['3']!=$result3){
		echo "Неправильно!";
	}
	elseif ($_GET['3']==$result3){
		echo "Правильно!";
		$check+1;
	}
	elseif ($_GET['4']!=$result4){
		echo "Неправильно!";
	}
	elseif ($_GET['4']==$result4){
		echo "Правильно!";
		$check+1;
	}
	elseif ($_GET['5']!=$result5){
		echo "Неправильно!";
	}
	elseif ($_GET['5']==$result5){
		echo "Правильно!";
		$check+1;
	}
	else{
		echo "Вы ничего не ввели";
	}
	//Проверка не сделана!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	echo "<br>Вы решили ",$check, ' уравнений.';
?>
<hr>-->
<h1>Задание 2</h1>
<p>Создать форму для ввода данных человека l - рост (cм), m - вес (кг), t - возраст (в годах), gender - пол (радиокнопки m/n) Посчитать по введенным данным идеальный вес человека mid (kg), процент жира r, индекс массы тела kind, плотность (kg/m3), обьем V (dm3), площадь S (m2) (при нахождении y использовать функцию log10 — Десятичный логарифм) и в зависимости от индекса выведите, какой вес у человека hinnang.</p>
<hr>
	<form action="kontrol.php" method="get">
	<p>Введите ваши данные:</p>
	<p>Ваш рост(cм):<input type="text" name="growth"></p>
	<p>Ваш вес(кг):<input type="text" name="weight"></p>
	<p>Ваг возраст:<input type="text" name="age"></p>
	Ваш пол:
	<input type="radio" name="gender" value="Мужской">Мужской
	<input type="radio" name="gender" value="Женский">Женский
	<p><input type="submit" value="Вычислить"></p>
	</form>
	<?php
	if (!empty($_GET['growth']) and !empty($_GET['weight']) and !empty($_GET['age']) and !empty($_GET['gender'])){
		echo "Ваш рост:",$_GET['growth']," см";
		echo "<br>Ваш вес:",$_GET['weight']," кг";
		echo "<br>Ваш возратст:",$_GET['age']," лет";
		echo "<br>Ваш пол:",$_GET['gender'];
	}
	?>
	<?php
		$I=$_GET['growth'];
		$m=$_GET['weight'];
		$t=$_GET['age'];
		$gender=$_GET['gender'];
		$kind=$m/($I/100)**2;
		if ($gender=="Мужской"){
			echo "<br>Вы мужчина!<br>Ваш идеальный вес : ",(3*$I-450+$t)*0.250+45.0;
			echo "<br>Индекс массы тела : ",$kind;
			}elseif ($kind<20) {
				echo "<br>У вас недостаточный вес!";
			}elseif ($kind>=20 and $kind<=25) {
				echo "<br>У вас нормальный вес!";
			}elseif ($kind>=26 and $kind<=30) {
				echo "<br>У вас небольшой избыток веса!";
			}elseif ($kind>=31 and $kind<=40) {
				echo "<br>У вас лишний вес !";
			}else{
				echo "<br>Вы не выбрали пол!";
			}
		if ($gender=="Женский"){
			echo "<br>Вы женщина!<br>Ваш идеальный вес : ",(3*$I-450+$t)*0.225+40.5;
			echo "<br>Индекс массы тела : ",$kind;
			}elseif ($kind<19) {
				echo "<br>У вас недостаточный вес!";
			}elseif ($kind>=19 and $kind<=24) {
				echo "<br>У вас нормальный вес!";
			}elseif ($kind>=25 and $kind<=30) {
				echo "<br>У вас небольшой избыток веса!";
			}elseif ($kind>=31 and $kind<=40) {
				echo "<br>У вас лишний вес !";
			}
			else{
				echo "<br>Вы не выбрали пол!";
	}
	?>
</body>
</html>