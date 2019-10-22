<html>
    <head>
        <title>Задание 2</title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
        $news = [
            'Политика' => [
                'Настоящий протест — не в Москве.' => [
                    'Name' => 'Настоящий протест — не в Москве.',
                    'Author' => 'Сергей Мардан',
                    'TextNews' => 'Недавно в поселке Цигломень под Архангельском жители попытались устроить самосуд над человеком, который якобы терроризировал девочек и женщин и ограбил подростка. По версии следствия, несколько мужчин, проживающих в поселке, приехали к дому потерпевшего, избили его, засунули в багажник и отвезли на улицу Мира, где привязали к столбу.',
                    'img' => 'protest.jpg',
                ],
                'Захарова оценила слова Цукерберга о вмешательстве России в выборы США' => [
                    'Name' => 'Захарова оценила слова Цукерберга о вмешательстве России в выборы США',
                    'Author' => 'Рамиль Ситдиков',
                    'TextNews' => 'Официальный представитель МИД Мария Захарова прокомментировала слова главы Facebook Марка Цукерберга о вмешательстве России, Китая и Ирана в предстоящие президентские выборы США в 2020 году.',
                    'img' => 'cuker.jpg',
                ],
                'Партия премьер-министра Канады Трюдо лидирует на парламентских выборах' => [
                    'Name' => 'Партия премьер-министра Канады Трюдо лидирует на парламентских выборах',
                    'Author' => 'Сергец Мещеряков',
                    'TextNews' => 'Либеральная партия канадского премьера Джастина Трюдо набирает 35,5% (в 146 округах) на парламентских выборах. Их ближайший оппонент — Консервативная партия получает 32,8% (в 118 округах). Далее с большим отрывом следует Новая демократическая партия — 14,4%. «Квебекский блок» и Партия зеленых набирают около 7%. Таковы предварительные данные, которые публикует Канадская радиовещательная корпорация со ссылкой на данные избирательной комиссии.',
                    'img' => 'trudo.jpg',
                ],
            ],
            'Спорт' => [
                'Массовая драка произошла в Сочи на турнире ММА' => [
                    'Name' => 'Массовая драка произошла в Сочи на турнире ММА',
                    'Author' => 'Глеб Глобинский',
                    'TextNews' => 'Сразу после главного боя между представителями команд произошел конфликт, который перерос в массовую драку. Вчера в Сочи главным поединком вечера в рамках турнира по ММА Fight Nights Global 95 стал бой между россиянином Али Багаутиновым и представителем Казахстана Жалгасом Жумагуловым.',
                    'img' => 'draka.jpg',
                ],
                'Хавбек «Арсенала» высказался о поражении от «Шеффилд Юнайтед»' => [
                    'Name' => 'Хавбек «Арсенала» высказался о поражении от «Шеффилд Юнайтед»',
                    'Author' => 'Дмитрий Кунгуров',
                    'TextNews' => 'Полузащитник лондонского "Арсенала" Гранит Джака поделился мнением о результате матча девятого тура Английской премьер-лиги (АПЛ) с "Шеффилд Юнайтед", передает "Би-би-си". Встреча закончилась поражением "Арсенала" с минимальным счетом - 0:1.',
                    'img' => 'unai.jpg',
                ],
                'Леонид Слуцкий: «Ротором» руководят дебилы' => [
                    'Name' => 'Леонид Слуцкий: «Ротором» руководят дебилы',
                    'Author' => 'Максим Солодилов',
                    'TextNews' => 'Главный тренер Витесса Леонид Слуцкий рассказал о конфликтной ситуации, которая возникла после того, как его академия начала сотрудничать с Ротором. Слуцкий рассказал о том, что команды его академии перешли в академию Ротору, которому это было необходимо для получения лицензии для выступления в ФНЛ.',
                    'img' => 'slut.jpg',
                ],
            ],
        ];
        ?>
        <?php
        function viewMenu($arr){
            echo "<form method='post'>Поиск по части названия: <input type='search' name='search'><input type='submit' value='Поиск'></form>";
            echo "<form method='get'>
            </form>";

        }
        function viewNews($arr){
            if(!empty($_GET['user_pnews'])){
                if(empty($_GET['category'])){
                        if(!empty($_POST['search'])){
                            foreach ($arr as $key => $value) {
                                foreach ($value as $k => $v) {
                                    if($_GET['user_price_variable'] == 'Smaller'){
                                        if($_GET['text_news'] > $v['TextNews']){
                                            if($_POST['search'] == $v['Name']){
                                                echo "<div class='col-md-4 mb-5 mt-5 newssDiv'>
                                                <h3>{$v['Name']}</h3>
                                                <p>Автор: {$v['Author']}</p>
                                                <img src='img/{$v['img']}' width='400px'>
                                                <br><br>
                                                <p><span><b>{$v['TextNews']}</b></span></p>
                                                <a>Подробнее</a>
                                                </div>";                        
                                            }
                                        }
                                    }elseif ($_GET['user_price_variable'] == 'More'){
                                        if($_GET['user_news'] < $v['Name']){
                                            if($_POST['search'] == $v['TextNews']){
                                                echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                                <h3>{$v['Name']}</h3>
                                                <p>Автор: {$v['Author']}</p>
                                                <img src='img/{$v['img']}' width='400px'>
                                                <br><br>
                                                <p><span><b>{$v['TextNews']}</b></span></p>
                                                <a>Подробнее</a>
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
                                        if($_GET['user_news'] < $v['Name']){
                                            echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='400px'>
                                            <br><br>
                                            <p><span><b>{$v['TextNews']}</b></span></p>
                                            <a>Подробнее</a>
                                            </div>";
                                        }
                                    }elseif ($_GET['user_price_variable'] == 'More'){
                                        if($_GET['user_news'] < $v['Name']){
                                            echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='600px'>
                                            <br><br>
                                            <p><span><b>{$v['TextNews']}</b></span></p>
                                            <a>Подробнее</a>
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
                                        if($_POST['search'] == $v['Name']){
                                            echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                            <h3>{$v['Name']}</h3>
                                            <p>Автор: {$v['Author']}</p>
                                            <img src='img/{$v['img']}' width='400px'>
                                            <br><br>
                                            <p><span><b>{$v['TextNews']}</b></span></p>
                                            <a>Подробнее</a>
                                            </div>";
                                        }
                                    }   
                                }else{
                                    foreach ($value as $k => $v) {
                                        echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                        <h3>{$v['Name']}</h3>
                                        <p>Автор: {$v['Author']}</p>
                                        <img src='img/{$v['img']}' width='400px'>
                                        <br><br>
                                        <p><span><b>{$v['TextNews']}</b></span></p>
                                        <a>Подробнее</a>
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
                                    if($_POST['search'] == $v['Name']){
                                        echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                        <h3>{$v['Name']}</h3>
                                        <p>Автор: {$v['Author']}</p>
                                        <img src='img/{$v['img']}' width='400px'>
                                        <br><br>
                                        <p><span><b>{$v['TextNews']}</b></span></p>
                                        <a>Подробнее</a>
                                        </div>";                        
                                    }
                                }
                            }
                        }else{
                            foreach ($arr as $key => $value) {
                                foreach ($value as $k => $v) {
                                    echo "<div class='col-md-4 mb-5 mt-5 newsDiv'>
                                    <h3>{$v['Name']}</h3>
                                    <p>Автор: {$v['Author']}</p>
                                    <img src='img/{$v['img']}' width='400px'>
                                    <br><br>
                                    <p><span;'><b>{$v['TextNews']}</b></span></p>
                                    <a>Подробнее</a>
                                    </div>";
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
                viewMenu($news);
                ?>               
            </div>
        </div>
        <div class="row">
            <?php
                viewNews($news);
                /*Не доделал дизайн и ссылки!!!!!!!!!!!!!*/
            ?>
        </div>
    </body>
</html>
