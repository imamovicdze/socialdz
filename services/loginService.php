<?php
/**
 * Created by PhpStorm.
 * User: imamo
 * Date: 27.8.2017.
 * Time: 16.10
 */

include_once ('databaseService.php');

$email = $_GET['email'];
$password = $_GET['password'];

$user = $db->getUserByEmail($email);
if(empty($user)){
    header('Location: ../pages/login.php?message=This%20user%20doesent%20exist%20please%20register');
    exit();
}else{
    if(password_verify($password,$user['password'])){
        session_start();
        $_SESSION["id"] = $user['ID'];
        header('Location: ../pages/landing.php');
        exit();
    }else{
        header('Location: ../pages/login.php?message=The%20password%20is%20incorrect%20');
        exit();
    }
}


