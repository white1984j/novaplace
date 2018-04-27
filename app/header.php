<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>OptimizedHTML 4</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<div class="wrapper">
		<header class="b-header">
			<div class="container no-gutters">
				<div class="row no-gutters">
					<div class="col content-sm d-none d-lg-flex">
						<div class="b-header__logo">
							<a href="/">
								<img src="img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="col content-bg">
						<div class="b-header-top-line row justify-content-between align-items-center">
							<div class="col-sm-3 col-5 d-lg-none">
								<div class="b-header__logo">
									<a href="/">
										<img src="img/logo.png" alt="logo">
									</a>
								</div>
							</div>
							<div class="col-auto d-inline-flex aligm-items-center">
								<div class="d-inline-flex d-md-none">
									<i class="icon icon-loupe-blue--bg"></i>
								</div>
								<div class="d-none d-md-inline-flex">
									<ul class="b-nav">
										<li class="b-nav__li">
											<a href="#" class="b-nav__link">О компании</a>
										</li>
										<li class="b-nav__li">
											<a href="#" class="b-nav__link">Новости</a>
										</li>
										<li class="b-nav__li">
											<a href="#" class="b-nav__link">Отзывы</a>
										</li>
										<li class="b-nav__li">
											<a href="#" class="b-nav__link">Контакты</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-auto d-inline-flex align-items-center">
								<a href="tel:89032928968" class="link-tel b-header-link d-none d-md-inline-flex">8-903-292-89-68</a>
								<a href="#leave-application" class="btn btn--bg btn--red d-none d-lg-inline-flex js-mg-pp">Оставить заявку</a>
								<button class="b-hamburger js-toggle-mob-menu d-lg-none">
									<span class="b-hamburger__path"></span>
									<span class="b-hamburger__path"></span>
									<span class="b-hamburger__path"></span>
								</button>
							</div>
							<? include('b-mob-menu.php'); ?>
						</div>
						<div class="txt-c d-md-none">
							<a href="tel:89032928968" class="link-tel b-header-link">8-903-292-89-68</a>
						</div>
						<div class="row align-items-end">
							<div class="col-md-auto col-sm-12">
								<a href="#" class="btn btn--bg btn--filter">
									<i class="icon icon-filter-white"></i>
									<span>Фильтр</span>
								</a>
							</div>
							<div class="col d-md-inline-flex d-none">
								<form class="b-search">
									<input type="text" class="b-search__input" placeholder="Поиск по сайту">
									<button type="submit" class="b-search__submit icons-hover"  >
										<i class="icon icon-loupe-blue icons-hover--visible"></i>
										<i class="icon icon-loupe-red"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>