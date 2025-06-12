<?php
/**
 * Template Name: 404 Page
 */
get_header(); // Подключаем header.php
?>
<main>
<div class="container">
    <section class="error-404__content">
        
        <h1 class="error-404__title">404</h1>
        <p class="error-404__subtitle">Страница не найдена</p>
        <p class="error-404__text">Запрошенная страница не существует или была перемещена.</p>
        
        <!-- Поиск по сайту -->
        <div class="error-404__search">
            <?php get_search_form(); ?>
        </div>
        
        <!-- Кнопка на главную -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="error-404__button">
            Вернуться на главную
        </a>
       
    </section>
 </div>
</main>
<?php
get_footer(); // Подключаем footer.php
?>