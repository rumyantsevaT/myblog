<?php
session_start();
require_once 'database/pdo-db.php';
//Все породы которые добавил пользователь
$sql = "SELECT * FROM breeds";
$statement = $pdo->prepare($sql);
$statement->execute();
$breeds = $statement->fetchAll(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="ru">
<!--head-->
<?php include "web/head.html"; ?>
<body>
<!--навигация-->
<?php include "web/nav-logout.html"; ?>

<!--Первый экран-->
<!--<div class="section section-main">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <h2 class="text-sm-left text-lg-center">В настоящее время в мире насчитывается около <span>500 пород</span> собак</h2>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--Второй экран-->
<div class="section py-5">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-4">
				<h1 class="d-inline"><p>Привет, <?= $_SESSION['login'];?></p></h1>
			</div>
			<div class="col-4 align-self-end text-right">
				<a class="btn btn-custom" href="create.php">Добавить породу</a>
			</div>
		</div>
		<hr class="my-4">
	</div>

<div class="section py-5">
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
			
<!--				Список всех постов или пород который добавил пользователь-->
				<table class="table">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Миниатюра</th>
						<th scope="col">Порода</th>
						<th scope="col">Краткое описание</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($breeds as $breed): ?>
					<tr>
						<th scope="row"><?= $breed['id']; ?></th>
						<td ><img width="150px" class="img-md" src="uploads/<?= $breed['image'];?>"></td>
						<td><?= $breed['title']; ?></td>
						<td><?= $breed['short_content']; ?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
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