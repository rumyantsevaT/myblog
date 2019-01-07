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

<div class="section">
	<div class="container">

		<div class="card">
			<article class="itemlist">
				<div class="row row-sm">
					<aside class="col-sm-3">
						<div class="img-wrap"><img src="images/items/bull-terrier-red500.jpg" class="img-md"></div>
					</aside> <!-- col.// -->
					<div class="col-sm-6">
						<div class="text-wrap pt-3">
							<h4 class="title"> Мини бультерьер  </h4>
							<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
							<p class="rating-wrap my-0 text-muted">
								<span class="label-rating">132 reviews</span>
								<span class="label-rating">154 orders </span>
							</p> <!-- rating-wrap.// -->
						</div> <!-- text-wrap.// -->
					</div> <!-- col.// -->
					<aside class="col-sm-3">
						<div class="border-left pl-3 pt-3">
							<div class="price-wrap">
								<span class="h3 price"> $56 </span><del class="price-old"> $98</del>
							</div> <!-- info-price-detail // -->
							<p class="text-success">Free shipping</p>
							<p>
								<a href="#" class="btn btn-warning"> Buy now </a>
								<a href="#" class="btn btn-light"> Details  </a> </p>
						</div> <!-- action-wrap.// -->
					</aside> <!-- col.// -->
				</div> <!-- row.// -->
			</article> <!-- itemlist.// -->
			
			<article class="itemlist">
				<div class="row row-sm">
					<aside class="col-sm-3">
						<div class="img-wrap"><img src="images/items/bull-terrier-red500.jpg" class="img-md"></div>
					</aside> <!-- col.// -->
					<div class="col-sm-6">
						<div class="text-wrap pt-3">
							<h4 class="title"> Мини бультерьер  </h4>
							<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
							<p class="rating-wrap my-0 text-muted">
								<span class="label-rating">132 reviews</span>
								<span class="label-rating">154 orders </span>
							</p> <!-- rating-wrap.// -->
						</div> <!-- text-wrap.// -->
					</div> <!-- col.// -->
					<aside class="col-sm-3">
						<div class="border-left pl-3 pt-3">
							<div class="price-wrap">
								<span class="h3 price"> $56 </span><del class="price-old"> $98</del>
							</div> <!-- info-price-detail // -->
							<p class="text-success">Free shipping</p>
							<p>
								<a href="#" class="btn btn-warning"> Buy now </a>
								<a href="#" class="btn btn-light"> Details  </a> </p>
						</div> <!-- action-wrap.// -->
					</aside> <!-- col.// -->
				</div> <!-- row.// -->
			</article> <!-- itemlist.// -->
			
		</div> <!-- card.// -->

	</div>
</div>






