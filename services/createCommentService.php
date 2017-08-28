<?php

include_once ("databaseService.php");

$user_id = $_POST['userId'];
$news_id = $_POST['newsId'];
$text = $_POST['text'];

$db->createComment($user_id,$news_id,$text);

header('Location: /pages/single-news.php?id='. $news_id);