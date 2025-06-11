<?php

    get_header();

/* Template name: page */

?>
   <main>
        <section class="single">
            <div class="wrapper">
                <div class="single_inner">
                    <h1><?php the_title(); ?></h1>                    
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>




<?php get_footer( ); ?>