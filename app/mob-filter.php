<? include('header.php') ?>

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

							<div class="b-content__path">
								<h1 class="h1">Расположение</h1>
								<div class="b-tab-wrapper">
									<div class="b-tabs">
										<span class="b-tabs__item active">Метро</span>
										<span class="b-tabs__item">Округ</span>
										<span class="b-tabs__item">Район</span>  
										<span class="b-tabs__item">Улица</span>
										<span class="b-tabs__item">Карта</span>
									</div>

									<div class="b-tab-content">
										<div class="b-tab-content__item">
											<div class="modal-filter__body">
												<i class="circle-preloader"></i>
												<? include('metro.php'); ?>
											</div>
											<div class="modal-filter__footer row">
												<div class="col-12 col-sm-4">
													<b>Выбрано:</b>
													<input type="text" class=" b-input" style="margin-left: 15px; width: 100px;" readonly>
												</div>
												<div class="col-12 col-sm-4">
													<button class="btn btn--red">Применить</button>
												</div>
												<div class="col-12 col-sm-4">
													<input type="reset" class="btn btn--hov-blue" value="Очистить метро">
												</div>
											</div>
										</div>
										<div class="b-tab-content__item">
											<div class="modal-filter__body">
												<i class="circle-preloader"></i>
												<ul class="b-filter-district-list">
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">ВАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">ЗАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">Новомосковский</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">САО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">СВАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">СЗАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">ЦАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">ЮАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">ЮВАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
													<li>
														<div class="b-filter-district-path">
															<label class="b-filter-label-checkbox">
																<input type="checkbox">
																<span class="b-filter-label-checkbox__txt">ЮЗАО</span>
															</label>
															<span class="b-filter-district-path__count">153 объекта</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="modal-filter__footer row">
												<div class="col-12 col-sm-4">
													<b>Выбрано:</b>
													<input type="text" class=" b-input" style="margin-left: 15px; width: 100px;" readonly>
												</div>
												<div class="col-12 col-sm-4">
													<button class="btn btn--blue">Применить</button>
												</div>
												<div class="col-12 col-sm-4">
													<input type="reset" class="btn btn--hov-blue" value="Очистить округ">
												</div>
											</div>
										</div>
										<div class="b-tab-content__item">
											<div class="modal-filter__body">
												<i class="circle-preloader"></i>
												<? include('filter-area.php'); ?>
											</div>
											<div class="modal-filter__footer row">
												<div class="col-12 col-sm-4">
													<b>Выбрано:</b>
													<input type="text" class=" b-input" style="margin-left: 15px; width: 100px;" readonly>
												</div>
												<div class="col-12 col-sm-4">
													<button class="btn btn--red">Применить</button>
												</div>
												<div class="col-12 col-sm-4">
													<input type="reset" class="btn btn--hov-blue" value="Очистить районы">
												</div>
											</div>
										</div>
										<div class="b-tab-content__item">
											<div class="modal-filter__body">
												<i class="circle-preloader"></i>
												<select class="js-select-styler" multiple="" data-selected="[]" name="street[]" tabindex="-1" aria-hidden="true"></select>
											</div>
											<div class="modal-filter__footer row">
												<div class="col-12 col-sm-4">
													<b>Выбрано:</b>
													<input type="text" class=" b-input" style="margin-left: 15px; width: 100px;" readonly>
												</div>
												<div class="col-12 col-sm-4">
													<button class="btn btn--red">Применить</button>
												</div>
												<div class="col-12 col-sm-4">
													<input type="reset" class="btn btn--hov-blue" value="Очистить улицы">
												</div>
											</div>
										</div>
										<div class="b-tab-content__item">
											<div class="modal-filter__body">
												<i class="circle-preloader"></i>
												<? include('filter-map.php'); ?>
											</div>
											<div class="modal-filter__footer row">
												<div class="col-12 col-sm-4">
													<b>Выбрано:</b>
													<input type="text" class=" b-input" style="margin-left: 15px; width: 100px;" readonly>
												</div>
												<div class="col-12 col-sm-4">
													<button class="btn btn--red">Применить</button>
												</div>
												<div class="col-12 col-sm-4">
													<input type="reset" class="btn btn--hov-blue" value="Очистить карту">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


						</main>
						
						<? include('footer.php'); ?>

					</div>
				</div>
			</div>
		

	</div>

	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script src="js/scripts.min.js"></script>

</body>
</html>
