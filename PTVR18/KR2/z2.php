<html>
    <head>
        <title>Задание 1. Погода</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
        $books = [
            'Фантастика' => [
                'Гарри Поттер и Кубок Огня' => [
                    'Name' => 'Гарри Поттер и Кубок Огня',
                    'Author' => 'Дж. К. Роулинг',
                    'Price' => 20.9,
                    'img' => 'potter.jpg',
                ],
                'Песнь льда и пламени' => [
                    'Name' => 'Песнь льда и пламени',
                    'Author' => 'Джордж Мартин',
                    'Price' => 40.9,
                    'img' => 'Pesen.jfif',
                ],
                'Властелин колец' => [
                    'Name' => 'Властелин колец',
                    'Author' => 'Джон Толкин',
                    'Price' => 25.9,
                    'img' => 'Lord.jfif',
                ],
            ],
            'Роман' => [
                'Метро 2033' => [
                    'Name' => 'Метро 2033',
                    'Author' => 'Дмитрий Глуховский',
                    'Price' => 10.9,
                    'img' => 'Metro.jpg',
                ],
                'Метро 2034' => [
                    'Name' => 'Метро 2034',
                    'Author' => 'Дмитрий Глуховский',
                    'Price' => 20.9,
                    'img' => 'Metro2.jfif',
                ],
                'Метро 2035' => [
                    'Name' => 'Метро 2035',
                    'Author' => 'Дмитрий Глуховский',
                    'Price' => 40.9,
                    'img' => 'Metro3.jpg',
                ],
            ],
            'Приключение' => [
                'Ведьмак: Дорога, откуда не возвращаются' => [
                    'Name' => 'Ведьмак: Дорога, откуда не возвращаются',
                    'Author' => 'Анджей Сапковский',
                    'Price' => 30.9,
                    'img' => 'Witcher1.jpg',
                ],
                'Ведьмак: Последнее желание' => [
                    'Name' => 'Ведьмак: Последнее желание',
                    'Author' => 'Анджей Сапковский',
                    'Price' => 35.9,
                    'img' => 'Witcher2.jpg',
                ],
                'Ведьмак: Меч предназначения' => [
                    'Name' => 'Ведьмак: Меч предназначения',
                    'Author' => 'Анджей Сапковский',
                    'Price' => 40.9,
                    'img' => 'Witche3.jpg',
                ],
            ],
        ];
        ?>
        <?php
        function viewMenu($arr){
            echo "<form method='post'>Поиск по автору: <input type='search' name='search'><input type='submit' value='Поиск'></form>";
            echo "<form method='get'>
            <input type='text' name='user_price'>
            <select name='user_price_variable'>
                <option value='Smaller'>Меньше</option>
                <option value='More'>Больше</option>
            </select>
            <input type='submit' value='Поиск'>
            </form>";

        }
        function viewBook($arr){
            if(!empty($_GET['user_price'])){
                if(empty($_GET['category'])){
                        if(!empty($_POST['search'])){
                            foreach ($arr as $key => $value) {
                                foreach ($value as $k => $v) {
                                    if($_GET['user_price_variable'] == 'Smaller'){
                                        if($_GET['user_price'] > $v['Price']){
                                            if($_POST['search'] == $v['Author']){
                                                echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                                <h3>{$v['Name']}</h3>
                                                <p>Автор: {$v['Author']}</p>
                                                <img src='img/{$v['img']}' width='200px'>
                                                <br><br>
                                                <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                                <a>Купить</a>
                                                </div>";                        
                                            }
                                        }
                                    }elseif ($_GET['user_price_variable'] == 'More'){
                                        if($_GET['user_price'] < $v['Price']){
                                            if($_POST['search'] == $v['Author']){
                                                echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                                <h3>{$v['Name']}</h3>
                                                <p>Автор: {$v['Author']}</p>
                                                <img src='img/{$v['img']}' width='200px'>
                                                <br><br>
                                                <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                                <a>Купить</a>
                                                </div>";                        
                                            }
                                        }
                                    }
                                    
                                }
                            }
                        }else{
                            foreach ($arr as $key => $value) {
                                foreach ($value as $k => $v) {
                                    if($_GET['user_price_variable'] == 'Smaller'){
                                        if($_GET['user_price'] > $v['Price']){
                                            echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='200px'>
                                            <br><br>
                                            <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                            <a>Купить</a>
                                            </div>";
                                        }
                                    }elseif ($_GET['user_price_variable'] == 'More'){
                                        if($_GET['user_price'] < $v['Price']){
                                            echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='200px'>
                                            <br><br>
                                            <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                            <a>Купить</a>
                                            </div>";
                                        }
                                    }
                                    
                                }
                            }
                        }
                    }else{
                        foreach ($arr as $key => $value) {
                            if($_GET['category'] == $key){
                                if(!empty($_POST['search'])){
                                    foreach ($value as $k => $v) {
                                        if($_POST['search'] == $v['Author']){
                                            echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='200px'>
                                            <br><br>
                                            <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                            <a>Купить</a>
                                            </div>";
                                        }
                                    }   
                                }else{
                                    foreach ($value as $k => $v) {
                                        echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                        <h3>{$v['Name']}</h3>
                                        <p>Автор: {$v['Author']}</p>
                                        <img src='img/{$v['img']}' width='200px'>
                                        <br><br>
                                        <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                        <a>Купить</a>
                                        </div>";
                                    }
                                }
                            }
                        }       
                    }       
            }else{
                if(empty($_GET['category'])){
                        if(!empty($_POST['search'])){
                            foreach ($arr as $key => $value) {
                                foreach ($value as $k => $v) {
                                    if($_POST['search'] == $v['Author']){
                                        echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                        <h3>{$v['Name']}</h3>
                                        <p>Автор: {$v['Author']}</p>
                                        <img src='img/{$v['img']}' width='200px'>
                                        <br><br>
                                        <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                        <a>Купить</a>
                                        </div>";                        
                                    }
                                }
                            }
                        }else{
                            foreach ($arr as $key => $value) {
                                foreach ($value as $k => $v) {
                                    echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                    <h3>{$v['Name']}</h3>
                                    <p>Автор: {$v['Author']}</p>
                                    <img src='img/{$v['img']}' width='200px'>
                                    <br><br>
                                    <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                    <a>Купить</a>
                                    </div>";
                                }
                            }
                        }
                    }else{
                        foreach ($arr as $key => $value) {
                            if($_GET['category'] == $key){
                                if(!empty($_POST['search'])){
                                    foreach ($value as $k => $v) {
                                        if($_POST['search'] == $v['Author']){
                                            echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='200px'>
                                            <br><br>
                                            <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                            <a>Купить</a>
                                            </div>";
                                        }
                                    }   
                                }else{
                                    foreach ($value as $k => $v) {
                                        echo "<div class='col-md-4 mb-5 mt-5 booksDiv'>
                                        <h3>{$v['Name']}</h3>
                                        <p>Автор: {$v['Author']}</p>
                                        <img src='img/{$v['img']}' width='200px'>
                                        <br><br>
                                        <p>Цена: <span style='color:red;'><b>{$v['Price']}</b></span>$</p>
                                        <a>Купить</a>
                                        </div>";
                                    }
                                }
                            }
                        }       
                    }       
            }
            
            
            
        }

                ?>
        <div class="row">
            <div class="col-md-12 menuAll">
                <?php
                viewMenu($books);
                ?>               
            </div>
        </div>
        <div class="row">
            <?php
                viewBook($books);
                /*Не доделал дизайн и ссылки!!!!!!!!!!!!!*/
            ?>
        </div>
    </body>
</html>
