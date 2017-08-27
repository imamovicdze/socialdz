<?php
/**
 * Created by PhpStorm.
 * User: imamo
 * Date: 27.8.2017.
 * Time: 14.49
 */

include_once ("databaseService.php");

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$db->createUser($name, $surname, $email, $password );
// inplement if fails (error message)
$id = $db->getLastInsertedId();

session_start();
$_SESSION["id"] = $id;
header('Location: ../pages/landing.php');

