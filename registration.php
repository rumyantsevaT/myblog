<?php
//session_start();
//var_dump($_SESSION, $_COOKIE);die;
//ловим пользователя

if(isset($_POST['username']) && (!empty($_POST['username']))) {
	$username = $_POST['username'];
	setcookie('username', $username);
} elseif ( isset($_COOKIE['username']) ) {
	$username = $_COOKIE['username'];
} else {
	$username = 'Гость';
}
//подключаем бд
require_once "database/pdo-db.php";

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

