<?php
session_start();

// Список постов
//$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
require_once "database/pdo-db.php";
$sql = "SELECT * FROM breeds";
$statement = $pdo->prepare($sql);
$statement->execute();
$breeds = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($name_img);die;

?>

<!doctype html>
<html lang="ru">
<!--head-->
<?php include "./web/head.html"; ?>
<body>
<!--навигация-->
<?php include "web/nav.html"; ?>

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
<div class="section py-5">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-4">
				<h1 class="d-inline">Все породы</h1>
			</div>
			<div class="col-4 align-self-end text-right">
				<a class="btn btn-custom" href="create.php">Добавить породу</a>
			</div>
		</div>
		<hr class="my-4">
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="card mb-3">
					<article class="card-group-item">
						<header class="card-header"><h5 class="title">Размер породы</h5></header>
						<div class="filter-content">
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item">Гигантская <span class="float-right badge badge-secondary round">142</span> </a>
								<a href="#" class="list-group-item">Большая <span class="float-right badge badge-secondary round">3</span>  </a>
								<a href="#" class="list-group-item">Средняя <span class="float-right badge badge-secondary round">32</span>  </a>
								<a href="#" class="list-group-item">Маленькая <span class="float-right badge badge-secondary round">12</span>  </a>
								<a href="#" class="list-group-item">Микро <span class="float-right badge badge-secondary round">12</span>  </a>
							</div>  <!-- list-group .// -->
						</div>
					</article> <!-- card-group-item.// -->
				</div>
			</div>
			<!-- /.col-md-3 -->
			<div class="col-lg-9">
			<!--карточка -->
				<?php foreach ($breeds as $breed):?>
				<div class="card mb-4">
					<article class="itemlist">
						<div class="row row-sm">
							<aside class="col-sm-5">
								<div class="img-wrap">
									<img class="img-md" src="uploads/<?= $breed['image'];?>">
								</div>
							</aside> <!-- col.// -->
							<div class="col-sm-7">
								<div class="text-wrap">
									<h4 class="title"><?= $breed['title']?></h4>
									<p><?= $breed['content']?></p>
									<p class="rating-wrap my-3 text-muted">
										<span class="label-rating"><i class="far fa-clock mr-1"></i><?= $breed['date']?></span>
										<span class="label-rating">|</span>
										<span class="label-rating"><i class="far fa-user mr-1"></i>Татьяна</span>
									</p> <!-- rating-wrap.// -->
									<div class="border-top pt-3">
										<a href="/details.php?id=<?= $breed['id'];?>" class="btn btn-custom"> Подробнее  </a>
										<a href="/edit.php?id=<?= $breed['id'];?>" class="btn btn-warning"> Редактировать </a>
										<a href="/delete.php?id=<?= $breed['id'];?>" class="btn btn-danger"> Удалить  </a>
									</div> <!-- action-wrap.// -->
								</div> <!-- text-wrap.// -->
							</div> <!-- col.// -->
							
						</div> <!-- row.// -->
					</article> <!-- itemlist.// -->
				</div> <!-- card.// -->
				<?php endforeach;?>
			</div>
			<!-- /.col-md-9 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
<!-- /.section -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php include "web/footer.html"; ?>
</body>
</html>