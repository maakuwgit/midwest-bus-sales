<?php
  $hero = array(
    'supertitle'  => get_field('hero_supertitle'),
    'heading'     => get_field('hero_heading'),
    'image'       => get_field('hero_image'),
    'overlay'     => get_field('overlay_strength'),
    'video'       => get_field('hero_video')
  );

  ll_include_component(
    'hero',
    $hero
  );
?>
