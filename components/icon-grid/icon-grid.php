<?php
/**
* icon-grid
* -----------------------------------------------------------------------------
*
* icon-grid component
*/

$defaults = [
  'heading'      => false,
  'content'      => false,
  'icons'        => false,
];

$args = [
  'id'      => uniqid('icon-grid-'),
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
$heading       = $component_data['heading'];
$content       = $component_data['content'];
$icons        = $component_data['icons'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-icon-grid<?php echo implode( " ", $classes ); ?>" <?php echo $id; ?> data-component="icon-grid">

  <div class="container column text-center">

  <?php if( $heading  ) : ?>
    <<?php echo $heading['tag']; ?> class="col col-md-10of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 icon-grid__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>><!-- .col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12.icon-grid__heading -->
  <?php endif; ?>

  <?php if( $content  ) : ?>
    <div class="col col-md-10of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 icon-grid__content"><?php echo format_text($content); ?></div><!-- .col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12.icon-grid__content -->
  <?php endif; ?>

  </div><!-- .container.row.centered -->

<?php if( $icons ) : ?>

  <div class="container">

    <ul class="icon-grid__icons row stretch">

    <?php
      foreach( $icons as $block ) :

        $icon      = $block['icon'];
        $title     = $block['title'];
        $caption   = $block['caption'];

    ?>
      <li class="icon-grid__block col col-md-4of12 col-lg-3of12 col-xl-3of12 col-xxl-3of12">

      <?php if( $title || $caption ) : ?>
        <div class="icon-grid__block__content">

        <?php if( $icon ) : ?>
          <div class="icon-grid__block__icon">
            <svg class="icon <?php echo $icon; ?>">
              <use xlink:href="#<?php echo $icon; ?>"></use>
            </svg><!-- .icon.icon-<?php echo $icon; ?> -->
          </div><!-- .icon-grid__block -->
        <?php endif; ?>

        <?php if( $title ) : ?>
          <div class="icon-grid__block__title">
            <h4><?php echo $title; ?></h4>
          </div>
          <!-- .icon-grid__block__title -->
        <?php endif; ?>

        <?php if( $caption ) : ?>
          <div class="icon-grid__block__caption">
            <?php echo format_text($caption); ?>
          </div>
          <!-- .icon-grid__block__caption -->
        <?php endif; ?>

        </div>
        <!-- .icon-grid__content -->
      <?php endif; ?>

      </li><!-- .icon-grid__item -->

    <?php endforeach; ?>

    </ul><!-- .icon-grid__items -->

  </div><!-- .container -->
<?php endif; ?>
</section>