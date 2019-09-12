<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Задание 1</h1>
	<p>Создать программу-калькулятор.
	Пользователь вводит 2 числа, выбирает из списка арифметический оператор (сложение, вычитание, умножение, деление) и после нажатия на кнопку ОК получает результат. (Проверка при деление на 0)</p>
	<hr>
	<form method="post">
            <h1>Программа-калькулятор</h1>
            <p>Введите первое число: <input name="first" type="text"></p>
            <p>Введите второе число: <input name="second" type="text"></p>
            <p>Выберите операцию:
            <select name="act">
                <option value="y">Умножение</option>
                <option value="d">Деление</option>
                <option value="s">Сложение</option>
                <option value="v">Вычитание</option>
            </select>
            <p><input type='submit' value="Отправить"></p>
            </p>
        </form>
        <hr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first = $_POST['first'];
            $second = $_POST['second'];
            $act = $_POST['act'];
            if ($act == "y"){
               $result = $first * $second;
               echo "Результат: ",$first,"*",$second," = ",$result;
            }
            elseif ($act == "d") {
                $result = $first / $second;
                if ($second == 0){
                    echo "Делить на ноль нельзя","<br>";
                }
                echo "Результат: ", $first, "/", $second," = ",$result;
                
            }
            elseif ($act == "s") {
                $result = $first + $second;
                echo "Результат: ", $first,"+",$second," = ",$result;
            }
            elseif ($act == "v") {
                $result = $first - $second;
                echo "Результат: ", $first, "-", $second," = ",$result ;
            }
            
                    
       }
     ?>
    </body>
</html>