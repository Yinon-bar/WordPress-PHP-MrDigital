<?php get_header(); ?>
<div class="page-wrap">
  <div class="container">

    <?php if (has_post_thumbnail()) { ?>
      <img src="<?php the_post_thumbnail_url('blog-large') ?>" class="img-fluid mb-3 img-thumbnail">
    <?php  } ?>

    <?php get_template_part("includes/section", "blogcontent") ?>
  </div>
</div>


<?php get_footer(); ?>
