<!DOCTYPE html>
<html>
<head>
	<title>Two-dimensional array</title>
</head>
<body>
<h1>Двумерные массивы</h1>
<p>Двумерный массив - массив, который в качестве значений хранит в себе другие массивы. Рассмотрим создание двумерного массива с помощью конструктора array().</p>
<?php
$implements = [ ["Name" => "Ручки", //Принадлежности
               "Price" => 0.80,
               "Count" => 15 
             ],
             [ "Name" => "Карандаши", 
               "Price" => 0.50,
               "Count" => 25,
             ],
             [ "Name" => "Линейки", 
               "Price" => 0.45,
               "Count" => 7 
             ]
           ];
echo "<h1>Ручной доступ к элементам массива</h1>";
 
for ($row = 0; $row < 3; $row++) {
    echo $implements[$row]["Name"]." Цена ".$implements[$row]["Price"]
      ." Количество ".$implements[$row]["Count"];
    echo "<br>";
}
echo "<h1>Использование цикла foreach для доступа к элементам</h1>";
 
echo "<ol>";
for ($row = 0; $row < 3; $row++) {
    echo "<li><b>Номер строки $row</b>";
    echo "<ul>";
 
    foreach($implements[$row] as $key => $value) {
        echo "<li>".$value."</li>";
    }
 
    echo "</ul>";
    echo "</li>";
}
echo "</ol>";
?>
</body>
</html>