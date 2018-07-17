<?php

  if( is_archive() ){

    $cat          = get_queried_object();
    $heading      = $cat->name;
    $overlay      = 0.5;
    $image        = get_the_post_thumbnail_url( get_option( 'page_for_posts' ), 'large' );

  }else{

    $supertitle   = get_field('hero_supertitle');
    $heading      = get_field('hero_heading');
    $overlay      = get_field('overlay_strength');
    $image        = get_field('hero_image');
    $video        = get_field('hero_video');

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