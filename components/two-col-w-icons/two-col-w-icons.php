<?php
/**
* two-col-w-icons
* -----------------------------------------------------------------------------
*
* two-col-w-icons component
*/

$defaults = [
  'style'       => 'lefty',
  'type'        => false,
  'has_bg'      => false,
  'content'     => false,
  'list'        => false
];

$args = [
  'id'      => uniqid('two-col-w-icons-'),
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
$style      = $component_data['style'];
$type       = $component_data['type'];
$content    = $component_data['content'];
$list       = $component_data['list'];
$has_bg     = $component_data['has_bg'];

if( $has_bg ) {
  $bg = ' talc';
}else{
  $bg = '';
}

$type = ( $type ? ' ' . $type : '' );

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-two-col-w-icons<?php echo $bg . implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="two-col-w-icons">

  <div class="container row start centered">

  <?php if( $content ) : ?>
    <div class="two-col-w-icons__content col col-md-6of12 col-lg-6of12 col-xl-6of12 col-xxl-6of12">
      <?php echo $content; ?>
    </div><!-- .two-col-w-icons__content -->
  <?php endif; ?>

  <?php if( $list ) : ?>
    <ul class="two-col-w-icons__list col col-md-6of12 col-lg-5of12 col-xl-5of12 col-xxl-5of12<?php echo $type; ?>">

    <?php foreach( $list as $item ) : ?>

      <li class="two-col-w-icons__item">

      <?php if( $item['label'] ) : ?>
        <h4 class="two-col-w-icons__item__title"><?php echo $item['label']; ?></h4>
        <!-- .two-col-w-icons__col__title -->
      <?php endif; ?>

      <?php if( $item['caption'] ) : ?>
        <div class="two-col-w-icons__item__caption">
        <?php echo format_text($item['caption']); ?>
        </div><!-- .two-col-w-icons__col__caption -->
      <?php endif; ?>

      </li>

    <?php endforeach; ?>

    </ul>
    <!-- .two-col-w-icons__list.col.col-md-6of12.col-lg-4of12.col-xl-4of12.col-xxl-4of12 -->
  <?php endif; ?>

  </div><!-- .container -->

</section>