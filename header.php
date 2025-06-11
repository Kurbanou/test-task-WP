<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      property="og:title"
      content="Аренда помещений в ТЦ «Сарафан» в Туле | От 25 до 1000 м²"
    />
    <meta
      property="og:description"
      content="Торговые и офисные помещения в аренду от собственника. Площадь Московского вокзала, удобная транспортная развязка."
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://ваш-сайт.ru/arenda-tuc-sarafan" />
    <meta
      property="og:image"
      content="https://ваш-сайт.ru/img/sarafan-tula.jpg"
    />

    <meta
      name="keywords"
      content="аренда ТЦ Тула, Сарафан аренда помещений, торговые площади Тула, аренда от собственника, площадь Московского вокзала"
    />
    <title>
      Аренда помещений в ТЦ «Сарафан» в Туле | От 25 до 1000 м² | Собственник
    </title>
    <link rel="stylesheet" href="styles.css" />
     <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__top">
          <a href="<?php echo home_url(); ?>" class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="ТЦ Сарафан" />
          </a>

          <div class="header__hours">
            <p class="header__hours_title">Режим работы:</p>
            <div>
              <p>пн-вс 10:00-21:00</p>
              <p>Лента 08:00-22:00</p>
            </div>
          </div>
          <div class="header__link">
            <a href="<?php echo home_url(); ?>">Контакты</a>
            <a href="<?php echo home_url(); ?>">Карта ТЦ</a>
          </div>

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
          <div class="header__burger active">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="nav_container">
          <ul class="header_nav">
           <?php wp_nav_menu([
              'theme_location' => 'header_menu_1',
              'container'      => false,
              'menu_class'     => 'header_nav',
            ]); ?>
          </ul>

          <ul class="rubrika_nav">
            <?php wp_nav_menu([
              'theme_location' => 'header_menu_2',
              'container'      => false,
              'menu_class'     => 'rubrika_nav',
            ]); ?>
          </ul>
        </div>
      </div>
    </header>