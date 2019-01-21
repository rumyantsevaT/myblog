<?php
//ловим пользователя
//подключаем бд
require_once "pdo-db.php";
//var_dump($_POST);
//$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
var_dump($password);die;
$sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, $password)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":username", $_POST['username']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":password", $_POST['password']);
$statement->execute();
//var_dump($res);
header("Location: /cabinet.php");