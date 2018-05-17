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
				<input type="text" class="b-input">
			</label>
			<label class="b-label">
				<p class="b-label__txt">Телефон</p>
				<input type="tel" class="b-input">
			</label>
			<input type="submit" class="btn btn--red" value="Заказать звонок">
		</form>
	</div>
</div>

<? include('footer.php'); ?>

	<script src="js/scripts.min.js"></script>
</div>
</body>
</html>