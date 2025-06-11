<form
    role="search"
    method="get"
    class="search-form"
    action="<?php echo home_url( '/' ); ?>"
>
    <label>
      <input
        type="search"
        autocomplete="off"
        class="search-field"
        placeholder="<?php echo esc_attr_x( 'Найти магазин', 'placeholder' ) ?>"
        value="<?php echo get_search_query() ?>"
        name="s"
      />
    </label>
    <button type="submit" class="search-submit">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/search.svg" alt="search" />
    </button>
</form>

