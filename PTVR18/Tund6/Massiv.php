<h2>Example/1</h2>
<?php
$arr[0] = "HTML";
$arr[1] = "CSS";
$arr[2] = "PHP";

foreach ($arr as $key => $value) {
	echo $value.'<br/>';
}
?>
<hr>
<?php
function randomass($min,$max){
	for($i=0;$i<10;$i++){
		$randm[$i]=rand($min,$max);
	}
	return $randm;
}
function outputmass($randm){
	foreach ($randm as $key => $value)
	{
	echo 'Random number:'.$value. '<br>';
	}
}
function summmass($randm){
	$summa=array_sum($randm);
	echo 'Summa:',$summa;
}
function averagemass($randm){
	$arv=array_sum($randm)/10;
	echo '<br>Average:',$arv,'<hr>';
}
/*

function evennumbermass($randm){
	if (){
		echo "<br>Even number:";
		print_r($randm);
	}
}
function maxmass($randm){
	
}
function minmass($randm){
	
}
function avrminmax($randm){
	
}*/
function sortmax($randm){
	asort($randm);
	foreach ($randm as $key => $value)
	{
	echo 'Sortmax:'.$value. '<br>';
	}
	echo '<hr>';
}
function sortmin($randm){
	arsort($randm);
	foreach ($randm as $key => $value)
	{
	echo 'Sortmin:'.$value. '<br>';
	}
	echo '<hr>';
}
$randm=randomass(1,20);
outputmass($randm);
summmass($randm);
averagemass($randm);
//evennumbermass($randm);
//maxmass($randm);
//minmass($randm);
//avrminmax($randm);
sortmax($randm);
sortmin($randm);
?>