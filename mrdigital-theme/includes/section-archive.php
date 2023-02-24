<?php if (have_posts()) : while (have_posts()) { ?>
    <div class="card mb-3">
      <div class="card-body">
        <?php the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink() ?>" class="btn btn-success">Read more</a>
      </div>
    </div>
<?php }
endif; ?>