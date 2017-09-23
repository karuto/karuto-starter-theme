<?php if (!have_posts()) : ?>
  <?php get_template_part('templates/feeds-oops'); ?>
<?php else: /* If there are posts */ ?>
  <?php get_template_part('templates/feeds-core'); ?>
<?php endif; ?>
