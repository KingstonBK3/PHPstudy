<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<?php
		$weather = [
			'Январь' => [],
			'Февраль' => [],
			'Март' => [],
			'Апрель' => [],
			'Май' => [],
			'Июнь' => [],
			'Июль' => [],
			'Август' => [],
			'Сентябрь' => [],
			'Октябрь' => [],
			'Декабрь' => [],
			'Ноябрь' => [],
		];


		foreach ($weather as $key => $value) {
			if($key == 'Февраль'){
				for ($i=0; $i <= 29 ; $i++) { 
					$random = rand(-20,0);
					array_push($weather[$key], $random);
				}
			}elseif($key == 'Январь' or $key == 'Март' or $key == 'Июль' or $key == 'Май' or $key == 'Август' or $key == 'Октябрь' or $key == 'Декабрь'){
				if($key == 'Январь' or $key == 'Декабрь'){
					for ($i=0; $i <= 31 ; $i++) { 
						$random = rand(-20,0);
						array_push($weather[$key], $random);
					}
				}elseif ($key == 'Март' or $key == 'Июль' or $key == 'Май' or $key == 'Август') {
					for ($i=0; $i <= 31 ; $i++) { 
						$random = rand(0,25);
						array_push($weather[$key], $random);
					}
				}else{
					for ($i=0; $i <= 31 ; $i++) { 
						$random = rand(0,12);
						array_push($weather[$key], $random);
					}
				}
				
			}elseif($key == 'Апрель' or $key == 'Июнь' or $key == 'Сентябрь' or $key == 'Ноябрь'){
				if($key == 'Апрель' or $key == 'Июнь'){
					for ($i=0; $i <= 30 ; $i++) { 
						$random = rand(0,25);
						array_push($weather[$key], $random);
					}
				}else{
					for ($i=0; $i <= 30 ; $i++) { 
						$random = rand(0,12);
						array_push($weather[$key], $random);
					}
				}
			}
		}

		$str = '';
		foreach ($weather as $key => $value) {
			$mounth = $key;
			foreach ($value as $key => $value) {
				$str = $str . ' ' . $value;	
			} 
			$str = $mounth . " : " . $str . PHP_EOL;
			file_put_contents('weather.txt', $str,  FILE_APPEND);
			$str = '';
		} 

    	?>
    	<?php
		$weather = file('weather.txt');
		foreach ($weather as $key => $value) {
			$info = explode(':', $value);
			$info[0] = preg_replace('/\s+/', '', $info[0]);
			$info[1] = preg_replace('/\s+/', ', ', $info[1]);
			$info[1] = ltrim($info[1], ',');
			$info[1] = rtrim($info[1], ', ');
			$weather_list[$info[0]] = $info[1];
			$weather_list2[$info[0]] = explode(',', $info[1]);	
		}
		function viewAllInfo($arr){
			echo "<div class='row'>";
				foreach ($arr as $key => $value) {
					echo "<div class='col-md-6'>";
						echo "<h4>{$key}</h4>";
						echo "<p>Значения температур: {$value}</p>";
						echo "<br>";
					echo "</div>";
				}
			echo "</div>";
		}
		function viewMenu($arr){
			echo "<a href='weather.php'>Все</a>";
			echo "<form method='get'>";
				echo "<select name='mounth_search'>";
					foreach ($arr as $key => $value) {
					    echo "
							<option value='$key'>{$key}</option>
					    ";   
				}

				echo "</select>";
				echo "<button type='submit'>Найти</button>";
			echo "</form>";
			echo "<form method='get'>";
				echo "<select name='timeOfYear_search'>";
				    echo "
						<option value='Лето'>Лето</option>
						<option value='Осень'>Осень</option>
						<option value='Зима'>Зима</option>
						<option value='Весна'>Весна</option>
				    ";   
				echo "</select>";
				echo "<button type='submit'>Найти</button>";
			echo "</form>";
			echo "<form method='get'>";
				echo "<input type='date' name='date_search'>";
				echo "<button type='submit'>Найти</button>";
			echo "</form>";
			echo "<a href='weather.php?tepl=true'>Самая теплая температура</a><br>";
			echo "<a href='weather.php?hold=true'>Самая низкая температура</a><br>";
			echo "<a href='weather.php?sred=true'>Среднее значени по каждому месяцу</a>";

		}
		function viewMounthInfo($arr){
			echo "<div class='row'>";
				foreach ($arr as $key => $value) {
					if($_GET['mounth_search'] == $key){
						echo "<div class='col-md-6'>";
						echo "<h4>{$key}</h4>";
						echo "<p>Значения температур: {$value}</p>";
						echo "<br>";
						echo "</div>";
					}
				}
			echo "</div>";
		}
		function viewTimeOfYearhInfo($arr){
			echo "<div class='row'>";
				foreach ($arr as $key => $value) {
					if($_GET['timeOfYear_search'] == 'Зима'){
						if($key == 'Январь' or $key == 'Декабрь' or $key == 'Февраль'){
							echo "<div class='col-md-6'>";
							echo "<h4>{$key}</h4>";
							echo "<p>Значения температур: {$value}</p>";
							echo "<br>";
							echo "</div>";
						}
					}elseif($_GET['timeOfYear_search'] == 'Осень'){
						if($key == 'Октябрь' or $key == 'Сентябрь' or $key == 'Ноябрь'){
							echo "<div class='col-md-6'>";
							echo "<h4>{$key}</h4>";
							echo "<p>Значения температур: {$value}</p>";
							echo "<br>";
							echo "</div>";
						}
					}elseif($_GET['timeOfYear_search'] == 'Лето'){
						if($key == 'Июль' or $key == 'Июнь' or $key == 'Август'){
							echo "<div class='col-md-6'>";
							echo "<h4>{$key}</h4>";
							echo "<p>Значения температур: {$value}</p>";
							echo "<br>";
							echo "</div>";
						}
					}elseif($_GET['timeOfYear_search'] == 'Весна'){
						if($key == 'Май' or $key == 'Апрель' or $key == 'Март'){
							echo "<div class='col-md-6'>";
							echo "<h4>{$key}</h4>";
							echo "<p>Значения температур: {$value}</p>";
							echo "<br>";
							echo "</div>";
						}
					}
				}
			echo "</div>";
		}
		function date_search($arr){
			$date = $_GET['date_search'];
			//echo $date . '<br>';
			$mounth = substr($date, 0,7);
			$mounth = substr($mounth, -2);
			$day = substr($date,-2);
			echo "<div class='row'>";
				foreach ($arr as $key => $value) {
					if($mounth == '12'){
						if($key == 'Декабрь'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '01'){
						if($key == 'Январь'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '02'){
						if($key == 'Февраль'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '03'){
						if($key == 'Март'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '04'){
						if($key == 'Апрель'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '05'){
						if($key == 'Май'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '06'){
						if($key == 'Июнь'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '07'){
						if($key == 'Июль'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '08'){
						if($key == 'Август'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '09'){
						if($key == 'Сентябрь'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '10'){
						if($key == 'Октябрь'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}
						}
					}
					if($mounth == '11'){
						if($key == 'Ноябрь'){
							foreach ($value as $k => $v) {
								if($day == $k){
									echo "<div class='col-md-6'>";
									echo "<h4>{$key}</h4>";
									echo "<p>Значения температур: {$v}</p>";
									echo "<br>";
									echo "</div>";

								}
							}				}
					}
				}
			echo "</div>";
		}
		function tepl($arr){
			$max = 0;	
			$day = [];
			echo "<div class='row'>";
				foreach ($arr as $key => $value) {
					foreach ($value as $k => $v) {
						if($v > $max){
							$max = $v;
							$day[$key] = $max;
						}
					}	
				}
				foreach ($day as $key => $value) {
					echo "<div class='col-md-6'>";
					echo "<h4>Самые теплые температуры были в: </h4>";
					echo "<h5>{$key}</h5>";
					echo "<p>Значения температур: $value</p>";
					echo "<br>";
				echo "</div>";
				}
			echo "</div>";
		}
		function hold($arr){
			$max = 0;	
			$day = [];
			echo "<div class='row'>";
				foreach ($arr as $key => $value) {
					foreach ($value as $k => $v) {
						if($v < $max){
							$max = $v;
							$day[$key] = $max;
						}
					}	
				}
				foreach ($day as $key => $value) {
					echo "<div class='col-md-6'>";
					echo "<h4>Самые низкие температуры были в: </h4>";
					echo "<h5>{$key}</h5>";
					echo "<p>Значения температур: $value</p>";
					echo "<br>";
				echo "</div>";
				}
			echo "</div>";
		}
		function sred($arr){
			$sred_arr = [];
			echo "<div class='row'>";
					foreach ($arr as $key => $value) {
						$sred = 0;
						$count = count($value);
						foreach ($value as $k => $v) {
							$sred = $sred + $v;
							
						}	
						$sred = $sred / $count;
						$sred = round($sred,2);
						$sred_arr[$key] = $sred;
					}

					foreach ($sred_arr as $key => $value) {
						echo "<div class='col-md-6'>";
						echo "<h5>{$key}</h5>";
						echo "<p>Среднее значение температуры: $value</p>";
						echo "<br>";
					echo "</div>";
					}
			echo "</div>";	
		}
    	?>
	    <?php
	    viewMenu($weather_list);
	    if(!empty($_GET)){
	    	if (isset($_GET['mounth_search'])) {
	    		viewMounthInfo($weather_list);
	    	}elseif(isset($_GET['timeOfYear_search'])){
	    		viewTimeOfYearhInfo($weather_list);
	    	}elseif(isset($_GET['tepl'])){
	    		tepl($weather_list2);
	    	}elseif(isset($_GET['hold'])){
	    		hold($weather_list2);
	    	}elseif(isset($_GET['sred'])){
	    		sred($weather_list2);
	    	}elseif(isset($_GET['date_search'])){
	    		date_search($weather_list2);
	    	}else{
	    		viewAllInfo($weather_list);
	    	}	
	    }else{
	    	viewAllInfo($weather_list);
	    }

	    ?>
    </body>
</html>