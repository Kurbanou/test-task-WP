<?php
/**
 * The template for displaying all single posts это для конкретной новости
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package testWP
 */

get_header();
?>		

    <main>
        <section class="single">
            <div class="container">                
                <h1>
                    <?php single_post_title(); ?>
                </h1>					
				<?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
				<h4>Опубликовано <?php the_time('F j, Y'); ?></h4>										
				<?php endwhile; endif; ?>                    
                <?php the_content(); ?></div>   
            </div>                       
        </section>
    </main>

<?php
get_footer();
?>


