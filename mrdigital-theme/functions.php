<?php

function loadScripts()
{
  wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css");
  wp_enqueue_style("mainStyle", get_stylesheet_uri());
  wp_enqueue_script("bootstrapJS", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js", 'jquery', false, true);
}

add_action('wp_enqueue_scripts', 'loadScripts');
