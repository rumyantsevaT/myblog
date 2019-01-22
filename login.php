<?php


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
			<form action="reg.php" class="m-auto" method="POST">
				<div class="form-group">
					<label for="inputName">Имя</label>
					<input type="text" name="username" class="form-control" id="inputName" placeholder="Введите имя">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
				</div>
				<button type="submit" class="btn btn-custom">Войти</button>
			</form>
		</div>
		<!-- /.form-wrap -->
	</div>
<!-- /.container -->
	</div>
	<!--/.section .section-main-->
</body>
</html>
