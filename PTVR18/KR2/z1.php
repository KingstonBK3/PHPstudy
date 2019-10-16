<html>
    <head>
        <title>Задание 1. Погода</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
	$weather = [
		'Пн' => ['Утром' => 15,'Днем' => 25,'Вечером' => 17],
		'Вт' => ['Утром' => 13,'Днем' => 21,'Вечером' => 16],
		'Ср' => ['Утром' => 15,'Днем' => 22,'Вечером' => 14],
		'Чт' => ['Утром' => 17,'Днем' => 23,'Вечером' => 19],
		'Пт' => ['Утром' => 10,'Днем' => 25,'Вечером' => 19],
		'Сб' => ['Утром' => 11,'Днем' => 26,'Вечером' => 12],
		'Вс' => ['Утром' => 12,'Днем' => 28,'Вечером' => 11],
	];
	?>
	<?php
	function viweInfo($arr){
	foreach ($arr as $key => $value) {
		echo "<h4>{$key}:</h4>";
		foreach ($value as $key => $value) {
			echo "<h5>{$key} = {$value}C<h5>";
		}
		echo "<br>";
		}
	}

	function averageValue($arr){
		$average_value = 0;
		foreach ($arr as $key => $value) {
			$average_value_day = 0;
			foreach ($value as $k => $v) {
				$average_value_day += $v;
			}
			$average_value_day = $average_value_day / count($value);
			$average_value_day = round($average_value_day, 2);
			$average_value += $average_value_day;
		}
		$average_value = $average_value / count($arr);
		$average_value = round($average_value,2);
		echo "<h4 style='color:red;'>Аverage value = {$average_value}C</h4>";
	}
	function search($arr){
		if($_POST['search_form'] != 'Все'){
			foreach ($arr as $key => $value) {
				if($_POST['search_form'] == $key){
					echo "<h4>{$key}:</h4>";
					foreach ($value as $key => $value) {
						echo "<h5>{$key} = {$value}C<h5>";
					}
					echo "<br>";
				}
			}
			return true;
		}else{
			return false;
		}
	}
		?>
        <form method="post">
            <select name="search_form">
                <option value="Пн">Пн</option>
                <option value="Вт">Вт</option>
                <option value="Ср">Ср</option>
                <option value="Чт">Чт</option>
                <option value="Пт">Пт</option>
                <option value="Сб">Сб</option>
                <option value="Вс">Вс</option>
                <option value="Все">Все</option>
            </select>
            <input type="submit" value="Поиск">
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST['search_form'])){
                if(!search($weather)){
                    viweInfo($weather);
                    averageValue($weather);
                }
            }
        }else{
            viweInfo($weather);
            averageValue($weather);
        }
        ?>
    </body>
</html>