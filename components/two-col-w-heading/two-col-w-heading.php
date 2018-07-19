<?php
/**
* two-col-w-heading
* -----------------------------------------------------------------------------
*
* two-col-w-heading component
*/

$defaults = [
  'title'     => false,
  'l_content' => false,
  'r_content' => false
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
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('two-col-w-heading-') );

/**
 * ACF values pulled into the component from the components.php partial.
 */
$title        = $component_data['title'];
$l_content    = $component_data['l_content'];
$r_content    = $component_data['r_content'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-two-col-w-heading <?php echo implode( " ", $classes ); ?>"<?php echo ' id="' . $id . '"'; ?> data-component="two-col-w-heading">

  <div class="container row">

    <div class="two-col-w-heading__heading col col-md-10of12 col-lg-10of12 col-xl-11of12">
      <h2 class="two-col-w-heading__header"><?php echo $title; ?></h2>
      <!-- .two-col-w-heading__header -->
    </div>
    <!-- .two-col-w-heading__heading -->

  </div><!-- .container -->

  <div class="container row">

    <div class="two-col-w-heading__block col col-md-6of12 col-lg-5of12 col-xl-5of12">
      <?php echo $l_content; ?>
    </div>
    <!-- .two-col-w-heading__block -->

    <div class="two-col-w-heading__block col col-md-6of12 col-lg-5of12 col-xl-5of12">
      <?php echo $r_content; ?>
    </div>
    <!-- .two-col-w-heading__block -->

  </div><!-- .container.row -->

</section>