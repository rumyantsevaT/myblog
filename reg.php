<?php
session_start();
//var_dump($_SESSION, $_COOKIE);die;
//ловим пользователя
//подключаем бд
require_once "database/pdo-db.php";
//var_dump($_POST);
//$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":username", $_POST['username']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":password", $password);
$statement->execute();
//var_dump($password);die;

header("Location: /cabinet.php");

