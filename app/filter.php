<form action="#">
	<div class="row no-gutters">
		<div class="col-md-8 col-12">
			<div class="b-filter__back d-sm-none">
				<i class="icon icon-arrow-black"></i>
				Назад
			</div>
			<div class="b-filter__body">
				<div class="row">
					<div class="col-sm-6 col-12">
						<label class="b-label">
							<p class="b-label__txt">Тип помещения</p>
							<select class="js-select-styler" multiple="multiple" data-select-2="true" >
								<option value="1">Тип помещения</option>
								<option value="2">Тип помещения1</option>
								<option value="3">Тип помещения2</option>
								<option value="4">Тип помещения3</option>
							</select>
						</label>
						<label class="b-label">
							<p class="b-label__txt">Тип здания</p>
							<select class="js-select-styler" multiple="multiple" data-select-2="true">
								<option value="1">Особняк</option>
								<option value="2">Бизнес-центр</option>
								<option value="3">Тип помещения2</option>
								<option value="4">Бизнес-парк</option>
							</select>
						</label>
						<div class="b-label">
							<p class="b-label__txt">Стоимость</p>
							<div class="row gutters-5">
								<div class="col-6">
									<input type="text" class="b-input b-input__m-b" placeholder="От" />
								</div>
								<div class="col-6">
									<input type="text" class="b-input b-input__m-b" placeholder="До" />
								</div>
							</div>
							<select class="js-select-styler" data-select-2="true">
								<option value="1" selected="selected">за м<sup>2</sup> в год</option>
								<option value="2">за помещение в месяц</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6 col-12">
						<div class="b-label">
							<p class="b-label__txt">Класс</p>
							<label class="filter-select-class">
								<input type="checkbox">
								<span class="filter-select-class__txt">a</span>
							</label>
							<label class="filter-select-class">
								<input type="checkbox">
								<span class="filter-select-class__txt">b</span>
							</label>
							<label class="filter-select-class">
								<input type="checkbox">
								<span class="filter-select-class__txt">b+</span>
							</label>
							<label class="filter-select-class">
								<input type="checkbox">
								<span class="filter-select-class__txt">c</span>
							</label>
						</div>
						<label class="b-label">
							<p class="b-label__txt">Тип здания</p>
							<select class="js-select-styler" multiple="multiple" data-select-2="true">
								<option value="1">Тип здания 1</option>
								<option value="2">Тип здания 2</option>
								<option value="3">Тип здания 3</option>
								<option value="4">Тип здания 4</option>
							</select>
						</label>
						<div class="b-label">
							<p class="b-label__txt">Площадь</p>
							<div class="row gutters-5">
								<div class="col-6">
									<input type="text" class="b-input b-input__m-b" placeholder="От" />
								</div>
								<div class="col-6">
									<input type="text" class="b-input b-input__m-b" placeholder="До" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12 d-md-inline-flex">
			<a href="#modal-filter" class="b-select-location js-mg-pp d-none d-lg-inline-flex" style="background-image: url('img/location.png')">
<!-- 				<ul class="b-select-location__list">
					<li><span>2 округа</span> <button>×</button></li>
				</ul> -->
				<i class="icon icon-location"></i>
				<p>Выбрать расположение</p>
			</a>
			<a href="mob-filter.php" class="b-select-location d-inline-flex d-lg-none" style="background-image: url('img/location.png')">
				<i class="icon icon-location"></i>
				<p>Выбрать расположение</p>
			</a>
		</div>
	</div>
		
	<div class="b-filter__footer">
		<div class="row">
			<div class="col-sm-auto col-12">
				<input type="reset" class="btn btn--hov-blue" value="Очистить">
			</div>
			<div class="col-sm-auto col-12">
				<input type="submit" class="btn btn--red" value="Подобрать">
			</div>
		</div>
	</div>
</form>