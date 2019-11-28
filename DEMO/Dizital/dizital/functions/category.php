<?php
function get_category()
{   
    global $link;

    $sql = "SELECT * FROM category";

    $result = mysqli_query($link,$sql);

    $categories = mysqli_fetch_all($result, 1);

    return $categories;
}
function get_news()
{
    global $link;
    $sql="SELECT * FROM news";

    $result = mysqli_query($link,$sql);

    $news= mysqli_fetch_all($result, 1);

    return $news;
}