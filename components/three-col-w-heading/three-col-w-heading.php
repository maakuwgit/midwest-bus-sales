<?php
/**
* three-col-w-heading
* -----------------------------------------------------------------------------
*
* three-col-w-heading component
*/

$defaults = [
  'heading'  => false,
  'content'  => false,
  'column_1' => false,
  'column_2' => false,
  'column_3' => false
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
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('three-col-w-heading-') );

/**
 * ACF values pulled into the component from the components.php partial.
 */
$heading     = $component_data['heading'];
$heading_tag = $heading['tag'];
$heading     = $heading['text'];
$content     = $component_data['content'];
$column_1    = $component_data['column_1'];
$column_2    = $component_data['column_2'];
$column_3    = $component_data['column_3'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-three-col-w-heading <?php echo implode( " ", $classes ); ?>"<?php echo ' id="' . $id . '"'; ?> data-component="three-col-w-heading">

  <div class="container row center text-center">

  <?php if( $heading ) : ?>
    <div class="three-col-w-heading__heading col col-md-10of12 col-lg-8of12 col-xl-7of12 col-xxl-7of12">
      <<?php echo $heading_tag; ?> class="three-col-w-heading__header"><?php echo $heading; ?></<?php echo $heading_tag; ?>>
      <!-- .three-col-w-heading__header -->
    </div>
    <!-- .three-col-w-heading__heading -->
  <?php endif; ?>

  <?php if( $content ) : ?>
    <div class="three-col-w-heading__content col col-md-10of12 col-lg-9of12 col-xl-8of12 col-xxl-8of12">
      <?php echo format_text($content); ?>
    </div>
    <!-- .three-col-w-heading__content -->
  <?php endif; ?>

  </div><!-- .container -->

  <div class="container row">

    <div class="three-col-w-heading__block col col-md-6of12 col-lg-4of12 col-xl-4of12">
      <?php echo $column_1; ?>
    </div>
    <!-- .three-col-w-heading__block -->

    <div class="three-col-w-heading__block col col-md-6of12 col-lg-4of12 col-xl-4of12">
      <?php echo $column_2; ?>
    </div>
    <!-- .three-col-w-heading__block -->

    <div class="three-col-w-heading__block col col-lg-4of12 col-xl-4of12">
      <?php echo $column_3; ?>
    </div>
    <!-- .three-col-w-heading__block -->

  </div><!-- .container.row -->

</section>