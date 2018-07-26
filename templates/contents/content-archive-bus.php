<div class="container row stretch">

  <?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

  <aside class="bus__filters col col-md-4of12 col-lg-4of12 col-xl-4of12 col-xxl-4of12">
    <?php gravity_form( 5, false, false ); ?>
  </aside>
  <!-- .bus__filters.col -->

  <?php endif; ?>

  <article class="bus__entries col col-md-8of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12">
<?php
  $args    = array(
            'post_type'     => 'bus',
            'post_status'   => 'publish',
            'order'         => 'ASC',
            'showposts'     => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'ownership',
                'field' => 'slug',
                'terms' => 'new',
                'include_children' => true,
                'operator' => 'NOT IN'
              )
            )
          );

  $buses = new WP_Query( $args );

  if ( $buses->have_posts() ) : ?>

  <?php while ( $buses->have_posts()) : $buses->the_post(); ?>
    <?php include( locate_template('templates/partials/bus-row.php') ); ?>
  <?php endwhile; ?>

<?php endif; ?>
  </article>
  <!-- .bus__entries.col -->

</div>
<!-- .container.row.stretch -->