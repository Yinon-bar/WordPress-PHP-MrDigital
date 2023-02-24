<?php

function loadScripts()
{
  wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css");
}

add_action('wp_enqueue_scripts', 'loadScripts');
