<?php if (have_posts()) : while (have_posts()) { ?>
    <div class="card mb-3">
      <div class="card-body">
        <?php if (has_post_thumbnail()) { ?>
          <img src="<?php the_post_thumbnail_url('blog-small') ?>" class="img-fluid mb-3 img-thumbnail">
        <?php  } ?>
        <?php the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink() ?>" class="btn btn-success">Read more</a>
      </div>
    </div>
<?php }
endif; ?>