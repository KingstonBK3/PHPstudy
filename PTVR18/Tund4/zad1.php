<!DOCTYPE html>
<html>
<head>
	<title>Discriminant</title>
</head>
<body>
<h1>Задание1/Дискриминант</h1>
<hr>
<?php
function discriminant($a,$b,$c){
	$d = $b ** 2 - 4 * $a * $c;
	return $d;
}
function root($d,$a,$b,$c){
	if($d>0){
		echo "Дискриминант равен d= ", $d;
		echo "<br>Уравнение имеет 2 различных корня";
		echo "<br>Находим 2 корня";
		$x1=(-$b+sqrt($d))/2*$a;
		$x2=(-$b-sqrt($d))/2*$a;
		echo "<br>Первый корень x1=", $x1;
		echo "<br><br>Второй корень x2=", $x2;
		$result = 'X1 = ' . $x1 . ' , ' . 'X1 = ' . $x2;
		return $result;
	}
	elseif($d==0) {
		echo "Дискриминант равен d= ", $d;
		echo "<br>Уравнение имеет 1 корень";
		echo "<br>Находим корень по формуле";
		$x=-$b/2*$a;
		echo "<br>x=", $x;
	}
	elseif ($d<0) {
		echo "Дискриминант равен d= ", $d;
		echo "РЕШЕНИЯ НЕ СУЩЕСТВУЕТ!";
	}
}
?>

<form action="zad1.php" method="get">
<p>ax2+bx+c=0</p>
<p>a = <input type="a" name="a"></p>
<p>b = <input type="b" name="b"></p>
<p>c = <input type="c" name="c"></p>
<p> <input type="submit" value="Найти корни"></p>
</form>

<?php
if (isset($_GET['a']) and isset($_GET['b']) and isset($_GET['c'])) {
	$a=$_GET['a'];
	$b=$_GET['b'];
	$c=$_GET['c'];
	$d=discriminant($a,$b,$c);
	root($d,$a,$b,$c);
}
?>
</body>
</html>