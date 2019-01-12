<?php
//отловить $_POST переданные данные
//var_dump($_FILES['image']['tmp_name']);die;
//var_dump($_FILES['image']['name']);die;
//1) Соединиться с бд
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc", "root", "root");

// 2)sql запрос -запись в базу данных значения из формы со страницы create.php
$sql = "INSERT INTO breeds (title, content, image) VALUES (:title, :content, :image)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$statement->bindParam(":image", $_FILES['image']);
$statement->execute();
$statement->fetchAll(PDO::FETCH_ASSOC);

//imgMoveTo();
//
//function imgMoveTo(){
//	$name_img = $_FILES['image']['name'];
//	$tmp_name_img = $_FILES['image']['tmp_name'];
//	move_uploaded_file($tmp_name_img, "uploads/" . $name_img);
//}


//header("Location: /myblog.loc");exit;
