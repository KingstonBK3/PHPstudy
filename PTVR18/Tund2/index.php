<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Задание 1</h1>
<?php
$arv=78;
echo "Дано двузначное число : ", $arv;
echo "<br>Десятки = ", intval($arv/10);
echo "<br>Еденицы = ", $arv%10;
?>
<h1>Задание 2</h1>
<?php
$a=rand(5,60);
?>
<table border="1">
	<tr>
		<td><?php
		echo "Счет Сергея : ", $a;;
		?></td>
		<td><?php
		echo "Счет Егора : ", $a;
		?></td>
		<td><?php
		echo "Счет Антона : ", $a;
		?></td>
	</tr>
	<tr>
		<td colspan="3"><?php
		echo "Общий счет : ",$a+$a+$a;
		?></td>
	</tr>
</table>
<h1>Задание 3</h1>
<?php
$I=188;//Рост(см)
echo "Ваш рост :", $I;
$m=70;//Вес(кг)
echo "<br>Ваш вес :", $m;
$t=17;//Возраст(в годах)
echo "<br>Ваш возраст :", $t;
$gender="m";//пол(m/f)
$kind=$m/($I/100)**2;//Индек массы тела;
if ($gender=="m"){
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
if ($gender=="f"){
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
<h1>Задание 4</h1>
<?php
$D=1;//День
$M=8;//Месяц
echo "Ваша дата рождения : ",$D,".", $M;
if ($M==1 and $D>=20 or $M==2 and $D<=18) {
	echo "<br>Вы Водолей!";
	}elseif ($M==2 and $D>=19 or $M==3 and $D<=20) {
		echo "<br>Вы Рыбы!";
	}elseif ($M==3 and $D>=21 or $M==4 and $D<=19) {
		echo "<br>Вы Овен!";
	}elseif ($M==4 and $D>=20 or $M==5 and $D<=20) {
		echo "<br>Вы Телец!";
	}elseif ($M==5 and $D>=21 or $M==6 and $D<=21) {
		echo "<br>Вы Близнецы!";
	}elseif ($M==6 and $D>=22 or $M==7 and $D<=22) {
		echo "<br>Вы Рак!";
	}elseif ($M==7 and $D>=23 or $M==8 and $D<=22) {
		echo "<br>Вы Лев!";
	}elseif ($M==8 and $D>=23 or $M==9 and $D<=22) {
		echo "<br>Вы Дева!";
	}elseif ($M==9 and $D>=23 or $M==10 and $D<=22) {
		echo "<br>Вы Весы!";
	}elseif ($M==10 and $D>=23 or $M==11 and $D<=22) {
		echo "<br>Вы Скорпион!";
	}elseif ($M==11 and $D>=23 or $M==12 and $D<=21) {
		echo "<br>Вы Стрелец!";
	}elseif ($M==12 and $D>=22 or $M==1 and $D<=19) {
		echo "<br>Вы Козерог!";
	}
?>
<h1>Задание 5</h1>
<?php            
            $Sotni = [
                1 => 'Сто',
                2 => 'Двести',
                3 => 'Тристо',
                4 => 'Четыресто',
                5 => 'Пятьсот',
                6 => 'Шестьсот',
                7 => 'Семьсот',
                8 => 'Восемьсот',
                9 => 'Девятьсот'
            ];
            
            $Desatki = [
                1 => 'десять',
                2 => 'двадцать',
                3 => 'тридцать',
                4 => 'сорок',
                5 => 'пятьдесят',
                6 => 'шестьдесят',
                7 => 'семьдесят',
                8 => 'восемьдесят',
                9 => 'девяносто',
            ];  
            $Desatki2 = [
                10 => 'десять',
                11 => 'одинадцать',
                12 => 'двенадцать',
                13 => 'тринадцать',
                14 => 'четырнадцать',
                15 => 'пятнадцать',
                16 => 'шестнадцать',
                17 => 'семнадцать',
                18 => 'восемнадцать',
                19 => 'девятнадцать',
                20 => 'двадцать',
            ];
            
            $Endenici = [
                1 => 'один',
                2 => 'два',
                3 => 'три',
                4 => 'четыре',
                5 => 'пять',
                6 => 'шесть',
                7 => 'семь',
                8 => 'восемь',
                9 => 'девять'
            ];
            
            $blacklist = [
                10 => 10,
                11 => 11,
                12 => 12,
                13 => 13,
                14 => 14,
                15 => 15,
                16 => 16,
                17 => 17,
                18 => 18,
                19 => 19,
                20 => 20,                
            ];
            
            $k = 230;       
            $result_Sotni = ($k/100)%10; //Сотни
            
            if (in_array($k % 100,$blacklist)){
                $result_Desatki = $k % 100;
                $result = $Sotni[$result_Sotni] . ' ';
                $result .= $Desatki2[$result_Desatki] . ' ';
            }else{
                $result_Desatki = (($k/10)%100) % 10;//Десятки
                $result_Endenici = $k%10;    //Еденицы
                $result = $Sotni[$result_Sotni] . ' ';
                $result .= $Desatki[$result_Desatki] . ' ';     
                $result .= $Endenici[$result_Endenici];
            }
            echo $result;
 
        ?>
</body>
</html>