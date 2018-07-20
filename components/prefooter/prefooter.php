<?php
/**
* prefooter
* -----------------------------------------------------------------------------
*
* prefooter component
*/

$defaults = [
  'icons'     => false,
  'title'     => false,
  'content'   => false
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
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('prefooter-') );

/**
 * ACF values pulled into the component from the components.php partial.
 */
$title          = $component_data['title'];
$content        = $component_data['content'];
$icons          = $component_data['icons'];

if ( !$title && !$content ) return;
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<aside class="ll-prefooter <?php echo implode( " ", $classes ); ?>"<?php echo ' id="'.$id.'"'; ?> data-component="prefooter">

  <div class="container row">

  <?php if( $icons ) : ?>
    <nav class="prefooter__icons text-center col col-md-7of12 col-lg-8of12 col-xl-10of12">
      <?php
        foreach( $icons as $icon ) :
          $iconlink = $icon['link'];
      ?>
      <?php if( $iconlink) : ?>
      <a class="icon__link" href="<?php echo $iconlink['url']; ?>">
      <?php else: ?>
      <span class="icon__link">
      <?php endif; ?>
        <svg class="icon icon__link__icon <?php echo $icon['icon']; ?>">
          <use xlink:href="#<?php echo $icon['icon']; ?>"></use>
        </svg>
        <span class="icon__link__label"><?php echo $iconlink['title']; ?></span>
      <?php if( !$iconlink) : ?>
      </span>
      <?php else: ?>
      </a>
      <?php endif; ?>
      <?php endforeach; ?>
    </nav>
    <!-- .prefooter__icons -->
  <?php endif; ?>

  <?php if( $title ) : ?>
    <h2 class="prefooter__title text-center col col-md-7of12 col-lg-8of12 col-xl-10of12"><?php echo $title; ?></h2>
    <!-- .prefooter__title -->
  <?php endif; ?>

  <?php if( $content ) : ?>

    <div class="prefooter__content text-center col col-md-7of12 col-lg-8of12 col-xl-10of12">
      <?php echo format_text($content); ?>
    </div><!-- .prefooter__content -->

  <?php endif; ?>

  </div><!-- .container -->

</aside>