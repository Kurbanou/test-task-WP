<footer class="footer">
      <div class="container footer__container">
        <div class="footer-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" width="170" />
          </a>          
        </div>

        <ul class="footer__rubriki">
           <?php wp_nav_menu([
              'theme_location' => 'footer_menu_1',
              'container'      => false,
              'menu_class'     => 'footer__rubriki',
            ]); ?>
        </ul>
        <ul class="footer__nav">
          <?php wp_nav_menu([
            'theme_location' => 'footer_menu_2',
            'container'      => false,
            'menu_class'     => 'footer__nav',
          ]); ?>
        </ul>

        <form
          role="search"
          method="get"
          class="search-form"
          action="<?php echo home_url(); ?>"
        >
          <label>
            <input
              type="search"
              autocomplete="off"
              class="search-field"
              placeholder="Найти магазин"
              value=""
              name="s"
            />
          </label>
          <button type="submit" class="search-submit">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/search.svg" alt="search" />
          </button>
        </form>
        <div class="footer__socials-icons">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/telega.svg" alt="icon" /></a>
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/vk.svg" alt="icon" /></a>
        </div>

        <div class="footer__info">
          <p>300041, Тульская обл., <br />г. Тула, ул. Путейская, д. 5</p>
          <p>ТЦ Сарафан: 10:00-21:00 <br />Лента: 08:00-22:00</p>
          <a href="tel:+74872338055">+7 (4872) 33-80-55</a>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    
  </body>
</html>