<?php get_header(); ?>
<div class="serv-block-1">
	<div class="content">
		<p class="directory">Главная / Лицензии</p>
		<h1>Оформление лицензии</h1>
		<div class="serv-block-1-inside">
			<div class="calc">
				<p>Стоимость разработки от</p>
				<div>
					<form>
						<input type="button" value="Рассчитать стоимость" id="">
						<input type="button" value="Онлайн калькулятор" id="">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="serv-block-2">
	<div class="serv-block-2-main content">
		<div class="serv-block-2-left">
			<img src="<?php bloginfo("template_url");?>/img/serv-block-2-img.png">
			<input type="button" value="Оформить по акции">
		</div>
		<div class="serv-block-2-right">
			<p class="sb-2-right-1">Условия по акции</p>
			<p class="sb-2-right-2">Обратитесь к нам прямо сейчас и получите <span class="font-weight-600">3 подарка:</span></p>
			<p class="sb-2-right-2">1. <span class="font-weight-600">Скидка 10 %</span> на оформление лицензииx</p>
			<p class="sb-2-right-2">2. <span class="font-weight-600">Бесплатная оценка</span> Вашего бизнес проекта</p>
			<p class="sb-2-right-2">3. <span class="font-weight-600">Бесплатный экологический аудит</span></p>
			<p class="sb-2-right-3">Только до 30 марта!</p>
		</div>
	</div>
</div>
<div class="serv-block-3">
	<div class="content">
		<div class="serv-block-3-inside">
			<h2>Виды лицензий</h2>
			<div class="serv-block-3-wrap">
				<div class="row-1">
					

			<?php $query = new WP_Query(array(
					"post_type" => "license",
					"posts_per_page" => -1 ));
				if ($query->have_posts()) :
					while ($query->have_posts()) :
						$query->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, "medium", true);
					?>
					<div>
						<p><?php the_title();?></p>
						<input type="button" value="Подробнее">
					</div>

				<?php endwhile ?>
			<?php endif ?>
					



