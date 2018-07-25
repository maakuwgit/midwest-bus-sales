<div class="container row stretch">

  <?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

  <aside class="bus__filters col col-4of12">
    <?php gravity_form( 5, false, false ); ?>
  </aside>
  <!-- .bus__filters.col -->

  <?php endif; ?>

  <div class="bus__entries col col-8of12">

  <?php while (have_posts()) : the_post(); ?>
    <?php include( locate_template('templates/partials/bus-row.php') ); ?>
  <?php endwhile; ?>

  </div>
  <!-- .bus__entries.col -->

</div>
<!-- .container.row.stretch -->