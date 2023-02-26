<?php if (have_posts()) : while (have_posts()) { ?>
    <div class="card mb-3">
      <div class="card-body d-flex">
        <?php if (has_post_thumbnail()) { ?>
          <img src="<?php the_post_thumbnail_url('blog-small') ?>" class="img-fluid mb-3 img-thumbnail mr-3">
        <?php  } ?>
        <?php the_post(); ?>
        <div class="blog-content ms-4">
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>" class="btn btn-success">Read more</a>
        </div>
      </div>
    </div>
<?php }
endif; ?>