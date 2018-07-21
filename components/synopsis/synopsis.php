<?php
/**
* synopsis
* -----------------------------------------------------------------------------
*
* synopsis component
*/

$defaults = [
  'heading'     => false,
  'content'      => false
];

$args = [
  'id'      => uniqid('synopsis-'),
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
$heading     = $component_data['heading'];
$content     = $component_data['content'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-synopsis<?php echo implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="synopsis">

  <div class="container">

    <div class="row synopsis__wrapper">

      <div class="synopsis__col col col-md-6of12 col-lg-4of12 col-xl-4of12 col-xxl-4of12">

      <?php if( $heading ) : ?>
        <h2 class="synopsis__header"><?php echo $heading; ?></h2>
        <!-- .synopsis__header -->
      <?php endif; ?>

      </div><!-- .synopsis__col.col.col-md-6of12.col-lg-4of12.col-xl-4of12.col-xxl-4of12 -->

      <div class="synopsis__description col col-md-6of12 col-lg-7of12 col-xl-8of12 col-xxl-8of12">

      <?php if( $content ) : ?>
        <?php echo $content; ?>
      <?php endif; ?>

      </div><!-- .synopsis__description.col.col-md-6of12.col-lg-7of12.col-xl-8of12.col-xxl-8of12 -->

    </div><!-- .row.synopsis__wrapper -->

  </div><!-- .container -->

</section>