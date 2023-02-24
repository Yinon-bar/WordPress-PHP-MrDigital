<?php if (have_posts()) {
  while (have_posts()) { ?>
    <?php the_post(); ?>
    <p><?php echo get_the_date() ?></p>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
<?php the_author();
  }
} ?>