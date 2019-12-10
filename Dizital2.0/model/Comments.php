<?php
class Comments{
	public static function insertComment($c,$id){
		$query="insert into 'comments'('id','nes_id','text','date') values (null,'".$id."','".$c."', current_timestamp)";
		$db=new Database();
		$q=$db->ececuteRun($query);
		return $q;
	}
	public static function getCommentByNewsID($id){
		$query="SELECT * FROM comments WHERE news_id=".(string)$id." ORDER BY id DESC";
		$db=new Database();
		$arr = $db->getAll($query);
		return $arr;
	}
	public static function getCommentsCountByNewsID($id){
		$query = "SELECT count(id) ad 'count' from comments where news_id=".(string)$id;
		$db=new Database();
		$c = $db->getOne($query);
		return $c;
	}
}
?>