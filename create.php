<!doctype html>
<html lang="ru">
<!--<head>-->
<?php include "web/head.html"; ?>
<body>
<!--header navbar-->
<?php include "web/nav.html"; ?>
<div class="section py-5">
	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<h1>Добавить породу собаки</h1>
					<form action="catcher.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Заголовок</label>
						<input name="title" type="text" class="form-control" placeholder="Введите название породы">
						</div>
						<div class="form-group">
							<label>Описание</label>
						<textarea name="content" class="form-control" placeholder="Опишите особенности породы"></textarea>
						</div>
						<div class="input-group mb-3">
							<div class="custom-file">
								<input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
								<label class="custom-file-label" for="inputGroupFile04">Выберите файл</label>
							</div>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="inputGroupSelect02">Размер породы</label>
							</div>
							<select class="custom-select" id="inputGroupSelect02">
								<option selected>Гигантская </option>
								<option value="1">Большая </option>
								<option value="2">Средняя </option>
								<option value="3">Маленькая </option>
								<option value="3">Микро </option>
							</select>

						</div>
						<button type="submit" class="btn btn-custom">Отправить</button>
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
</body>
<?php include "web/footer.html"; ?>
</html>