<?php
/**
* teaser
* -----------------------------------------------------------------------------
*
* teaser component
*/

$defaults = [
  'heading'     => false,
  'content'     => false,
  'columns'     => false
];

$args = [
  'id'      => uniqid('teaser-'),
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
$columns     = $component_data['columns'];
?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-teaser<?php echo implode( " ", $classes ); ?>"<?php echo $id; ?> data-component="teaser">

  <div class="container">

    <div class="row teaser__wrapper start">

      <div class="teaser__heading col col-md-10of12 col-lg-9of12 col-xl-9of12 col-xxl-9of12">

      <?php if( $heading ) : ?>
        <h2 class="teaser__headline"><?php echo $heading; ?></h2>
        <!-- .teaser__headline -->
      <?php endif; ?>

      </div>

      <div class="teaser__heading col col-md-10of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12">
      <?php if( $content ) : ?>

        <div class="teaser__description">
        <?php echo $content; ?>
        </div><!-- .teaser__description -->

      <?php endif; ?>
      </div>
      <!-- .teaser__heading.col.col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12 -->

      <div class="teaser__body row">

      <?php if( $columns ) : ?>

        <?php foreach( $columns as $column ) : ?>
          <div class="teaser__col col col-md-6of12 col-lg-4of12 col-xl-4of12 col-xxl-4of12">

          <?php if( $column['icon'] ) : ?>
            <div class="teaser__col__icon">
              <svg class="icon <?php echo $column['icon']; ?>">
                <use xlink:href="#<?php echo $column['icon']; ?>"></use>
              </svg>
            </div>
          <?php endif; ?>

          <?php if( $column['title'] ) : ?>
            <h4 class="teaser__col__title"><?php echo $column['title']; ?></h4>
            <!-- .teaser__col__title -->
          <?php endif; ?>

          <?php if( $column['caption'] ) : ?>
            <div class="teaser__col__caption">
            <?php echo format_text($column['caption']); ?>
            </div><!-- .teaser__col__caption -->
          <?php endif; ?>

          </div>
        <?php endforeach; ?>

      <?php endif; ?>

      </div><!-- .teaser__body.col.col-md-10of12.col-lg-10of12.col-xl-10of12.col-xxl-10of12 -->

    </div><!-- .row.teaser__wrapper -->

  </div><!-- .container -->

</section>