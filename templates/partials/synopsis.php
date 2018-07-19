<?php

  $synopsis    = array(
    'heading'     => get_field('synopsis_heading'),
    'content'      => get_field('synopsis_content')
  );

  ll_include_component(
    'synopsis',
    $synopsis
  );
?>