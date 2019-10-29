<?php
include_once 'class.php';
class ReadFromFile
{
	
	public static function readtxt()
	{
		$allcat=array();
		$file('test.txt');
			foreach ($file as $line) {
				$info=explode('|', $line);
				$allcat=new Categooria($info[0],$info[1],$info[2]);
			}
	return $allcat;
	}


	public static function createLinks(){
		$cats=ReadfromFile:readtxt();
		foreach ($cats as $c){
			if ($c->getId()==id)	
			echo '<a href="index.php?id='.$c->getId().':>'.$c->getName().'</a> <br>';
		}
	}
}
?>