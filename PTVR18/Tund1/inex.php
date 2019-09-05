<?php
echo 'Andrei<br>Andreev<br>Was born<br>';
echo '<br>PTVR18';
echo<<<END
<p>IVKHK<br>Address</p><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
END;
?>
<?php
$name = "Ooondrei<br>";
echo "Your name, ", $name;
?>
<?php
$a=5;
$b=7;
$S=$a*$b;
echo "Площадь=", $S;
?>
<?php
define("pi", 3.14);
$R=20;
$L= 2*pi*$R;
echo "<br>Длинна окружности =", $L;
?>
<?php
$a=3;
$b=4;
$C=sqrt(pow($a,2)+pow($b,2));
echo "<br>Ответ = ", $C;
?>
<?php
$mounth=5;
if ($mounth==1 or $mounth ==2 or $mounth==12){
	echo "<br>Время года-Зима";
	}elseif ($mounth==3 or $mounth==4 or $mounth==5){
		echo "<br>Время года-Весна";
	}elseif ($mounth==6 or $mounth==7 or $mounth==8){
		echo "<br>Время года-Лето";
	}elseif ($mounth==9 or $mounth==10 or $mounth==11){
		echo "<br>Время года-Осень";
	}else{
		echo "Не соответсвует ни одному числу!";
	}
?>
<?php
switch($mounth)
{
	case 1:
	case 2:
	case 12:
		echo "<br>Зима";
	break;
	
	case 3;
	case 4;
	case 5;
		echo "<br>Весна<br>";
	break;
	
	case 6:
	case 7:
	case 8:
		echo "<br>Лето";
	break;
	
	case 9:
	case 10:
	case 11:
		echo "<br>Осень";
	break;
	
	default:
		echo "<br>Не соответствует ни одному числу";
	break;
}
?>
<?php 
            for ($i = 1; $i < 11; $i++){
                echo $i . ' ';
            } 
            echo "<br>";
            for ($i = 10; $i > 0; $i--){
                echo $i . ' ';
            }
            echo "<br>";
            for ($i = 1; $i < 11; $i++){   
                if($i % 2 == 0){
                   echo $i . ' '; 
                }
                
            }
            echo "<br>";
            for ($i = 1; $i < 11; $i = $i + 2){
                echo $i . ' ';
            } 
            echo "<br>";
            for ($i = 3; $i < 11; $i = $i + 3){
                echo $i . ' ';
            }
            echo "<br>";
            for ($i = 5; $i < 11; $i = $i + 5){
                echo $i . ' ';
            }
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            for($i = 0; $i < 11; $i++){
                $result = $i * 2;
                echo "2 * $i = " , $result, "<br>" ;
            }
            echo "<br>";
            echo "<br>";
        ?>
        <?php 
            echo '<h1>Таблица умножения от 1 до 10</h1>';
            for($i = 0; $i < 11; $i++){
                for($z = 0; $z < 11; $z++){
                    $result = $i * $z;
                    echo "$i * $z = " , $result, "<br>" ;
                }
                echo '<br>';
            }
            echo "<br>";
            echo "<br>";
        ?>