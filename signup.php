<?php
session_start();

//$_SESSION['login'] = $_POST['username'];



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
			<form action="registration.php" class="m-auto" method="POST">
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
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Придумайте пароль">
				</div>
				<button name="do_signup" type="submit" class="btn btn-custom">Зарегистрироваться</button>
				<div class="my-4">
					<p>Уже зарегистрированы? Авторизуйтесь <a href="login.php">Вход</a></p>
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
