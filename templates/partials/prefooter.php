<?php
  $prefooter = array(
    'icons'    => get_field('prefooter_icon_links'),
    'title'    => get_field('prefooter_title'),
    'content'  => get_field('prefooter_content')
  );

  ll_include_component(
    'prefooter',
    $prefooter
  )
?>
