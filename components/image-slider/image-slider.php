<?php
/**
* image-slider
* -----------------------------------------------------------------------------
*
* image-slider component
*/

$defaults = [
  'slides' => false
];

$args = [
  'id'      => uniqid('image-slider-'),
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
$slides       = $component_data['slides'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<div class="ll-image-slider <?php echo implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="image-slider">

  <div class="image-slider__slides">

    <?php foreach( $slides as $slide ) : ?>

    <div class="image-slider__slide">
      <?php echo ll_format_image($slide['image']); ?>
    </div>
    <!-- .image-slider_slide -->

    <?php endforeach; ?>

  </div>
  <!-- .image-slider_slides -->

</div>
