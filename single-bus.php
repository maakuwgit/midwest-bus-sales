<?php while (have_posts()) : the_post(); ?>
  <?php
    $is_new     = false;
    $bus_types  = get_the_terms(get_the_ID(), 'ownership');

    if( $bus_types ) {
      foreach($bus_types as $type) {
        if( $type->slug === 'new' ) $is_new = true;
      }
    }
  ?>
  <?php if( $is_new ) : ?>

    <?php get_template_part('templates/partials/header', 'page'); ?>
    <?php include( locate_template('templates/partials/synopsis.php') ); ?>
    <?php include( locate_template('templates/partials/components.php') ); ?>
    <?php include( locate_template('templates/partials/prefooter.php') ); ?>

  <?php else : ?>

    <?php get_template_part('templates/partials/header', 'used-bus'); ?>
    <section class="bus__details">

      <div class="container row stretch">
        <?php include( locate_template('templates/partials/image-slider.php') ); ?>

        <?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>
        <aside class="bus__quote col col-md-5of12 col-lg-5of12 col-xl-5of12 col-xxl-5of12">
          <?php gravity_form( 6, false, false ); ?>
        </aside>
        <?php endif; ?>

      </div>

    </section>

    <?php include( locate_template('templates/partials/bus-details.php') ); ?>

  <?php endif; ?>

<?php endwhile; ?>