<? include('header.php'); ?>

			<div class="container no-gutters">
				<div class="row no-gutters">
					<div class="col content-sm d-none d-lg-flex">
					</div>
					<div class="col content-bg b-content p-0">
						<div class="pos-r">	
							<div class="b-filter">
								<? include('filter.php') ?>
							</div>
						</div>
					</div>
				</div>
			</div>

<div class="not-found-wrap">
	<div class="container not-found-container">
		<div class="not-found-subtitle">ОШИБКА 404</div>
		<h1 class="not-found-title">Страница не найдена</h1>
		<p>Проверьте, правильно ли вы ввели адрес. Правильно? Тогда, возможно, на сайте идут технические работы. Обновите страницу через пару минут или прямо сейчас закажите звонок и мы поможем решить вашу проблему:</p>
		<form class="not-found-form">
			<label class="b-label">
				<p class="b-label__txt">Имя</p>
				<input type="text" class="b-input required">
				<p class="error-text">Заполните пожалуйста поле</p>
			</label>
			<label class="b-label">
				<p class="b-label__txt">Телефон</p>
				<input type="tel" class="b-input required">
				<p class="error-text">Заполните пожалуйста поле</p>
			</label>
			<label class="b-label b-label--checkbox">
				<input type="checkbox" class="input-check-agreement-data required">
				<div class="b-checkbox">
					<i class="icon icon-checked--red"></i>
				</div>
				<div class="b-checkbox__text">Согласие на <a href="#">обработку данных</a></div>
				<p class="error-text">Заполните пожалуйста поле</p>
			</label>
			<input type="submit" class="btn btn--red" value="Заказать звонок">
		</form>
	</div>
</div>

<? include('footer.php'); ?>

<? include('include-scripts.php') ?>

</div>
</body>
</html>