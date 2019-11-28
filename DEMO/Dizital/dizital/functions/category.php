<?php
/*class Category
{
    public $arr_category;
    public function __construct($connect)
    {
        $query = mysqli_query($connect, "SELECT * FROM category");
        $arr = [];
        while ($result = mysqli_fetch_assoc($query)){
            $arr[] = $result;
        }
        $this->arr_category = $arr;
    }
    public function getArrCategory(){
        return $this->arr_category;
    }
}*/
function get_category($link)
{
    $sql = "SELECT * FROM category";

    $result = mysqli_query($link,$sql);

    $categories = mysqli_fetch_all($result, 1);

    return $categories;
}
$categories = get_category($link);