<?php
/**
* location-grid
* -----------------------------------------------------------------------------
*
* location-grid component
*/

$defaults = [
  'heading'       => false,
  'content'       => false,
  'num_locations' => 6
];

$component_data = ll_parse_args( $component_data, $defaults );
?>

<?php
/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes        = $component_args['classes'] ?: array();

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('location-grid-') );

/**
 * ACF values pulled into the component from the components.php partial.
 */
$heading = $component_data['heading'];
$content = $component_data['content'];
$args    = array(
            'post_type'     => 'location',
            'post_status'   => 'publish',
            'order'         => 'ASC',
            'showposts'     => -1
          );

  $locations = new WP_Query( $args );

?>

<?php if ( !$locations->have_posts() ) return; ?>
<section class="ll-location-grid <?php echo implode( " ", $classes ); ?>"<?php echo ' id="'.$id.'"'; ?> data-component="location-grid">

    <div class="container row centered center text-center">
    <?php if( $heading  ) : ?>
      <<?php echo $heading['tag']; ?> class="col col-md-10of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 location-grid__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>><!-- .col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12.location-grid__heading -->
    <?php endif; ?>

    <?php if( $content  ) : ?>
      <div class="col col-md-10of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 location-grid__content"><?php echo format_text($content); ?></div><!-- .col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12.location-grid__content -->
    <?php endif; ?>
    </div><!-- .container.row.centered.center.text-center -->

    <div class="location-grid__locations container row center">
      <?php while( $locations->have_posts() ) : ?>
        <?php
          $locations->the_post();
          $hours      = get_field('location_hours');
          $details    = get_field('details');
          $contacts   = get_field('location_contact');
        ?>
        <div class="location-grid__location">

          <h4 class="location-grid__location__title">
            <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
          </h4>
          <!-- .location-grid__location__title -->

          <?php if( $details ) : ?>
            <address class="location-grid__location__address"><?php echo $details['location_address']; ?></address>
            <!-- .location-grid__location__address -->
          <?php endif; ?>

          <?php if( $contacts ) : ?>

            <a class="location-grid__location__phone" href="tel:+1<?php echo $contacts[0]['phone']; ?>"><?php echo format_phone($contacts[0]['phone'], false, '-'); ?></a>
            <!-- .location-grid__location__phone -->

          <?php endif; ?>

          <?php if( $hours ) : ?>

            <div class="location-grid__location__hours">
              <span class="location-grid__location__day block"><?php echo $hours[0]['days']; ?></span>
              <span class="location-grid__location__time block"><?php echo $hours[0]['time']; ?></span>
            </div><!-- .location-grid__location__hours -->

          <?php endif; ?>

        </div><!-- .location-grid__location -->
      <?php endwhile; ?>

    </div><!-- .location-grid__locations.container.row -->

<?php wp_reset_postdata(); ?>

</section>