<?php
session_start();
$_SESSION['login'] = $_POST['username'];

//if(isset($_POST['username']) && (!empty($_POST['username']))) {
//	$name = $_POST['username'];
//	setcookie('username', $name);
//} else {
//	$name = 'Гость';
//}

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
			<h1>Вход в личный кабинет</h1>
			<p>Привет, <?= $name;?></p>
			<form action="reg.php" class="m-auto" method="POST">
				<div class="form-group">
					<label for="inputName">Имя</label>
					<input type="text" name="username" class="form-control" id="inputName" placeholder="Как к вам обращаться?">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email </label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Ваш email">
					<small id="emailHelp" class="form-text text-muted">Мы не передаем вашу личную информацию третьим лицам.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Придумайте пароль до 8 символов">
				</div>
				<button type="submit" class="btn btn-custom">Login</button>
			</form>
		</div>
		<!-- /.form-wrap -->
	</div>
<!-- /.container -->
	</div>
	<!--/.section .section-main-->
</body>
</html>
