<?php
$pdo = new PDO("mysql:host=localhost;dbname=myblogloc;charset=utf8", "root", "root");
$statement = $pdo->prepare("SELECT * FROM breeds WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$breed = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($breed['content']);
?>

<!doctype html>
<html lang="ru">
<!--head-->
<?php include "web/head.html"; ?>
<body>
<!--header navbar-->
<?php include "web/nav.html"; ?>
<div class="section py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1>Редактировать породу собаки</h1>
				<form action="update.php?id=<?= $breed['id'];?>" method="POST">
<!--					<input type="text" name="id" value="--><?//= $breed['id'];?><!--">-->
					<div class="form-group">
						<label>Название породы</label>
						<input name="title" type="text" class="form-control" value="<?= $breed['title'];?>">
					</div>
					<div class="form-group">
						<label>Описание</label>
						<textarea name="content" class="form-control" placeholder="Описание породы"><?= $breed['content']?></textarea>
					</div>
<!--					<div class="input-group mb-3">-->
<!--						<div class="custom-file">-->
<!--							<input type="file" class="custom-file-input" id="inputGroupFile02">-->
<!--							<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Добавить изображение</label>-->
<!--						</div>-->
<!--						<div class="input-group-append">-->
<!--							<span class="input-group-text" id="inputGroupFileAddon02">Загрузить</span>-->
<!--						</div>-->
<!--					</div>-->
					<button type="submit" class="btn btn-warning">Подтвердить изменение</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.section -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--footer-->
<footer class="footer">
	<div class="container">
		<hr class="my-4">
		<div class="row">
			<div class="col-3">Блок футера 1</div>
			<!-- /.col-3 -->
			<div class="col-3">Блок футера 2</div>
			<!-- /.col-3 -->
			<div class="col-3">Блок футера 3</div>
			<!-- /.col-3 -->
			<div class="col-3">Блок футера 4</div>
			<!-- /.col-3 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</footer>
<!-- /.footer -->
</body>
</html>