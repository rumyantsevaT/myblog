<?php
//try {
//	$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
//	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch (Exception $e) {
//	var_dump($e);
//	exit;
//}
//var_dump($_POST);die;
$short_content = substr($_POST['content'], 0, 30);
require "./database/QueryBuilder.php";

$db = new QueryBuilder();
$db->insert("breeds");
//обрезаем описание для вывода в кабинете
//var_dump($short_content);die;

// 2)sql запрос -запись в базу данных значения из формы со страницы create.php
//$sql = "INSERT INTO breeds (title, content, image, short_content) VALUES (:title, :content, :image, :short_content)";
//$statement = $pdo->prepare($sql);
//$statement->bindParam(":title", $_POST['title']);
//$statement->bindParam(":content", $_POST['content']);
//$statement->bindParam(":image", $_FILES['image']['name']);
//$statement->bindValue("short_content", $short_content);
//$statement->execute();

function uploadImage($image_file){
	$name_img = $image_file['name'];
	$tmp_name_img = $image_file['tmp_name'];
	move_uploaded_file($tmp_name_img, "uploads/" . $name_img);
}

uploadImage($_FILES['image']);

header("Location: /");exit;