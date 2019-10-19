<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tinyone</title>
	<?php gpOutput::GetHead(); ?>
	<?php $path = dirname($page->theme_path); ?>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $path ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $path ?>/css/main.css">
</head>

<body>

	<?php gpOutput::GetExtra('Header'); ?>

	<?php $page->GetContent(); ?>

	<?php gpOutput::GetExtra('Footer'); ?>
  <?php //gpOutput::GetAdminLink(); ?>

	<!-- <header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<img class="logo" src="img/logo.png" alt="Tinyone">
				</div>
				<div class="col-lg-5 ml-auto">
					<nav>
						<ul class="menu d-flex justify-content-center">
							<li class="menu__el">
								<a href="#">
									Features
								</a>
							</li>
							<li class="menu__el">
								<a href="#">
									Support
								</a>
							</li>
							<li class="menu__el">
								<a href="#">
									Blog
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="offer">
						<h1 class="offer__title">
							Inspire your inspiration
						</h1>
						<div class="offer__intro">
							Simple to use for your app, products<br> showcase and your inspiration
						</div>
						<p class="offer__text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum. 
							Donec rutrum sed sem quis venenatis. Proin viverra risus a eros volutpat tempor. 
							In quis arcu et eros porta lobortis sit 
						</p>
						<ul class="icons d-flex">
							<li class="icons__el">
								<a href="#">
									<i class="fa fa-apple"></i>
								</a>
							</li>
							<li class="icons__el">
								<a href="#">
									<i class="fa fa-android"></i>
								</a>
							</li>
							<li class="icons__el">
								<a href="#">
									<i class="fa fa-windows"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-5 ml-auto">
					<img class="ipad" src="img/ipad-new.png" alt="ipad">
				</div>
			</div>
		</div>
	</header>
	<section id="features" class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="title">
						Tinyone features
						<p class="title__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum. 
							Donec rutrum sed sem quis venenatis.
						</p>
					</h1>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-4">
				<div class="feature d-flex">
					<i class="fa fa-tablet"></i>
					<div class="feature__content">
						<h2 class="feature__title">Fully Responsive</h2>
						<p class="feature__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature d-flex">
					<i class="fa fa-lemon-o"></i>
					<div class="feature__content">
						<h2 class="feature__title">Fully Layered PSD</h2>
						<p class="feature__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature d-flex">
					<i class="fa fa-folder-o"></i>
					<div class="feature__content">
						<h2 class="feature__title">Font Awesome Icons</h2>
						<p class="feature__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature d-flex">
					<i class="fa fa-code"></i>
					<div class="feature__content">
						<h2 class="feature__title">HTML3 & CSS3</h2>
						<p class="feature__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature d-flex">
					<i class="fa fa-envelope-o"></i>
					<div class="feature__content">
						<h2 class="feature__title">Email Template</h2>
						<p class="feature__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="feature d-flex">
					<i class="fa fa-bookmark-o"></i>
					<div class="feature__content">
						<h2 class="feature__title">Free to download</h2>
						<p class="feature__txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum.
						</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section id="touch" class="touch">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="title title--mod">
						Keep in touch with us
						<p class="title__txt title__txt--color">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Praesent vitae eros eget tellus tristique bibendum. 
							Donec rutrum sed sem quis venenatis.
						</p>
					</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 d-flex justify-content-center">
					<form class="form" action="#">
						<input class="form__input" type="e-mail" placeholder="Enter your email to update" required>
						<button class="form__button" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer__txt m-auto">
						HALOVIETNAM LTD<br>
						66, Dang Van ngu, Dong Da<br>
						Hanoi, Vietnam
					</div>
				</div>
			</div>
		</div>
	</footer> -->
	
</body>

</html>