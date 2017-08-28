<?php

include_once ('databaseService.php');

$id = $_POST['id'];

$isSuccess = $db->deleteNewsById($id);

if($isSuccess){
    echo "success";
}
else{
    echo "error";
}