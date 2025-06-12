<?php

    get_header();

/* Template name: page */

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
        <section class="single">
            <div class="container">                
                <h1><?php the_title(); ?></h1>  
				              
                   <div class="single_content">
                        <?php the_content(); ?>
                    </div>
                
            </div>
        </section>
    </main>




<?php get_footer( ); ?>