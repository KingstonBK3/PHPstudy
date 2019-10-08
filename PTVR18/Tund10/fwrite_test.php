<?php
/*$a=fopen("text.txt", "w");
fwrite($a,"Hello World! \n");
fwrite($a, "08/10/2019 \n");
fclose($a);

$a=fopen("text.txt", "r");
while ($line=fgets($a,4096)) {
	echo $line,"<br>";
}
fclose($a);

echo "<hr>";

file_put_contents("file.txt","translit hueta dla daunov", FILE_APPEND);

$arr=file("text.txt");
/*foreach ($arr as $line) {
	echo $line;
}
print_r($arr);

echo "<hr>";*/
if (isset($_POST['massege_button']))
{
	//Данные
	$name='Vasja';
	$msg='Users massege';
	$date=date('d.m.Y H:i:s');

	$line="$msg|$name|$date\n";

	//Запись
	file_put_contents('database.txt', $line, FILE_APPEND);
}
?>
<form method="post">
	Введите имя:<br>
	<input type="text" name="name"><br><br>

	Введите сообщение:<br>
	<textarea name="massege"></textarea><br><br>

	<input type="submit" name="massege_button" value="Отправить сообщение">
</form>
<?php
/*$file1=file('database.txt');

foreach ($file1 as $line) {
	$info=explode('|', $line);
	echo $info[0], '<br>',$info[1],'<br',$info[2],'<br><br>';*/
?>