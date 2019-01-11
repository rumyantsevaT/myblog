<?php
// удаляем записть из бд
$pdo = new PDO("mysql:host=localhost; dbname=myblog.loc", "root", "root");
$sql = "DELETE FROM breeds WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();

header("Location: /myblog.loc"); exit;
?>