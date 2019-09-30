<!DOCTYPE html>
<html>
<head>
	<title>Задание1</title>
</head>
<body>
<h1>Успеваемость студентов</h1>
<p>В одномерных массивах хранятся имена студентов и названия предметов , в двумерном массиве хранится успеваемость студентов Вывести на экран таблицу с успеваемостью, посчитать средний бал для каждого студента.</p>
<?php
$students=["Андрей","Артем","Петр","Георгий"];
$lessons=["Англ","Матем","Информ","Литерат"];
$performance=array(array(3,5,4,4),array(2,3,4,5),array(5,5,5,5),array(5,4,4,5));
echo '<table border="1"> <tr> <th>Имя</th>';
foreach ($lessons as $value)
	echo "<th>".$value."</th>";
	echo "<th>Average</th>";
for ($a=0;$a<count($students);$a++) { 
	echo "<tr><td>".$students[$a]."</td>";
	for ($b=0;$b<count($performance); $b++) { 
		echo "<td>".$performance[$a][$b]."</td>";
		$sum+=$performance[$a][$b];
	}
	echo "</tr>".round($sum/count($performance[$a]),2)."</td></tr>";
}
echo "</table>";
?>
</body>
</html>