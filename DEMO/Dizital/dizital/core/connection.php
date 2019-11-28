<?php
/*$host = 'localhost'; // адрес сервера 
$database = 'dizital'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
	
define("DB_HOST", "host");
define("DB_USER", "user");
define("DB_PASSWORD", "password");
define("DB_DATABASE", "database");
*/
$link = mysqli_connect('localhost','root','','dizital');
 
if (mysqli_connect_errno()) {
 	echo 'Ошибка при подключении к базе данных ('.mysqli_connect_errno().'): '.mysql_connect_error();
 	exit();
 }
