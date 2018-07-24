<?php
/**
* lr-w-gradient
* -----------------------------------------------------------------------------
*
* lr-w-gradient component
*/

$defaults = [
  'style'      => false,
  'image'      => false,
  'content'    => false,
  'has_bg'     => false
];

$args = [
  'id'      => uniqid('lr-w-gradient-'),
  'classes' => false,
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );
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

$id = $component_args['id'];

/**
 * ACF values pulled into the component from the components.php partial.
 */
$style              = $component_data['style'];
$image              = $component_data['image'];
$content            = $component_data['content'];
$has_bg             = $component_data['has_bg'];

if( $has_bg ) {
  $bg = 'talc ';
}else{
  $bg = '';
}

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-lr-w-gradient<?php echo ' ' . $bg . $style . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="lr-w-gradient">

  <div class="lr-w-gradient__content_wrap container row">

  <?php if( $content ) : ?>
    <div class="lr-w-gradient__content col col-md-6of12 col-lg-5of12 col-xl-5of12 col-xxl-5of12">
      <?php echo $content; ?>
    </div><!-- .lr-w-gradient__content -->
  <?php endif; ?>

  <?php if( $image ) : ?>
    <div class="lr-w-gradient__spacer col col-md-6of12 col-lg-7of12 col-xl-7of12 col-xxl-7of12"></div><!-- .lr-w-gradient__spacer -->
  <?php endif; ?>

  </div>

<?php if( $image ) : ?>
  <figure class="lr-w-gradient__figure col col-md-6of12 col-lg-6of12 col-xl-6of12 col-xxl-6of12" data-backgrounder>

    <div class="lr-w-gradient__feature feature">
    <?php echo ll_format_image($image); ?>
    </div><!-- .lr-w-gradient__feature.feature -->

  </figure><!-- .lr-w-gradient__figure -->
<?php endif; ?>

</section>