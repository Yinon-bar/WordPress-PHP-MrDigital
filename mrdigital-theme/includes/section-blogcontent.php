<?php if (have_posts()) {
  while (have_posts()) { ?>
    <?php the_post(); ?>
    <p><?php echo get_the_date() ?></p>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    <?php the_author();

    $tags = get_the_tags();
    foreach ($tags as $tag) { ?>
      <a href="echo get_tag_link($tag->term_id);" class="badge bg-success">
        <?php echo $tag->name ?>
      </a>
    <?php }

    $categories = get_the_category();
    foreach ($categories as $category) { ?>
      <a href="<?php echo get_category_link($category->term_id); ?>" class="badge bg-primary">
        <?php echo $category->name ?>
      </a>
<?php   }
  }
} ?>