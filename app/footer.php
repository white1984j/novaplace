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

<button class="b-back-top">
	<img src="img/arrow-back-top.svg" width="100%" alt="back top">
</button>

<div class="d-none">

	<div class="b-modal" id="success-dispatch">
		<div class="b-modal__title txt-c">Заявка успешно отправлена</div>
	</div>

	<div class="b-modal" id="leave-application">
		<div class="b-modal__title txt-c">Оставить заявку</div>
		<div class="b-modal__body">
			<form>
				<label class="b-label">
					<p class="b-label__txt">Имя</p>
					<input type="text" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Email</p>
					<input type="email" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Телефон</p>
					<input type="tel" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Сообщение</p>
					<textarea class="b-input"></textarea>
				</label>
				<label class="b-label b-label--checkbox">
					<input type="checkbox" class="input-check-agreement-data required">
					<div class="b-checkbox">
						<i class="icon icon-checked--red"></i>
					</div>
					<div class="b-checkbox__text">Согласие на <a href="#">обработку данных</a></div>
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<div class="txt-c">
					<input type="submit" class="btn btn--red" value="Отправить" >
				</div>
			</form>
		</div>
	</div>

	<div class="b-modal" id="order-object">
		<div class="b-modal__title txt-c">Заказать объект</div>
		<div class="b-modal__body">
			<form>
				<label class="b-label">
					<p class="b-label__txt">Название товара</p>
					<input type="text" class="b-input required" name="product-name">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Имя</p>
					<input type="text" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Email</p>
					<input type="email" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Телефон</p>
					<input type="tel" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Сообщение</p>
					<textarea class="b-input"></textarea>
				</label>
				<label class="b-label b-label--checkbox">
					<input type="checkbox" class="input-check-agreement-data required">
					<div class="b-checkbox">
						<i class="icon icon-checked--red"></i>
					</div>
					<div class="b-checkbox__text">Согласие на <a href="#">обработку данных</a></div>
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<div class="txt-c">
					<input type="submit" class="btn btn--red" value="Отправить" >
				</div>
			</form>
		</div>
	</div>

	<div class="b-modal" id="add-review">
		<div class="b-modal__title txt-c">Добавить отзыв</div>
		<div class="b-modal__body">
			<form>
				<label class="b-label">
					<p class="b-label__txt">Название товара</p>
					<input type="text" class="b-input required" name="product-name">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Имя</p>
					<input type="text" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Email</p>
					<input type="email" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Телефон</p>
					<input type="tel" class="b-input required">
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<label class="b-label">
					<p class="b-label__txt">Сообщение</p>
					<textarea class="b-input"></textarea>
				</label>
				<label class="b-label b-label--checkbox">
					<input type="checkbox" class="input-check-agreement-data required">
					<div class="b-checkbox">
						<i class="icon icon-checked--red"></i>
					</div>
					<div class="b-checkbox__text">Согласие на <a href="#">обработку данных</a></div>
					<p class="error-text">Заполните пожалуйста поле</p>
				</label>
				<div class="txt-c">
					<input type="submit" class="btn btn--red" value="Отправить" >
				</div>
			</form>
		</div>
	</div>

	<div class="modal-filter b-tab-wrapper" id="modal-filter">
		<div class="modal-filter__head">
			<div class="b-modal__title">Расположение</div>
			<div class="b-tabs">
				<span class="b-tabs__item active">Метро</span>
				<span class="b-tabs__item">Округ</span>
				<span class="b-tabs__item">Район</span>  
				<span class="b-tabs__item">Улица</span>
				<span class="b-tabs__item">Карта</span>
			</div>
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
							<input type="reset" class="btn btn--hov-blue js-reset-map" value="Очистить карту">
						</div>
					</div>
				</div>
			</div>
	</div>
</div>