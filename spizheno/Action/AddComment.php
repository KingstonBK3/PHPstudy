<?php
if(isset($_POST['text']) and isset($_POST['name'])){
    if(isset($_GET['id'])){
        require_once '../config/config_require.php';
        require_once $core_classes_actions['addComment'];
        if(Comments::addComments($connect, $_POST, $_GET['id']) != 'no_data'){
            Comments::redirect($_GET['id']);
        }else{
            header("Location: ../single-news.php?id={$_GET['id']}&error=no_data");
        }

    }else{
        header('Location: single-news.php?error=no_get');
    }
}else{
    header('Location: single-news.php?error=no_post');
}

