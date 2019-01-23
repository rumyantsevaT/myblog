<?php
session_start();
//ловим пользователя

if( isset($_POST['login']) && (!empty($_POST['login']))) {
	$login = $_POST['login'];
	setcookie('login', $login);
} elseif ( isset($_COOKIE['login']) ) {
	$login = $_COOKIE['login'];
} else {
	$login = 'Гость';
}
//подключаем бд
require_once "database/pdo-db.php";

//$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
//хешируем пароль
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO users (login, email, password) VALUES (:login, :email, :password)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":login", $_POST['login']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":password", $password);
$statement->execute();

header("Location: /cabinet.php");

