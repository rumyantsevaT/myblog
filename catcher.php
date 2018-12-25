<?php
//отловить $_POST переданные данные

//1) Соединиться с бд
$pdo = new PDO("mysql:host = localhost; dbname = posts", "root", "root");

// 2)sql запрос вставка в базу данных значения из формы
$sql = "INSERT INTO posts (title, text) VALUES (:title, :text)";

$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header("Location: /myblog.loc/index.php"); exit;