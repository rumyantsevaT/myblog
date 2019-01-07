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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-nav-custom sticky-top">
    <div class="container">
        <a class="navbar-brand navbar-brand-custom" href="/">Rumyantseva-blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="/myblog.loc" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Все породы собак<span class="sr-only">(current)</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="create.php">Добавить породу</a>
                        <a class="dropdown-item" href="edit.php">Редактировать породу</a>
                        <a class="dropdown-item" href="update.php">Обновить породу</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="delete.php">Удалить породу</a>
                    </div>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск породы" aria-label="Search">
            <button class="btn btn-outline-success btn-outline-custom my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <span class="navbar-text ml-lg-2"><button type="button" class="btn btn-outline-light">Регистрация</button></span>
    </div><!-- /.container -->
</nav>
<!--Первый экран-->
<div class="section section-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-sm-left text-lg-center">В настоящее время в мире насчитывается около <span>500 пород</span> собак</h2>
            </div>
        </div>
    </div>
</div>
<!--Второй экран-->
<div class="section section-breed">
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
</div>
<!-- /.section section-breed -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>