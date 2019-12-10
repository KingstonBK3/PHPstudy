<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];
if($path == '' OR $path == 'index' OR $path = 'index.php'){
    $response = Controller::StartSite();
}
elseif($path =='all'){
    $response = Controller::AllNews();
}
elseif ($path == 'category' and isset($_GET['id'])) {
	$response = Controller::NewsByCAtID($_GET['id']);
}
elseif ($path == 'news' and isset($_GET['id'])) {
	$response = Controller::NewsByID($_GET['id']);
}
elseif ($path == 'insertcomment' and isset($_GET['comments'],$_GET['id'])) {
	$response = Controller::insertcomment($_GET['comment'],$_GET['id']);
}
else{
	$response = Controller::error404();
}