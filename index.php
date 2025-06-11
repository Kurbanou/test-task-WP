<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testWP
 *  *

 */


get_header(); ?>  

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
			 <div class="news-content"> 
				 <?php if ( have_posts() ) : ?>  
                <?php while ( have_posts() ) : the_post(); ?>  
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
                        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>  
						<h4> Опубликовано: <?php echo get_the_date('F j, Y'); ?> </h4>  
                        <div class="post-content">
							 <?php   
                                    // Check if a post thumbnail has been set  
                                    if ( has_post_thumbnail() ) {  
                                        // Display the thumbnail  
                                        echo '<a href="' . get_permalink() . '">' . get_the_post_thumbnail( get_the_ID(), 'medium' ) . '</a>';   
                                    } else {  
                                        echo '<p>Изображение не найдено.</p>'; // Message if the thumbnail is absent  
                                    }  
                                ?>                            
							<div>
								<?php the_excerpt(); ?>
							</div>   
                        </div>                      
                    </article>  
                <?php endwhile; ?> 
				  <?php else : ?>  
                <p>Записей не найдено.</p>  
            <?php endif; ?> 
				 </div>

                <div class="pagination">  
					<?php  
						global $wp_query; // Получаем глобальный объект запроса  

						$big = 999999999; // Используемое значение для замены  
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Текущая страница  

						$pagination_args = array(
							'base'         => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'format'       => '?paged=%#%',
							'current'      => max(1, get_query_var('paged')),
							'total'        => $wp_query->max_num_pages,
							'prev_text'    => '←',
							'next_text'    => '→',
							'end_size'     => 1, // Количество ссылок в начале и в конце
							'mid_size'     => 1, // Количество ссылок вокруг текущей страницы
						);
						echo paginate_links($pagination_args);
					?>  
                </div>  
        </div>  
    </section>  
</main>  

<?php get_footer(); ?>



 