<?php
echo "<li class='filter' data-role='button'><a class='filter' href='all'>All</a></li><br>";
foreach ($arr as $value){
    echo "<li class='filter' data-role='button'>
    <a class='filter' href='category?id=".$value['id']."'>".$value['name'].'</a></li><br>';
}