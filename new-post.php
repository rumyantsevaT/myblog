<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS 4.1.3-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Мой блог за 30 дней</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
	<a class="navbar-brand" href="#">Rumyantseva-blog</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			</li>
		</ul>
		<span class="navbar-text"><button type="button" class="btn btn-outline-light">Регистрация</button></span>
	</div>
</div><!-- /.container -->
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Новая статья</h1>

            <form action="index.php" method="POST">
                <div class="form-group">
                    <label>Заголовок</label>
                    <input name="title" type="text" class="form-control" placeholder="Введите заголовок вашей статьи">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <textarea name="text" class="form-control" placeholder="Напишите несколько описательных фраз"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
		</div>
	</div>
</div>
</body>
</html>