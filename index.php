<?php
// Список постов
	//var_dump($_POST);
	$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc", "root", "root");
	$sql = "SELECT * FROM posts";
	$statement = $pdo->prepare($sql);
	$result = $statement->execute();
	$statement->fetchAll(PDO::FETCH_ASSOC);
	$posts = $statement;
?>

<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Мой блог за 30 дней</title>

	<!-- Bootstrap CSS 4.1.3-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--    Custom style-->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-nav">
    <div class="container">
        <a class="navbar-brand" href="/">Rumyantseva-blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/myblog.loc">Новости<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Написать статью</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="update.php">Обновить статью</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edit.php">Редактировать статью</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="delete.php">Удалить статью</a>
                </li>
            </ul>
            <span class="navbar-text"><button type="button" class="btn btn-outline-light">Регистрация</button></span>
        </div>
    </div><!-- /.container -->
</nav>
<div class="section-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-sm-left text-lg-center">В настоящее время в мире насчитывается около <span>500 пород</span> собак</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Все породы собак</h1>
        </div>
    </div>
    <div class="row">
		<?php foreach ($posts as $post): ?>
        <div class="col-12 col-md-4">
            <div class="jumbotron">
                <h1 class="display-4"><?=$post["title"];?></h1>
                <p class="lead"><?=$post["text"];?></p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
		<?php endforeach; ?>
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