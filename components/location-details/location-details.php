<?php
/**
* location-details
* -----------------------------------------------------------------------------
*
* location-details component
*/

$defaults = [
  'contacts'  => false,
  'heading'   => false,
  'map'       => false,
  'details'   => false
];

$args = [
  'id'      => uniqid('location-details-'),
  'classes' => false,
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );

/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes  = $component_args['classes'] ?: array();

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$id            = ' id="' . $component_args['id'] . '"';

/**
 * ACF values pulled into the component from the components.php partial.
 */
$contacts = $component_data['contacts'];
$hours    = $component_data['hours'];
$map      = $component_data['map'];
$details  = $component_data['details'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-location-details<?php echo implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="location-details">

  <div class="container">

    <div class="row details__wrapper">

      <div class="details__address col col-md-4of12 col-lg-2of12 col-xl-2of12 col-xxl-2of12">

      <?php if( $details ) : ?>

        <h2 class="h4 details__address__title">Address</h2>
        <!-- .details__address__title -->
        <address class="details__address__address"><?php echo $details['location_address']; ?></address>
        <!-- .details__address__address -->
      <?php endif; ?>

      </div>
      <!-- .details__address -->

      <div class="details__contact col col-md-4of12 col-lg-2of12 col-xl-2of12 col-xxl-2of12">
      <?php if( $contacts ) : ?>

        <h2 class="h4 details__contact__title">Call Us</h2>
        <!-- .details__contact__title -->
        <?php foreach ( $contacts as $contact ) : ?>
        <a class="details__contact__<?php echo $contact['type']['value'];?> block" href="tel:+1<?php echo $contact['phone']; ?>"><?php echo format_phone($contact['phone'], false, '-'); ?> <?php echo $contact['type']['label'];?></a>
        <!-- .details__contact__<?php echo $contact['type'];?> -->

        <?php endforeach; ?>

      <?php endif; ?>
      </div>
      <!-- .details__contact -->

      <div class="details__hours col col-md-4of12 col-lg-3of12 col-xl-3of12 col-xxl-3of12">
      <?php if( $hours ) : ?>

        <h2 class="h4 details__hours__title">Hours of Operation</h2>
        <!-- .details__hours__title -->
        <?php foreach ( $hours as $operating ) : ?>
        <dl class="row">
          <dt class="iflex col-6of12 details__hours__day"><?php echo $operating['days']; ?></dt>
          <!-- .details__hours__day -->
          <dd class="iflex col-6of12 details__hours__time"><?php echo $operating['time'];?></dd>
          <!-- .details__hours__time -->
        </dl>
        <?php endforeach; ?>

      <?php endif; ?>

      </div><!-- .details__hours.col -->

      <div class="details__directions col col-lg-5of12 col-xl-5of12 col-xxl-5of12">

      <?php if( $details ) : ?>
        <h2 class="h4 details__directions__title">Directions</h2>
        <!-- .details__details__title -->
        <?php echo format_text( $details['location_directions'] ); ?>
      <?php endif; ?>

      </div><!-- .details__directions.col.col-md-6of12.col-lg-7of12.col-xl-8of12.col-xxl-8of12 -->

    </div><!-- .row.details__wrapper -->

  </div><!-- .container -->

</section>