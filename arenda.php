<?php

    get_header();

/* Template name: arenda */

?>
	<main>
	    <section class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs_inner">
				<?php
				// Главная страница (всегда выводится)
				echo '<p class="beforePage"><a href="' . esc_url(home_url('/')) . '">Главная</a></p>';
				echo '<p class="beforePage">></p>';

				// Страницы/записи
				if (is_single() || is_page()) {
					// Родительские страницы (если есть)
					if ($post->post_parent) {
						$parents = array_reverse(get_post_ancestors($post->ID));
						foreach ($parents as $parent) {
							echo '<p class="beforePage"><a href="' . esc_url(get_permalink($parent)) . '">' . esc_html(get_the_title($parent)) . '</a></p>';
							echo '<p class="beforePage">></p>';
						}
					}
					// Текущая страница
					echo '<p class="thisPage">' . esc_html(get_the_title()) . '</p>';
				} 
				// Категории
				elseif (is_category()) {
					$cat = get_queried_object();
					echo '<p class="thisPage">' . esc_html($cat->name) . '</p>';
				}
				// Поиск
				elseif (is_search()) {
					echo '<p class="thisPage">Результаты поиска</p>';
				}
				// 404
				elseif (is_404()) {
					echo '<p class="thisPage">Страница не найдена</p>';
				}
				?>
			</div>
		</div>
		</section>
				
	
	   <section class="promo">
	     <div class="container promo-wrapper">
	       <div class="promo-image">

		   <div class="promo-image">
				<?php 
				$promo_img = get_field('foto-promo'); // Основное поле
				$default_img = get_template_directory_uri() . '/assets/img/rent-banner.jpg'; // Фолбэк
				
				if ($promo_img) {
					echo '<img src="' . esc_url($promo_img['url']) . '" alt="' . esc_attr($promo_img['alt'] ?: 'Аренда') . '">';
				} else {
					echo '<img src="' . esc_url($default_img) . '" alt="Аренда">';
				}
				?>
			</div>

	         <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rent-banner.jpg" alt="Аренда" /> -->






	       </div>
	       <div class="promo-content">
	         <h1>Аренда в ТУЦ “Сарафан”</h1>
	         <p>
	           Торговый центр «Сарафан», расположенный по адресу: г. Тула, ул.
	           Путейская, д.5 (Площадь Московского вокзала), предлагает помещения
	           в аренду от собственника от 25 до 1000 кв. м.
	         </p>
	           <a href="#" class="download-btn">
                   Скачать презентацию
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/file.svg" alt="icon"/>
                </a>
	         <h2>Преимущества аренды в нашем торговом центре:</h2>
	         <ul class="advantages">
	           <li>
	             ТЦ «Сарафан» находится в 5 минутах езды от центра города на
	             площади Московского вокзала на одной из самых оживленных улиц
	             города – Красноармейский проспект.
	           </li>
	           <li>
	             Рядом жилой массив, пересечение основных транспортных и
	             пешеходных потоков –конечная остановка общественного транспорта,
	             железнодорожный вокзал.
	           </li>
	           <li>
	             На территории ТЦ «Сарафан» есть бесплатная парковка для
	             клиентов, более 500 машиномест, удобный подъезд.
	           </li>
	           <li>
	             Ежедневно наш ТЦ посещает порядка 10 000 тысяч человек различной
	             целевой аудитории
	           </li>
	           <li>Демократичные цены за аренду площади</li>
	           <li>
	             У нас Вы можете арендовать площадь под магазины белья, одежды и
	             обуви, салоны, точки общепита и др.
	           </li>
	         </ul>
	         <p>
	           Открытие торговой точки в одном из оживленных мест города
	           обеспечит доходность, развитие и процветание Вашего бизнеса.
	         </p>
	       </div>
	     </div>
	   </section>
	   <section class="tenants">
	     <div class="container">
	       <h2>Более 130 бутиков и магазинов уже арендуют у нас помещения</h2>
	       <div class="tenants_inner">
	      
			<?php
				// Получаем все 6 изображений из отдельных полей ACF
				$image1 = get_field('slide_image_1');
				$image2 = get_field('slide_image_2');
				$image3 = get_field('slide_image_3');
				$image4 = get_field('slide_image_4');
				$image5 = get_field('slide_image_5');
				$image6 = get_field('slide_image_6');

				// Собираем все непустые изображения в массив
				$images = array();
				if ($image1) $images[] = $image1;
				if ($image2) $images[] = $image2;
				if ($image3) $images[] = $image3;
				if ($image4) $images[] = $image4;
				if ($image5) $images[] = $image5;
				if ($image6) $images[] = $image6;

			if ($images): ?>
			<div class="tenant_slider">
				<div class="slider_over">
					<div class="tenant_slider_inner">
						<?php foreach ($images as $img): ?>
							<img src="<?php echo esc_url($img['url']); ?>" alt="logo" />
						<?php endforeach; ?>
					</div>
				</div>
				<div class="tenant_slider_pagination">
					<img class="tenant_slider_pagination_previous" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/left.svg" alt="svg" />
					<div class="tenant_slider_dots"></div>
					<img class="tenant_slider_pagination_next" src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/right.svg" alt="svg" />
				</div>
			</div>
			<?php endif; ?>


	         <ul class="tenants_list">
	           <li>
	             Якорные арендаторы - Лента, Детский Мир, Технопарк, Модис,
	             Familia, Читай город, Тутанхамон, Л'Этуаль
	           </li>
	           <li>
	             Бренды - EWA, Artigli, Gerzedo, Goergo, Du monde, Petek, Neri
	             Karra, Ledy Collection, Paolo Conte, P'Cont, VINZER, Ace,
	             Tonnelli, Milavitsa, и др.
	           </li>
	           <li>
	             Магазины спортивной одежды и инвентаря: Адреналин, Спорт Лайн
	           </li>
	           <li>
	             Зона фудкорта - Burger King, Империя вкуса, Про Кофий, Добрая
	             сдоба
	           </li>
	           <li>Салоны связи: Билайн, Мегафон, YOTA, Связной, Теле2</li>
	           <li>
	             Зоосад, аптека «Здесь аптека», «Арт-оптика», Fresh Оптика,
	             ковры, салоны штор, текстиль Missis Hatson и Home TEX, салон
	             Арт-Самовар, посуда, подарки, картины, сувениры и другие.
	           </li>
	         </ul>
	       </div>
	     </div>
	   </section>
	   <section class="stats">
	     <div class="container stats-wrapper">
	       <div class="stats-detals">
	         <div class="stat">
	           Общая площадь торгового центра
	           <p class="stat-value">25 816 м²</p>
	         </div>
	         <div class="stat">
	           Площадь, сдаваемая в аренду
	           <p class="stat-value">16 675 м²</p>
	         </div>
	         <div class="stat">
	           Парковка (машиномест)
	           <p class="stat-value">500</p>
	         </div>
	         <div class="stat">
	           Посещаемость (в неделю)
	           <p class="stat-value">100 000 чел</p>
	         </div>
	       </div>
	       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" alt="foto" />
	       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img2.jpg" alt="foto" />
	       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img3.jpg" alt="foto" />
	       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img4.jpg" alt="foto" />
	       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img5.jpg" alt="foto" />
	     </div>
	   </section>
				
	</main>




<?php get_footer( ); ?>