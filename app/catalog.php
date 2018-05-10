<? include('header.php') ?>

			<div class="container no-gutters">
				<div class="row no-gutters">
					<div class="col content-sm d-none d-lg-flex">
						<? include('sidebar.php'); ?>
					</div>
					<div class="col content-bg b-content">
						<div class="pos-r">	
							<div class="b-filter b-filter--static">
								<? include('filter.php') ?>
							</div>
						</div>
						<main class="">
							<div class="b-content__path">

									<h2>Аренда офиса</h2>
									<div class="b-catalog-top-line">
										<div class="b-catalog-top-line__path d-none d-lg-inline-flex">
											<div class="b-change-catalog">
												<button class="b-change-catalog__item b-change-catalog__item--line">
													<i class="icon icon-catalog--line"></i>
												</button>
												<button class="b-change-catalog__item b-change-catalog__item--grid">
													<i class="icon icon-catalog--grid"></i>
												</button>
											</div>
										</div>
										<div class="b-catalog-top-line__path col-12 col-sm-auto">
											<div class="b-catalog-sorting">
												<span class="b-catalog-sorting__title">Сортировать по</span>
												<select class="js-select-styler" data-select-2="true">
													<option value="1" selected="selected">по дате обновления</option>
													<option value="2">по цене</option>
												</select>
											</div>
										</div>
										<div class="b-catalog-top-line__path d-none d-xl-inline-flex">
											<div class="b-pagination">
												<span class="b-pagination__title">Страницы:</span>
												<ul class="b-pagination__list">
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">1</a>
													</li>
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">2</a>
													</li>
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">3</a>
													</li>
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">4</a>
													</li>
													<li class="b-pagination__item disabled">
														<a href="#" class="b-pagination__link">...</a>
													</li>
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">12</a>
													</li>
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">13</a>
													</li>
													<li class="b-pagination__item">
														<a href="#" class="b-pagination__link">Все</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="b-products">
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
												<a href="#order-object" class="b-catalog-item__order btn btn--blue js-mg-pp" data-modal-product-name="Аренда офисов в бизнес-парке «Вымпел»">Заказать</a>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
												<a href="#order-object" class="b-catalog-item__order btn btn--blue js-mg-pp" data-modal-product-name="Аренда офисов в бизнес-парке «Вымпел»">Заказать</a>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
												<a href="#order-object" class="b-catalog-item__order btn btn--blue js-mg-pp" data-modal-product-name="Аренда офисов в бизнес-парке «Вымпел»">Заказать</a>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
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
													<a href="#" class="b-catalog-item__more-info d-none d-xlg-inline-flex">Подробнее</a>
												</div>
											</div>
											<div class="b-catalog-item__result">
												<p>Ставка аренды за м<sup>2</sup>/год</p>
												<div class="b-catalog-item__price">
													32 000 &#8381;
												</div>
												<a href="#" class="b-catalog-item__order btn btn--blue">Заказать</a>
											</div>
										</div>
									</div>

									<div class="">
										<div class="b-pagination">
											<span class="b-pagination__title">Страницы:</span>
											<ul class="b-pagination__list">
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">1</a>
												</li>
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">2</a>
												</li>
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">3</a>
												</li>
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">4</a>
												</li>
												<li class="b-pagination__item disabled">
													<a href="#" class="b-pagination__link">...</a>
												</li>
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">12</a>
												</li>
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">13</a>
												</li>
												<li class="b-pagination__item">
													<a href="#" class="b-pagination__link">Все</a>
												</li>
											</ul>
										</div>
									</div>

							</div>
							<div class="b-content__path">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo, neque commodi ipsa sapiente at laboriosam saepe nostrum tempora velit minima excepturi ea architecto animi quasi praesentium laudantium distinctio quod.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo, neque commodi ipsa sapiente at laboriosam saepe nostrum tempora velit minima excepturi ea architecto animi quasi praesentium laudantium distinctio quod.</p>
							</div>

						</main>
						
						<? include('footer.php'); ?>

					</div>
				</div>
			</div>
		

	</div>

	<script src="js/scripts.min.js"></script>

</body>
</html>
