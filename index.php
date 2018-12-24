<?php
var_dump($_POST);

$pdo = new PDO("mysql:host = localhost; dbname = posts", "root", "root");
$statement = $pdo->prepare("SELECT * FROM posts");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
?>

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
        <a class="navbar-brand" href="/localhost/myblog.loc">Rumyantseva-blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Новости<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="new-post.php">Написать статью</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Отредактировать статью</a>
                </li>
            </ul>
            <span class="navbar-text"><button type="button" class="btn btn-outline-light">Регистрация</button></span>
        </div>
    </div><!-- /.container -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Новости</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="jumbotron">
                <h1 class="display-4"><?= $_POST["title"];?></h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
        <!-- /.col-12 col-md-4 -->
        <div class="col-12 col-md-4">
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
        <!-- /.col-12 col-md-4 -->
        <div class="col-12 col-md-4">
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
        <!-- /.col-12 col-md-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

</body>
</html>