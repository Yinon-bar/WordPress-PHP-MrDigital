<?php get_header(); ?>
<div class="page-wrap">
  <div class="container">

    <h1><?php echo single_cat_title() ?></h1>

    <?php get_template_part("includes/section", "archive") ?>
    <?php previous_post_link() ?>
    <?php next_post_link() ?>
  </div>
  <h1>test10</h1>
</div>


<?php get_footer(); ?>
