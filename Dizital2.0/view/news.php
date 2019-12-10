<?php
class ViewNews{
	public static function NewsByCategory($arr){
		//print_r($arr);
		foreach ($arr as $value) {
			if($value['img']!=""){
			echo '<img src="data:images/jpeg;base64,'.base64_encode($value['img']).'" width=500 /><hr>';
		}
			echo "<h2>".$value['title']."</h2>";
			Controller::CommentsCount($value['id']);
			echo "<a class='read_more' href='news?id=".$value['id']."'>More</a><br><br>";
		}
	}
	public static function AllNews($arr){
		foreach ($arr as $value) {
			echo "<li>".$value['title'];
			Controller::CommentsCount($value['id']);
			echo "<a href='news?id=".$value['id']." ></a></li><br>";
		}
	}
	public static function ReadNews($n){
		echo "<h2>".$n['title']."<h2>";
		Controller::CommentsCountWithAncor($n['id']);
		echo '<br><img src="data:images/jpeg;base64,'.base64_encode($n['img']).'" width=500 /><br>';
		echo "<p>".$n['text']."</p>";
	}
}
?>