<?php
/**
* call-to-action
* -----------------------------------------------------------------------------
*
* call-to-action component
*/

$defaults = [
  'form_id' => false
];

$args = [
  'id'      => uniqid('logo-grid-'),
  'classes' => array(),
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );

/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes  = $component_args['classes'];

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
$form_id = $component_data['form_id'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-call-to-action <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="call-to-action">

  <?php if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) : ?>

    <?php gravity_form( $form_id, true, true ); ?>

  <?php endif; ?>

</section>
