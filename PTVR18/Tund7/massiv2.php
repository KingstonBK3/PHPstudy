<h1>Задание1</h1>
<?php
$rrr["Veebirakenduste loomise alused"]="PeHePe";
$rrr["Vorkeel"]="English language";

foreach ($rrr as $key => $value) {
	echo '<a href="massiv2.php?id=',$key,'">',$key,'</a><br>';
}
if (isset($_GET["id"]))
	foreach ($rrr as $key => $value){
	if ($_GET["id"]==$key)
		echo '<p>',$value,'</p>';
	}
?>
<hr>
<h1>Задание2</h1>
<?php
$bluda=["Борщ","Манная каша","Творог"];
$sumblud=[1.50,1.25,1.00];
print_r($bluda);
echo'<br>';
print_r($sumblud);
?>
