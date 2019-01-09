<?php
//отловить $_POST переданные данные

//1) Соединиться с бд
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc", "root", "root");

// 2)sql запрос вставка в базу данных значения из формы
//$sql = "INSERT INTO posts (title, text) VALUES (:title, :text)";
$statement = $pdo->prepare("INSERT INTO breeds (title, content) VALUES (:title, :content)");
$statement->bindValue(":title", $_POST['title']);
$statement->bindValue(":content", $_POST['content']);
$statement->execute();
$statement->fetchAll(PDO::FETCH_ASSOC);

header("Location: /myblog.loc");exit;
