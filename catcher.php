<?php
//отловить $_POST переданные данные
//var_dump($_POST);die;
//1) Соединиться с бд
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc", "root", "root");

// 2)sql запрос -запись в базу данных значения из формы со страницы create.php
$sql = "INSERT INTO breeds (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$statement->execute();
$statement->fetchAll(PDO::FETCH_ASSOC);

header("Location: /myblog.loc");exit;
