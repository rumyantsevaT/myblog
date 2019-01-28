<?php
session_start();
$login = $_POST['login'];
var_dump($login);
//if ( isset($_SESSION['login'])  &&  !empty($_SESSION['login']) ) {
//	$login = $_SESSION['login'];
//	echo $login;
//}

if ( isset($_COOKIE['login']) ) {
	$login = $_COOKIE['login'];
} else {
	$login = 'Гость';
}
//подключаем бд
require_once "database/pdo-db.php";

//$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO users (login, email, password) VALUES (:login, :email, :password)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":login", $_POST['login']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":password", $password);
$statement->execute();
//var_dump($password);die;
//header("Location: /cabinet.php");
?>
<!doctype html>
<html lang="ru">
<!--<head>-->
<?php include "web/head.html"; ?>

<body>
<!--header navigation-->
<?php include "web/nav.html"; ?>

<div class="section section-main">
	<div class="container">
		<div class="form-wrap">
			<h1>Регистрация</h1>
			<p>Привет, <?php echo $_SESSION['login']; ?></p>
			<form action="registration.php" class="m-auto" method="POST">
<!--			<form action="signup.php" class="m-auto" method="POST">-->
				<div class="form-group">
					<label for="inputName">Имя</label>
					<input type="text" name="login" class="form-control" id="inputName" placeholder="Как к вам обращаться?">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email </label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Ваш email">
					<small id="emailHelp" class="form-text text-muted">Мы не передаем вашу личную информацию третьим лицам.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Придумайте пароль">
				</div>
				<button name="do_signup" type="submit" class="btn btn-custom">Зарегистрироваться</button>
				<div class="my-4">
					<p>Уже зарегистрированы? <a href="login.php">Авторизуйтесь</a></p>
				</div>
			</form>
		</div>
		<!-- /.form-wrap -->
	</div>
<!-- /.container -->
	</div>
	<!--/.section .section-main-->
</body>
</html>
