<footer class="footer">
      <div class="container footer__container">
        <div class="footer-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" width="170" />
          </a>          
        </div>
        
        <?php wp_nav_menu([
            'theme_location' => 'footer_menu_1',
            'container'      => false,
            'menu_class'     => 'footer__rubriki',
          ]); ?>      
      
        <?php wp_nav_menu([
          'theme_location' => 'footer_menu_2',
          'container'      => false,
          'menu_class'     => 'footer__nav',
        ]); ?>
        

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

        <?php
          // Получаем данные футера
          $footer_data = get_page_by_path('footer');
          if ($footer_data) {
              $social_telegram = get_field('telega', $footer_data->ID);
              $social_vk = get_field('vk', $footer_data->ID);
              $contact_address = get_field('adres', $footer_data->ID);
              $contact_schedule = get_field('rezhim', $footer_data->ID);
              $contact_phone = get_field('telefon', $footer_data->ID);
          }
          ?>

          <!-- Социальные сети -->
          <div class="footer__socials-icons">
              <?php if (!empty($social_telegram)): ?>
                  <a href="<?php echo esc_url($social_telegram); ?>" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    aria-label="Наш Telegram">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/svg/telega.svg" 
                          alt="Telegram" 
                          loading="lazy"
                          width="40" 
                          height="40">
                  </a>
              <?php endif; ?>

              <?php if (!empty($social_vk)): ?>
                  <a href="<?php echo esc_url($social_vk); ?>" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    aria-label="Наша страница ВКонтакте">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/svg/vk.svg" 
                          alt="VK" 
                          loading="lazy"
                          width="40" 
                          height="40">
                  </a>
              <?php endif; ?>
          </div>

          <!-- Контактная информация -->
          <div class="footer__info">
              <?php if (!empty($contact_address)): ?>
                  <div class="footer-address">
                      <?php 
                      // Для WYSIWYG используем wp_kses_post
                      echo wp_kses_post($contact_address); 
                      ?>
                  </div>
              <?php endif; ?>

              <?php if (!empty($contact_schedule)): ?>
                  <div class="footer-schedule">
                      <?php echo wp_kses_post($contact_schedule); ?>
                  </div>
              <?php endif; ?>

              <?php if (!empty($contact_phone)): ?>
                  <?php 
                  $clean_phone = preg_replace('/[^0-9+]/', '', $contact_phone);
                  $formatted_phone = preg_replace('/(\+?\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/', '$1 ($2) $3-$4-$5', $clean_phone);
                  ?>
                  <a href="tel:<?php echo esc_attr($clean_phone); ?>" class="footer-phone">
                      <?php echo esc_html($formatted_phone); ?>
                  </a>
              <?php endif; ?>
          </div>        
      

      </div>
    </footer>
    <?php wp_footer(); ?>
    
  </body>
</html>