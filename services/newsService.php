<?php
/**
 * Created by PhpStorm.
 * User: imamo
 * Date: 27.8.2017.
 * Time: 17.00
 */

include_once ('databaseService.php');

$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];

var_dump($title,$content,$category);

$db->createNews($title,$content,$category);
// inplement if fails (error message)
header("Location: ../pages/news.php?message=New%20is%20created%20successfully!");