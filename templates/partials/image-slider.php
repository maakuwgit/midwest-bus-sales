<?php
  $slides    = array(
    'slides'     => get_field('image_slider_slides')
  );

  ll_include_component(
    'image-slider',
    $slides
  );
?>