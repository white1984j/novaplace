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
								<a href="#" class="btn btn--bg btn--red d-none d-lg-inline-flex">Оставить заявку</a>
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
		
			<div class="container no-gutters">
				<div class="row no-gutters">
					<div class="col content-sm d-none d-lg-flex">
						<? include('sidebar.php'); ?>
					</div>
					<div class="col content-bg b-content">
						<div class="pos-r">	
							<div class="b-filter">
								<? include('filter.php') ?>
							</div>
						</div>
						<main class="">
							<div class="">
								<div class="row">
									<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
										<a href="#" class="b-services-link">
											<span class="b-services-link__name">Аренда офисов</span>
											<img src="img/services/services-1.png" alt="img">
										</a>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
										<a href="#" class="b-services-link">
											<span class="b-services-link__name">Аренда офисов c юридическим адресом</span>
											<img src="img/services/services-2.png" alt="img">
										</a>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
										<a href="#" class="b-services-link">
											<span class="b-services-link__name">Аренда отдельно стоящего здания</span>
											<img src="img/services/services-3.png" alt="img">
										</a>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
										<a href="#" class="b-services-link">
											<span class="b-services-link__name">Аренда склада</span>
											<img src="img/services/services-4.png" alt="img">
										</a>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
										<a href="#" class="b-services-link">
											<span class="b-services-link__name">Помещения свободного назначения</span>
											<img src="img/services/services-5.png" alt="img">
										</a>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
										<a href="#" class="b-services-link">
											<span class="b-services-link__name">Продажа</span>
											<img src="img/services/services-6.png" alt="img">
										</a>
									</div>
								</div>
							</div>
							<div class="b-content__path">
								<div class="white-block">
									<h4 class="white-block__title">Новые товары</h4>
									<div class="b-products b-products--grid">
										<div class="b-catalog-item">
											<div class="b-catalog-item__body">
												<div href="#" class="b-catalog-item__img">
													<a href="#">
														<img src="img/products/catalog-item-1.png" alt="img">
													</a>
													<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
												</div>
												<div class="b-catalog-item__info">
													<div>		
														<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
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
																<button class="metro-stations__scroll-l icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
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
																<button class="metro-stations__scroll-r icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
																</button>
															</span>
															</div>
														</li>
														<li>
															<p>Площадь: 848 м²</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
											</div>
										</div>
										<div class="b-catalog-item">
											<div class="b-catalog-item__body">
												<div href="#" class="b-catalog-item__img">
													<a href="#">
														<img src="img/products/catalog-item-1.png" alt="img">
													</a>
													<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
												</div>
												<div class="b-catalog-item__info">
													<div>		
														<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
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
																<button class="metro-stations__scroll-l icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
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
																<button class="metro-stations__scroll-r icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
																</button>
															</span>
															</div>
														</li>
														<li>
															<p>Площадь: 848 м²</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
											</div>
										</div>
										<div class="b-catalog-item">
											<div class="b-catalog-item__body">
												<div href="#" class="b-catalog-item__img">
													<a href="#">
														<img src="img/products/catalog-item-1.png" alt="img">
													</a>
													<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
												</div>
												<div class="b-catalog-item__info">
													<div>		
														<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
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
																<button class="metro-stations__scroll-l icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
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
																<button class="metro-stations__scroll-r icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
																</button>
															</span>
															</div>
														</li>
														<li>
															<p>Площадь: 848 м²</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
											</div>
										</div>
										<div class="b-catalog-item">
											<div class="b-catalog-item__body">
												<div href="#" class="b-catalog-item__img">
													<a href="#">
														<img src="img/products/catalog-item-1.png" alt="img">
													</a>
													<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
												</div>
												<div class="b-catalog-item__info">
													<div>		
														<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
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
																<button class="metro-stations__scroll-l icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
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
																<button class="metro-stations__scroll-r icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
																</button>
															</span>
															</div>
														</li>
														<li>
															<p>Площадь: 848 м²</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
											</div>
										</div>
										<div class="b-catalog-item">
											<div class="b-catalog-item__body">
												<div href="#" class="b-catalog-item__img">
													<a href="#">
														<img src="img/products/catalog-item-1.png" alt="img">
													</a>
													<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
												</div>
												<div class="b-catalog-item__info">
													<div>		
														<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
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
																<button class="metro-stations__scroll-l icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
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
																<button class="metro-stations__scroll-r icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
																</button>
															</span>
															</div>
														</li>
														<li>
															<p>Площадь: 848 м²</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
											</div>
										</div>
										<div class="b-catalog-item">
											<div class="b-catalog-item__body">
												<div href="#" class="b-catalog-item__img">
													<a href="#">
														<img src="img/products/catalog-item-1.png" alt="img">
													</a>
													<div class="b-catalog-item__lot">Лот: <span>376842</span></div>
												</div>
												<div class="b-catalog-item__info">
													<div>		
														<a href="#" class="b-catalog-item__name">Аренда офисов в бизнес-парке «Вымпел»</a>
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
																<button class="metro-stations__scroll-l icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
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
																<button class="metro-stations__scroll-r icons-hover">
																	<i class="icon icon-arrow-black icons-hover--visible"></i>
																	<i class="icon icon-arrow-red"></i>
																</button>
															</span>
															</div>
														</li>
														<li>
															<p>Площадь: 848 м²</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
											</div>
										</div>
									</div>
									<div class="txt-c">
										<a href="#" class="btn btn--blue">Показать еще (245)</a>
									</div>
								</div>
							</div>
							<div class="b-content__path">
								<div class="row">
									<div class="col-xlg-8 col-xl-7 col-lg-12">
										<h2>Аренда коммерческой недвижимости</h2>
										<p>Любая компания, занятая в сфере бизнеса, нуждается в помещениях различного назначения — офисах, складах, торговых площадях и т.д. Приобретение коммерческой недвижимости в собственность не всегда оправдано экономически, особенно для небольших фирм с ограниченным бюджетом. Аренда офиса в Москве для многих организаций становится наиболее выгодным вариантом во всех отношениях.</p>
										<p>Помещение под офис необходимо выбирать с учетом специфики компании, в соответствии со всеми предъявляемыми ему требованиями. В Москве возможна аренда коммерческой недвижимости с любыми параметрами в широком ценовом диапазоне — от недорогой до элитной.</p>
									</div>
									<div class="col-xlg-4 col-xl-5 col-lg-12">
										<div class="rental-roperty-wrap">
											<a href="#" class="rental-roperty-path">
												<div class="rental-roperty-path__img">
													<img src="img/rental-property/rental-property-1.png" alt="img">
												</div>
												<div class="rental-roperty-path__name">Административные здания</div>
												<div class="rental-roperty-path__numbers">(235 объектов)</div>
											</a>
											<a href="#" class="rental-roperty-path">
												<div class="rental-roperty-path__img">
													<img src="img/rental-property/rental-property-2.png" alt="img">
												</div>
												<div class="rental-roperty-path__name">Особняки</div>
												<div class="rental-roperty-path__numbers">(25 объектов)</div>
											</a>
											<a href="#" class="rental-roperty-path">
												<div class="rental-roperty-path__img">
													<img src="img/rental-property/rental-property-3.png" alt="img">
												</div>
												<div class="rental-roperty-path__name">Москва-сити</div>
												<div class="rental-roperty-path__numbers">(235 объектов)</div>
											</a>
											<a href="#" class="rental-roperty-path">
												<div class="rental-roperty-path__img">
													<img src="img/rental-property/rental-property-4.png" alt="img">
												</div>
												<div class="rental-roperty-path__name">Бизнес-центры</div>
												<div class="rental-roperty-path__numbers">(235 объектов)</div>
											</a>
										</div>
									</div>
								</div>
								
							</div>

							<div class="b-content__path">
								<div class="row">
									<div class="col-lg-6 mar-b-sm-50">
										<div class="gray-block d-flex flex-column justify-content-between min-h-100 ">
											<h4 class="gray-block__title">Отзывы</h4>
											<div class="b-preview-review-wrap">
													<div class="b-preview-review">
														<a href="#" class="b-preview-review__name">Ирина Антонова</a>
														<div class="b-preview-review__txt">
															<p>Приобретение коммерческой недвижимости в собственность не всегда оправдано экономически.</p>
														</div>
														<div class="b-preview-review__date">12 марта 2018</div>
													</div>
													<div class="b-preview-review">
														<a href="#" class="b-preview-review__name">Святослав Венгржановский</a>
														<div class="b-preview-review__txt">
															<p>Приобретение коммерческой недвижимости в собственность не всегда оправдано экономически.</p>
														</div>
														<div class="b-preview-review__date">12 марта 2018</div>
													</div>

											</div>
											<div class="txt-c">
												<a href="#" class="btn  btn--blue">Показать еще (245)</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="row min-h-100">
											<div class="col-xlg-6 col-xl-12">
												<div class="banner banner-all-news mar-b-xlg-30 mar-b-sm-50" style="background-image: url(img/banners/banner-all-news.png);">
													<div class="banner-all-news__title">У кого в Москве самые комфортные офисы?</div>
													<div class="banner-all-news__txt">Помещение под офис необходимо выбирать с учетом специфики</div>
													<div class="banner-all-news__date">12 марта 2018</div>
													<div class="txt-c w-100">
														<a href="#" class="btn btn--blue">Все новости</a>
													</div>
												</div>
											</div>
											<div class="col-xlg-6 col-xl-12">
												<div class="banner banner-request-call" >
													<div class="banner-request-call__title">Заказать звонок</div>
													<input type="tel" class="banner-request-call__input" placeholder="Телефон" >
													<div class="txt-c w-100">
														<a href="#" class="btn btn--red">Отправить</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</main>
						<footer class="b-footer">
							<a href="/" class="b-footer__logo">
								<img src="img/logo-footer.png" alt="logo">
							</a>
							<ul class="b-footer__menu">
								<li>
									<a href="#" class="b-footer__link">О компании</a>
								</li>
								<li>
									<a href="#" class="b-footer__link">Новости</a>
								</li>
								<li>
									<a href="#" class="b-footer__link">Отзывы</a>
								</li>
								<li>
									<a href="#" class="b-footer__link">Контакты</a>
								</li>
								<li class="d-xlg-inline-flex d-none">
									<a href="#" class="b-footer__link">Политика конфеденциальности</a>
								</li>
								<li class="lg-inline-flex d-none">
									<a href="#" class="b-footer__link">Пользовательское соглашение</a>
								</li>
							</ul>
							<ul class="b-footer__menu b-footer__menu--info">
								<li>
									<a href="#" class="b-footer__link">Политика конфеденциальности</a>
								</li>
								<li>
									<a href="#" class="b-footer__link">Пользовательское соглашение</a>
								</li>
							</ul>
							<a href="http://burbon.ru/" class="b-footer__made-in">
								<img src="img/logo-burbon.png" alt="burbon.ru">
							</a>
						</footer>
					</div>
				</div>
			</div>
		

	</div>

	<script src="js/scripts.min.js"></script>

</body>
</html>
