<!DOCTYPE html>
<html>
<head>
	<title>Задние2</title>
</head>
<body>
<h1>Континенты и страны</h1>
<p>Все данные хранятся в массивах С помощью массива континенты создать меню, при выборе континента формируется список ссылок стран. Выбрав страну на странице появляется флаг (картинка), площадь,население и столица.</p>
<?php
$Asia = [ ["Name" => "Азербайджан",
		"Country" => "Баку",
		"Population" => "9.477.100",
		"Area" => "86.600 км2"
		],
		[
		"Name" => "Армения",
		"Counry" => "Ереван",
		"Population" => "3.017.400",
		"Area" => "29.800 км2"
		],
		[
		"Name" => "Китай",
		"Counry" => "Пекин",
		"Population" => "1.363.350.000",
		"Area" => "9.640.820 км2"
		],
		[
		"Name" => "КНДР",
		"Counry" => "Пхеньян",
		"Population" => "24.895.000",
		"Area" => "120.538 км2"
		],
		[
		"Name" => "Япония",
		"Counry" => "Токио",
		"Population" => "127.180.000",
		"Area" => "377.873 км2"
		]
	];
$Europe = [ ["Name" => "Великобритания",
		"Country" => "Лондон",
		"Population" => "63.705.000	",
		"Area" => "242.900 км2"
		],
		["Name" => "Нидерланды",
		"Country" => "Амстердам",
		"Population" => "16.842.200",
		"Area" => "41.528 км2"
		],
		["Name" => "Германия",
		"Country" => "Берлин",
		"Population" => "80.619.000",
		"Area" => "357.022 км2"
		],
		["Name" => "Испания",
		"Country" => "Мадрид",
		"Population" => "46.609.700	",
		"Area" => "505.992 км2"
		],
		["Name" => "Италия",
		"Country" => "Рим",
		"Population" => "38.700.000",
		"Area" => "301.318 км2"
		],
	];
$Africa = [ ["Name" => "Алжир",
		"Country" => "Алжир",
		"Population" => "63.705.000	",
		"Area" => "2.381.740 км2"
		],
		["Name" => "Египет",
		"Country" => "Каир",
		"Population" => "86.127.000",
		"Area" => "980.869 км2"
		],
		["Name" => "Камерун",
		"Country" => "Яунде",
		"Population" => "20.386.799",
		"Area" => "475.442 км2"
		],
		["Name" => "Нигерия",
		"Country" => "Абуджа",
		"Population" => "173.615.000",
		"Area" => "923.768 км2"
		],
		["Name" => "Сенегал",
		"Country" => "Дакар",
		"Population" => "13.567.338",
		"Area" => "196.722 км2"
		],
	];
$SouthAmerica = [ ["Name" => "Аргентина",
		"Country" => "Буэнос-Айрес",
		"Population" => "41.660.096",
		"Area" => "2.780.400 км2"
		],
		["Name" => "Бразилия",
		"Country" => "Бразилиа",
		"Population" => "201.032.714",
		"Area" => "8.514.880 км2"
		],
		["Name" => "Колумбия",
		"Country" => "Богота",
		"Population" => "47.506.000",
		"Area" => "1.138.910 км2"
		],
		["Name" => "Уругвай",
		"Country" => "Монтевидео",
		"Population" => "3.286.314",
		"Area" => "175.016 км2"
		],
		["Name" => "Чили",
		"Country" => "Сантьяго",
		"Population" => "16.341.929",
		"Area" => "756.096 км2"
		],
	];
$Continets["Asia"]="";
$Continets["Europe"]="";
$Continets["Africa"]="";
$Continets["South America"]="";
/*echo "<ol>";
for ($row = 0; $row < 5; $row++) {//Asia
    echo "<li><b><br></b>";
    echo "<ul>";
 
    foreach($Asia[$row] as $key => $value) {
        echo "<li>".$value."</li>";
    }
 
    echo "</ul>";
    echo "</li>";
}
echo "</ol>";
echo "<ol>";
for ($row = 0; $row < 5; $row++) {//Europe
    echo "<li><b><br></b>";
    echo "<ul>";
 
    foreach($Europe[$row] as $key => $value) {
        echo "<li>".$value."</li>";
    }
 
    echo "</ul>";
    echo "</li>";
}
echo "</ol>";
echo "<ol>";
for ($row = 0; $row < 5; $row++) {//Africa
    echo "<li><b><br></b>";
    echo "<ul>";
 
    foreach($Africa[$row] as $key => $value) {
        echo "<li>".$value."</li>";
    }
 
    echo "</ul>";
    echo "</li>";
}
echo "</ol>";
echo "<ol>";
for ($row = 0; $row < 5; $row++) {//SouthAmerica
    echo "<li><b><br></b>";
    echo "<ul>";
 
    foreach($Asia[$row] as $key => $value) {
        echo "<li>".$value."</li>";
    }
 
    echo "</ul>";
    echo "</li>";
}
echo "</ol>";*///Вывод всез дынных из массивов
foreach ($Continets as $key => $value) {
	echo '<a href="zad2.php?id=',$key,'">',$key,'</a><br>';
}
if (isset($_GET["id"]))
	foreach ($Continets as $key => $value){
	if ($_GET["id"]==$key)
		echo '<p>',$value,'</p>';
	}
?>
</body>
</html>