<?php
//отловить $_POST переданные данные
//var_dump($_POST);
//1) Соединиться с бд
//$pdo = new PDO("mysql:host=localhost; dbname = myblog.loc", "root", "root");

// 2)sql запрос вставка в базу данных значения из формы
//$sql = "INSERT INTO posts (title, text) VALUES (:title, :text)";

//$statement = $pdo->prepare("INSERT INTO posts (title, text) VALUES (:title, :text)");
//$statement->bindValue(":title", $_POST['title']);
//$statement->bindValue(":text", $_POST['text']);
//$result = $statement->execute();
//$statement->fetchAll(PDO::FETCH_ASSOC);
//
//var_dump($result);
//header("Location: /index.php");exit;


// 1 вариант от Толика
//$pdo = new PDO("mysql:host=localhost; dbname = myblog.loc", "root", "root");
//
//// 2)sql запрос вставка в базу данных значения из формы
//$sql = "INSERT INTO posts (title, text) VALUES (:title, :text)";
//
//$statement = $pdo->prepare($sql);
//$statement->bindValue(':title', $_POST['title']);
//$statement->bindValue(':text', $_POST['text']);
//$statement->execute();
//
//header("Location: /index.php");


// 2 вариант от Толика
$pdo = new PDO("mysql:host=localhost; dbname = myblog.loc", "root", "root");
var_dump($pdo);

// 2)sql запрос вставка в базу данных значения из формы
//$sql = "INSERT INTO posts (title, text) VALUES (:title, :text)";

$statement = $pdo->prepare("INSERT INTO posts (title, text) VALUES (:title, :text)");
$statement->bindValue(":title", $_POST['title']);
$statement->bindValue(":text", $_POST['text']);
$statement->execute();
var_dump($statement);
var_dump($_POST);

//header("Location: /index.php");