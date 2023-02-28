<?php get_header(); ?>
<div class="page-wrap">
  <div class="container">

    <h1>Search Results: '<?php echo get_search_query() ?>'</h1>


    <?php get_template_part("includes/section", "archive") ?>
    <?php previous_post_link() ?>
    <?php next_post_link() ?>
  </div>
</div>


<?php get_footer(); ?>