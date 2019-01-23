<?php
session_start();
//Если форма авторизации отправлена...
if ( isset($_COOKIE['login']) ) {
	$login = $_COOKIE['login'];
} else {
	$login = 'Гость';
}

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
			<h1>Вход в личный кабинет </h1>
			<p>Привет, <?php echo $login; ?></p>
			<form action="auth.php" class="m-auto" method="POST">
				<div class="form-group">
					<label for="inputName">Имя</label>
					<input type="text" name="login" class="form-control" id="inputName" placeholder="Введите имя">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
				</div>
				<button type="submit" class="btn btn-custom">Войти</button>
				<div class="my-4">
					<p>Нет аккаунта? <a href="signup.php">Зарегистрируйтесь</a></p>
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
