<?php
  $cat = get_queried_object();

  if( is_archive() ){
    $heading   = $cat->name;
    $overlay = 0.6;
    $image   = get_the_post_thumbnail( get_option( 'page_for_posts' ) );
  }else{
    $heading      = get_field('blog_hero_heading', $cat);
    $subheading   = get_field('blog_hero_subheading', $cat);
    $overlay      = get_field('blog_overlay_strength', $cat);
    $image        = get_field('blog_image', $cat);
  }

  $hero = array(
    'supertitle'  => $supertitle,
    'heading'     => $heading,
    'image'       => $feature,
    'overlay'     => $overlay,
    'video'       => $video
  );

  ll_include_component(
    'hero',
    $hero
  );
?>