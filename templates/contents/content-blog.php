<?php
  $first_cat = false;
  $active = '';
  $curr_cat   = get_the_category();
  if($curr_cat) {
    $first_cat = $curr_cat[0];
  }

  $categories = get_categories();

?>
<nav class="entry__meta">

  <div class="container row">

    <div class="col entry__header">

      <a class="entry__meta_category <?php echo ( !is_home() ? 'btn--tertiary ' : ''); ?>btn btn--radius" href="<?php bloginfo('url'); ?>/news/">Company</a>
          <!-- .entry__meta_category -->
    <?php

      if ($categories) :

        foreach($categories as $category) :

          if( $category->term_id > 1 ) :
            if( is_home() ) {
              $active = ' btn--tertiary';
            }else {
              if ( $first_cat ){
                  $active = ( $first_cat->term_id !== $category->term_id ? ' btn--tertiary' : '' );
              }
            }
            ?>

      <a class="entry__meta_category<?php echo $active; ?> btn btn--radius" href="<?php echo get_tag_link($category->term_id); ?>"><?php echo $category->name; ?></a>
          <!-- .entry__meta_category -->

          <?php endif;

        endforeach;

      endif;
    ?>
    </div>

  </div>

</nav>
  <!-- .entry__meta -->
<?php
ll_include_component(
  'blog-grid'
);
?>