<!-- 					<div>
						<p>Лицензия на деятельность<br> по обработке</p>
						<input type="button" value="Подробнее">
					</div>
					<div>
						<p>Лецензия на деятельность<br> по утилизаци</p>
						<input type="button" value="Подробнее">
					</div>
				</div>
				<div class="row-2">
					<div>
						<p>Лицензия на деятельность<br> по обезвреживанию</p>
						<input type="button" value="Подробнее">
					</div>
					<div>
						<p>Лицензия на деятельность по<br> размещению отходов 1-4 классов<br> опасности</p>
						<input type="button" value="Подробнее">
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="serv-block-4">
	<div class="content">
		<div class="serv-block-4-inside">
			<div class="sb-4-row">
				<div class="sb-4-block">
					<div class="sb-4-block-text">
						<h3>Для чего нужна лицензия?</h3>
						<ul>
							<li><p>Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в страшное насекомое.</p></li>
							<li><p>Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед.</p></li>
							<li><p>На портрете была изображена дама в меховой шляпе и боа, она сидела очень прямо.</p></li>
						</ul>
					</div>

					<div class="sb-4-block-pop">
						<p>Хотите узнать, необходимо ли вам оформление лицензии?</p>
						<div class="sb-4-pop-inside-serv">
							<label class="pop-top-serv" for="pop-serv">Консультация эксперта</label>
							<input type="checkbox" id="pop-serv" class="display-none">
							<!--POP UP -->
							<div class="pop-activation-serv">
								<div class="pop-top-flex-serv">
									<div class="pop-top-block-serv">
										<label for="pop-serv"><img src="<?php bloginfo("template_url");?>/img/pop-cross.png" class="pop-cross-serv"></label>
										<div class="serv-pop-column">
											<div class="serv-pop-up">
												<h4><span class="font-weight-600">Лицензия на деятельность по сбору и транспортированию</span></h4>
												<p>Лицензия на сбор отходов необходима операторам по обращению с отходами, деятельность которых связана с приемом и поступлением отходов I-IV классов опасности от физических лиц и/или юридических лиц в целях их дальнейшего транспортирования, обработки, утилизации, обезвреживания, размещения.</p>
											</div>
											<div class="serv-pop-down-row">
												<div class="serv-pop-left">
													<p><span class="font-weight-600">Параметры лицензии:</span></p>
													<ul>
														<li><p>лицензия выдается бессрочно;</p></li>
														<li><p>лицензия действует на территории всей России;</p></li>
														<li><p>выдает лицензии на утилизацию отходов Росприроднадзор.</p></li>
													</ul>
													<p><span class="font-weight-600">Стоимость лицензии под ключ</span>: от 350 тыс. рублей (без ограничений на количество видов опасных отходов).</p>
													<p><span class="font-weight-600">Срок получения</span>: до 6 месяцев</p>
													<p><span class="font-weight-600">Госпошлина</span> - 7 500 рублей (на основании подп. 92 п. 1 ст. 333. Налогового кодекса Российской Федерации (в ред. от 05.10.2015).</p>
												</div>
												<div class="pop-content-serv">
													<p>Оставьте заявку сейчас и получите скидку!</p>
													<div class="pop-input-serv">
														<form action="">
															<div class="row-serv">
																<input type="text" name="" id="" placeholder="Ваше имя">
															</div>
															<div class="row-serv">
																<input type="tel" name="" id="" placeholder="Телефон">
															</div>
															<input type="button" value="отправить" class="pop-button-serv">
															<p class="serv-pop-small">В соответствии с Федеральным законом Российской Федерации - мы гарантируем полную конфиденциальность всех консультаций.</p>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END POP UP -->
						</div>
					</div>
				</div>
				<div class="sb-4-block">
					<img src="<?php bloginfo("template_url");?>/img/sb-4-img-1.png">
				</div>
			</div>
			<div class="sb-4-row">
				<div class="sb-4-block">
					<h3>Что будет, если работать без лицензии?</h3>
					<ul>
						<li><p>Приостановление деятельности до 90 дней и штраф до 250 000 руб.</p></li>
						<li><p>Лицензия дает возможности сотрудничать с новыми партнерами и увеличиват прибыль компании.</p></li>
						<li><p>Лицензия на отходы необходима, чтобы владеть, пользоваться или распоряжаться отходами 1-4 класса опасности (в терминологии ФЗ). Штрафы для юридических лиц за несоблюдение закона – 100 000 — 250 000 рублей.</p></li>
					</ul>
				</div>
				<div class="sb-4-block">
					<img src="<?php bloginfo("template_url");?>/img/sb-4-img-2.png">
				</div>
			</div>
			<div class="sb-4-row">
				<div class="sb-4-block">
					<h3>Получите ответы на 5 основых вопросов по оформлению лицензии:</h3>
					<ul>
						<li><p>Какие сроки получения лицензии?</p></li>
						<li><p>Какая стоимость получения лицензии?</p></li>
						<li><p>Какие требования предъявляются компании для получения лицензии?</p></li>
						<li><p>Какие требования к площадке?</p></li>
						<li><p>В аренде или в собственности должа быть техника?</p></li>
					</ul>
					<div class="sb-4-input">
						<p>Мы перезвоним вам в течении 3 минут</p>
						<form action="">
							<input type="tel">
							<input type="button" value="Получить ответы">
						</form>
					</div>
				</div>
				<div class="sb-4-block">
					<img src="<?php bloginfo("template_url");?>/img/sb-4-img-3.png">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="serv-block-5">
	<div class="content">
		<div class="serv-block-5-inside">
			<div class="sb-5-left">
				<h3>Расчет стоимость лицензии</h3>
				<div class="calc-row">
					<p class="calc-offer">Конечная стоимость оформления лицензии зависит от вида деятельности</p>
					<p class="calc-value"></p>
				</div>
				<div class="calc-row">
					<p class="calc-offer">Рассрочка оплаты за услуги</p>
					<p class="calc-value">0%</p>
				</div>
				<div class="calc-row">
					<p class="calc-offer">Предвариетльный экологический аудит </p>
					<p class="calc-value">0 руб.</p>
				</div>
				<div class="calc-row">
					<p class="calc-offer">Сопровождение и согласование</p>
					<p class="calc-value">0 руб.</p>
				</div>
				<div class="calc-row">
					<p class="calc-offer">Разработка природоохранных документов </p>
					<p class="calc-value">0 руб.</p>
				</div>
				<div class="calc-row">
					<p class="calc-offer">Персональный менеджер </p>
					<p class="calc-value"><span class="calc-green">Бесплатно</span></p>
				</div>
			</div>
			<div class="sb-5-right">
				<div class="calc-1">
					<div><p>Калькулятор стоимости</p></div>
					<div><img src="<?php bloginfo("template_url");?>/img/calc.png"></div>
					<div><input type="button" name="" value="Начать расчет"></div>
				</div>
				<div class="calc-2">
					<p>Выберете тип юридического лица</p>
					<form>
						<label for="calc-check" class="calc-box"><input id="calc-check" type="checkbox" class="display-none"></label>
						<p>ООО</p>
						<label for="calc-check" class="calc-box"><input id="calc-check" type="checkbox" class="display-none"></label>
						<p>ИП</p>
						<label for="calc-check" class="calc-box"><input id="calc-check" type="checkbox" class="display-none"></label>
						<p>Другое</p>
					</form>
					<input type="" name="" value="Далее">
				</div>
				<div class="calc-3">
					<p>Все готово</p>
					<form action="">
						<div class="calc-3-row">
							<div class="calc-icon-1"></div>
							<input type="text" placeholder="Введите имя">
						</div>
						<div class="calc-3-row">
							<div class="calc-icon-2"></div>
							<input type="tel" placeholder="Введите телефон">
						</div>
						<input type="button" value="Получить расчет">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="serv-block-6">
	<div class="content">
		<div class="serv-block-6-inside">
			<div class="serv-block-6-left">
				<h3>Гарантия возврата денег</h3>
				<p>“Если вас не устроит качество услуги, то мы вернем Вам деньги в течении 3-х рабочих дней. Благодаря опыту и профессионализму наших сотрудников, качество наших услуг отвечают самым высоким требованиям.”</p>
			</div>
			<div class="serv-block-6-right">
				<img src="<?php bloginfo("template_url");?>/img/man-photo.png" alt="" class="man-photo">
				<p>Генеральный директор,<br>
					Андрей Чистый</p>
					<a href="#"><img src="<?php bloginfo("template_url");?>/img/vk.png"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="serv-block-7">
		<div class="content">
			<span class="sb-7-p-top"><p>Преимущества оформления лицензии в<br> 
				Департаменте экологии и природопользовании?</p></span>
				
					<!-- <div><img src="<?php bloginfo("template_url");?>/img/shape-1.png"><p>Лидеры отрасли</p></div>
					<div><img src="<?php bloginfo("template_url");?>/img/shape-2.png"><p>Опыт работы 9 лет</p></div>
					<div><img src="<?php bloginfo("template_url");?>/img/shape-3.png"><p>Высококвалифицированный<br> 
						штат специалистов</p></div>
					<div><img src="<?php bloginfo("template_url");?>/img/shape-4.png"><p>Более 436 клиентов пришли<br> 
							к нам по рекомендации</p></div>
					<div><img src="<?php bloginfo("template_url");?>/img/shape-5.png"><p>Более 752 успешно<br>выполненных проектов</p></div>
					<div><img src="<?php bloginfo("template_url");?>/img/shape-6.png"><p>Максимально быстрые сроки<br>разработки проектов</p></div> -->
					<div class="wrap-list">
							<?php if($advs = get_field('advantages')):?>
								<?php foreach($advs as $adv): ?>
									<div>
										<img src="<?=$adv['img']?>">
										<p><?=$adv['description']?></p>
									</div>
								<?php endforeach ?>
							<?php endif ?>
						</div>
				</div>
			
		</div>
		<div class="serv-block-8">
			<div class="content">
				<h2>Отзывы клиентов, оформивших у нас лицензию</h2>
				<div class="serv-block-8-inside">
					<?php if($thanks = get_field('gallery')): ?>
						<?php foreach($thanks as $thank): ?>
							<div class="item">
								<a data-fancybox="gallery" href="<?=$thank['sizes']['large']?>"><img src="<?=$thank['sizes']['medium']?>"></a>
								<p><?=$thank['title']?></p>
							</div >
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
		<div class="serv-block-9">
			<div class="content">
				<div class="serv-block-9-inside">
					<div class="sb-9-left">
						<p>Остались вопросы?</p>
						<a href="#">Консультация эксперта</a>
					</div>
					<div class="sb-9-right">
						<p>Нет, все понятно</p>
						<a href="#">Получить коммерческое предложение</a>
					</div>
				</div>
			</div>
		</div>
		<div class="promotions">
			<p><span class="fw-700">Внимание акция!</span> Скидка 20 % на услуги до 14 апреля! Звоните прямо сейчас!</p>
		</div>
		<?php get_footer(); ?>