<div class="section section-breed">
	<div class="container">
		<h1>Все породы</h1>
	<div class="row">
		<aside class="col-md-3">
			<div class="card card-filter">
				<article class="card-group-item">
					<header class="card-header">
						<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
							<i class="icon-action fa fa-chevron-down"></i>
							<h6 class="title">Категории</h6>
						</a>
					</header>
					<div style="" class="filter-content collapse show" id="collapse22">
						<div class="card-body">
							<form class="pb-3">
								<div class="input-group">
									<input class="form-control" placeholder="Search" type="text">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
									</div>
								</div>
							</form>

							<ul class="list-unstyled list-lg">
								<li><a href="#">Cras justo odio <span class="float-right badge badge-light round">142</span> </a></li>
								<li><a href="#">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a></li>
								<li><a href="#">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a></li>
								<li><a href="#">Another item <span class="float-right badge badge-light round">12</span>  </a></li>
							</ul>
						</div> <!-- card-body.// -->
					</div> <!-- collapse .// -->
				</article> <!-- card-group-item.// -->
				<article class="card-group-item">
					<header class="card-header">
						<a href="#" data-toggle="collapse" data-target="#collapse33">
							<i class="icon-action fa fa-chevron-down"></i>
							<h6 class="title">By Price  </h6>
						</a>
					</header>
					<div class="filter-content collapse show" id="collapse33">
						<div class="card-body">
							<input type="range" class="custom-range" min="0" max="100" name="">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Min</label>
									<input class="form-control" placeholder="$0" type="number">
								</div>
								<div class="form-group text-right col-md-6">
									<label>Max</label>
									<input class="form-control" placeholder="$1,0000" type="number">
								</div>
							</div> <!-- form-row.// -->
							<button class="btn btn-block btn-outline-primary">Apply</button>
						</div> <!-- card-body.// -->
					</div> <!-- collapse .// -->
				</article> <!-- card-group-item.// -->
				<article class="card-group-item">
					<header class="card-header">
						<a href="#" data-toggle="collapse" data-target="#collapse44">
							<i class="icon-action fa fa-chevron-down"></i>
							<h6 class="title">By Feature </h6>
						</a>
					</header>
					<div class="filter-content collapse show" id="collapse44">
						<div class="card-body">
							<form>
								<label class="form-check">
									<input class="form-check-input" value="" type="checkbox">
									<span class="form-check-label">
				  	<span class="float-right badge badge-light round">5</span>
				    Samsung
				  </span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
									<input class="form-check-input" value="" type="checkbox">
									<span class="form-check-label">
				  	<span class="float-right badge badge-light round">13</span>
				    Mersedes Benz
				  </span>
								</label> <!-- form-check.// -->
								<label class="form-check">
									<input class="form-check-input" value="" type="checkbox">
									<span class="form-check-label">
				  	<span class="float-right badge badge-light round">12</span>
				    Nissan Altima
				  </span>
								</label>  <!-- form-check.// -->
								<label class="form-check">
									<input class="form-check-input" value="" type="checkbox">
									<span class="form-check-label">
				  	<span class="float-right badge badge-light round">32</span>
				    Another Brand
				  </span>
								</label>  <!-- form-check.// -->
							</form>
						</div> <!-- card-body.// -->
					</div> <!-- collapse .// -->
				</article> <!-- card-group-item.// -->
			</div> <!-- card.// -->


		</aside> <!-- col.// -->
		<main class="col-md-9">


			<article class="card card-product">
				<div class="card-body">
					<div class="row">
						<aside class="col-sm-3">
							<div class="img-wrap"><img src="images/items/bullterrier.jpg"></div>
						</aside> <!-- col.// -->
						<article class="col-sm-6">
							<h4 class="title"> Ut wisi enim ad minim veniam  </h4>
							<div class="rating-wrap  mb-2">
								<ul class="rating-stars">
									<li style="width:80%" class="stars-active">
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</li>
								</ul>
								<div class="label-rating">132 reviews</div>
								<div class="label-rating">154 orders </div>
							</div> <!-- rating-wrap.// -->
							<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
							<dl class="dlist-align">
								<dt>Color</dt>
								<dd>Black and white</dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
								<dt>Material</dt>
								<dd>Syntetic, wooden</dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
								<dt>Delivery</dt>
								<dd>Russia, USA, and Europe</dd>
							</dl>  <!-- item-property-hor .// -->

						</article> <!-- col.// -->
						<aside class="col-sm-3 border-left">
							<div class="action-wrap">
								<div class="price-wrap h4">
									<span class="price"> $56 </span>
									<del class="price-old"> $98</del>
								</div> <!-- info-price-detail // -->
								<p class="text-success">Free shipping</p>
								<br>
								<p>
									<a href="#" class="btn btn-primary"> Buy now </a>
									<a href="#" class="btn btn-secondary"> Details  </a>
								</p>
								<a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
							</div> <!-- action-wrap.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
				</div> <!-- card-body .// -->
			</article> <!-- card product .// -->

			<article class="card card-product">
				<div class="card-body">
					<div class="row">
						<aside class="col-sm-3">
							<div class="img-wrap"><img src="images/items/1.jpg"></div>
						</aside> <!-- col.// -->
						<article class="col-sm-6">
							<h4 class="title"> Ut wisi enim ad minim veniam  </h4>
							<div class="rating-wrap mb-2">
								<ul class="rating-stars">
									<li style="width:50%" class="stars-active">
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i> <i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</li>
								</ul>
								<div class="label-rating">12 reviews</div>
								<div class="label-rating">154 orders </div>
							</div> <!-- rating-wrap.// -->
							<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
							<dl class="dlist-align">
								<dt>Color</dt>
								<dd>Black and white</dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
								<dt>Material</dt>
								<dd>Syntetic, wooden</dd>
							</dl>  <!-- item-property-hor .// -->
							<dl class="dlist-align">
								<dt>Delivery</dt>
								<dd>Russia, USA, and Europe</dd>
							</dl>  <!-- item-property-hor .// -->
						</article> <!-- col.// -->
						<aside class="col-sm-3 border-left">
							<div class="action-wrap">
								<div class="price-wrap h4">
									<span class="price"> $245 </span>
									<del class="price-old"> $528</del>
								</div> <!-- info-price-detail // -->
								<p class="text-success">Free shipping</p>
								<br>
								<p>
									<a href="#" class="btn btn-primary"> Buy now </a>
									<a href="#" class="btn btn-secondary"> Details  </a>
								</p>
								<a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
							</div> <!-- action-wrap.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
				</div> <!-- card-body .// -->
			</article> <!-- card product .// -->

		</main> <!-- col.// -->
	</div>

</div>
</div>
<!-- /.section section-breed -->
<div class="section">
	<div class="container">
		<div class="row mb-2">
			<div class="col-12">
				<div class="card flex-md-row mb-4 shadow-sm h-md-250">
					<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 350px; height: 350px;" src="images/items/bull-terrier-red500.jpg" data-holder-rendered="true">
					<div class="card-body d-flex flex-column align-items-start">
						<strong class="d-inline-block mb-2 text-primary">Категория</strong>
						<h3 class="mb-0">
							<a class="text-dark" href="#">Мини бультерьер</a>
						</h3>
						<div class="mb-1 text-muted">Nov 12</div>
						<p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ea eos esse placeat vero? Corporis, fugiat, sunt. Assumenda at cumque delectus dolores impedit iste magnam quia quos veritatis. Architecto assumenda autem dicta eius eum eveniet in ipsum iusto nam nihil nobis numquam optio, praesentium provident qui sit velit vitae. Dolore!</p>
						<a href="#">Continue reading</a>
					</div>
					
				</div>
			</div>
	
			
		</div>
	</div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>