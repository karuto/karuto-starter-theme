<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
  <label>
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
    <input type="search" class="searchform-input"
      placeholder="<?php echo esc_attr_x( 'Enter keywords', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <input type="submit" class="searchform-submit"
    value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
