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
					<div class="col content-sm">
						<div class="b-header__logo">
							<a href="/">
								<img src="img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="col content-bg">
						<div class="b-header-top-line row justify-content-between align-items-center">
							<div class="col-auto">
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
							<div class="col-auto">
								<a href="tel:89032928968" class="link-tel b-header-link">8-903-292-89-68</a>
								<a href="#" class="btn btn--red">Оставить заявку</a>
							</div>
						</div>
						<div class="row align-items-end">
							<div class="col-auto">
								<a href="#" class="btn btn--bg btn--filter">
									<i class="icon icon-filter-white"></i>
									<span>Фильтр</span>
								</a>
							</div>
							<div class="col">
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
		<main>
			<div class="container no-gutters">
				<div class="row no-gutters">
					<div class="col content-sm d-flex">
						<? include('sidebar.php'); ?>
					</div>
					<div class="col content-bg b-content">

						<div class="b-catalog-item">
							<div class="b-catalog-item__body">
								<div href="#" class="b-catalog-item__img">
									<div class="b-catalog-item-img-slider">
										<a href="#">
											<img src="img/products/catalog-item-1.png" alt="img">
										</a>
										<a href="#">
											<img src="img/products/catalog-item-1.png" alt="img">
										</a>
										<a href="#">
											<img src="img/products/catalog-item-1.png" alt="img">
										</a>
									</div>
									<div class="b-catalog-item-img-slider__numbers">
										<span class="b-catalog-item-img-slider__numbers--curent" >1</span>
										из
										<span class="b-catalog-item-img-slider__numbers--max" >1</span>
									</div>
									<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
								</div>
								<div class="b-catalog-item__info">
									<div>		
										<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
									</div>
									<div class="b-catalog-item__place">
										<p>Москва, Очаковское шоссе</p>
									</div>
									<ul class="b-catalog-item__prop">
										<li>
											<p>Округ: ЦАО</p>
										</li>
										<li>
											<p>Класс: В</p>
										</li>
										<li>
											<div class="d-flex align-items-center">
											Метро: 
											<span class="metro-stations">
												<button class="metro-stations__scroll-l">
													<i class="icon icon-arrow-black"></i>
												</button>
												<span class="metro-stations__body">
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
												</span>
												<button class="metro-stations__scroll-r">
													<i class="icon icon-arrow-black"></i>
												</button>
											</span>
											</div>
										</li>
										<li>
											<p>Площадь: 848 м²</p>
										</li>
									</ul>
									<a href="#" class="b-catalog-item__more-info">Подробнее</a>
								</div>
							</div>
							<div class="b-catalog-item__result">
								<p>Ставка аренды за помещение в месяц:</p>
								<div class="b-catalog-item__price">
									32 000 &#8381;
								</div>
								<a href="#" class="b-catalog-item__order btn btn--blue">Заказать</a>
							</div>
						</div>

						<div class="b-catalog-item">
							<div class="b-catalog-item__body">
								<div href="#" class="b-catalog-item__img">
									<div class="b-catalog-item-img-slider">
										<a href="#">
											<img src="img/products/catalog-item-1.png" alt="img">
										</a>
										<a href="#">
											<img src="img/products/catalog-item-1.png" alt="img">
										</a>
										<a href="#">
											<img src="img/products/catalog-item-1.png" alt="img">
										</a>
									</div>
									<div class="b-catalog-item-img-slider__numbers">
										<span class="b-catalog-item-img-slider__numbers--curent" >1</span>
										из
										<span class="b-catalog-item-img-slider__numbers--max" >1</span>
									</div>
									<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
								</div>
								<div class="b-catalog-item__info">
									<div>		
										<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
									</div>
									<div class="b-catalog-item__place">
										<p>Москва, Очаковское шоссе</p>
									</div>
									<ul class="b-catalog-item__prop">
										<li>
											<p>Округ: ЦАО</p>
										</li>
										<li>
											<p>Класс: В</p>
										</li>
										<li>
											<div class="d-flex align-items-center">
											Метро: 
											<span class="metro-stations">
												<button class="metro-stations__scroll-l">
													<i class="icon icon-arrow-black"></i>
												</button>
												<span class="metro-stations__body">
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская
													<span class="metro-stations__color" style="background-color: #7A22AC"></span>Таганская

												</span>
												<button class="metro-stations__scroll-r">
													<i class="icon icon-arrow-black"></i>
												</button>
											</span>
											</div>
										</li>
										<li>
											<p>Площадь: 848 м²</p>
										</li>
									</ul>
									<a href="#" class="b-catalog-item__more-info">Подробнее</a>
								</div>
							</div>
							<div class="b-catalog-item__result">
								<p>Ставка аренды за помещение в месяц:</p>
								<div class="b-catalog-item__price">
									32 000 &#8381;
								</div>
								<a href="#" class="b-catalog-item__order btn btn--blue">Заказать</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</main>
		<footer>
			footer
		</footer>
	</div>

	<script src="js/scripts.min.js"></script>

</body>
</html>
