<?php
/**
* logo-grid
* -----------------------------------------------------------------------------
*
* logo-grid component
*/

$defaults = [
  'heading'      => false,
  'content'      => false,
  'logos'        => false,
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
$superheading  = $component_data['superheading'];
$heading       = $component_data['heading'];
$content       = $component_data['content'];
$logos        = $component_data['logos'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-logo-grid<?php echo implode( " ", $classes ); ?>" <?php echo $id; ?> data-component="logo-grid">

  <div class="container row centered center">

    <div class="col col-lg-6of12 col-xl-7of12 col-xxl-7of12 text-center">

    <?php if( $heading  ) : ?>
      <<?php echo $heading['tag']; ?> class="logo-grid__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>><!-- .logo-grid__heading -->
    <?php endif; ?>

    <?php if( $content  ) : ?>
      <div class="logo-grid__content"><?php echo format_text($content); ?></div><!-- .logo-grid__content -->
    <?php endif; ?>

    </div><!-- .col.col-lg-6of12.col-xl-7of12.col-xxl-7of12.text-center -->

    <?php if( $logos ) : ?>

    <div class="col col-lg-10of12 col-xl-10of12 col-xxl-10of12 text-center">

      <ul class="logo-grid__logos row stretch">

      <?php
        foreach( $logos as $block ) :

          $icon      = $block['icon'];
          $title     = $block['title'];
          $caption   = $block['caption'];
          $use       = $block['infographic'];
          $image     = $block['image'];
          $svg       = $block['svg'];

          if( $use == 'img' && $image ) {
            $bg = ' data-backgrounder';
          }else{
            $bg = '';
          }

      ?>
        <li class="logo-grid__block">

        <?php if( $image ) : ?>
            <img class="logo-grid__block__image" alt="<?php echo $image['title']; ?>" src="<?php echo $image['url']; ?>">
            <!-- .logo-grid__block__image -->
        <?php endif; ?>

        <?php if( $title || $caption ) : ?>
          <div class="logo-grid__block__content col col-offset-md-1of12 col-md-5of12 col-offset-lg-1of12 col-lg-4of12 col-offset-xl-1of12 col-xl-4of12 col-offset-xxl-1of12 col-xxl-4of12">

          <?php if( $icon ) : ?>
            <div class="logo-grid__block__icon">
              <svg class="icon <?php echo $icon; ?>">
                <use xlink:href="#<?php echo $icon; ?>"></use>
              </svg><!-- .icon.icon-<?php echo $icon; ?> -->
            </div><!-- .logo-grid__block -->
          <?php endif; ?>

          <?php if( $title ) : ?>
            <div class="logo-grid__block__title">
              <h4><?php echo $title; ?></h4>
            </div>
            <!-- .logo-grid__block__title -->
          <?php endif; ?>

          <?php if( $caption ) : ?>
            <div class="logo-grid__block__caption">
              <?php echo format_text($caption); ?>
            </div>
            <!-- .logo-grid__block__caption -->
          <?php endif; ?>

          </div>
          <!-- .logo-grid__content -->
        <?php endif; ?>

        </li><!-- .logo-grid__item -->

      <?php endforeach; ?>

      </ul><!-- .logo-grid__items -->

    </div><!-- .col.col-lg-10of12.col-xl-10of12.col-xxl-10of12.text-center -->

  </div><!-- .container.row.centered.center -->
<?php endif; ?>
</section>