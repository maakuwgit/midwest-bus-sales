<?php
/**
* bus-types-grid
* -----------------------------------------------------------------------------
*
* bus-types-grid component
*/

$defaults = [
  'heading'    => false,
  'content'    => false,
  'cards'      => false
];

$args = [
  'id'      => uniqid('bus-types-grid-'),
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
$heading            = $component_data['heading'];
$content            = $component_data['content'];
$cards              = $component_data['cards'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-bus-types-grid<?php echo ' ' . $style . implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="bus-types-grid">

  <div class="container row centered center">

    <div class="col col-md-10of12 col-lg-9of12 col-xl-10of12 col-xxl-10of12 text-center">

    <?php if( $heading ) : ?>
      <<?php echo $heading['tag'];?> class="bus-types-grid__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag'];?>>
      <!-- .bus-types-grid__heading -->
    <?php endif; ?>

    <?php if( $content ) : ?>
      <div class="bus-types-grid__caption">
        <?php echo $content; ?>
      </div><!-- .bus-types-grid__caption -->
    <?php endif; ?>

    </div><!-- .col col-md-10of12 col-lg-10of12 col-xl-10of12 col-xxl-10of12 end -->

    <?php if( $cards) : ?>

    <div class="col col-lg-10of12 col-xl-10of12 col-xxl-10of12 text-center">

      <ul class="bus-types-grid__list no-bullet row text-center">

        <?php foreach( $cards as $card ) : ?>
          <li class="bus-types-grid__list__item col col-sm-6of12 col-md-4of12 col-lg-4of12 col-xl-4of12 col-xxl-4of12">

            <div class="bus-type-grid__card" data-clickthrough>

              <div class="bus-types-grid__list__coin coin">
                <?php echo $card['type']; ?>
              </div>
              <!-- .bus-types-grid__list__coin -->

              <h4 class="bus-types-grid__list__title">Type <?php echo $card['type']; ?></h4>
              <!-- .bus-types-grid__list__title -->

              <div class="bus-types-grid__list__description">
                <?php echo format_text( $card['caption'] ); ?>
              </div>
              <!-- .bus-types-grid__list__description -->

              <?php if( $card['call-to-action'] ) : ?>
                <a class="bus-types-grid__list__cta" title="<?php echo $card['call-to-action']['title'];?>" href="<?php echo $card['call-to-action']['url'];?>"><?php echo $card['call-to-action']['title'];?></a>
              <?php endif; ?>

            </div><!-- .bus-type-grid__card -->

          </li><!-- .bus-types-gird__list__item.col.col-md-6of12.col-lg-5of12.col-xl-5of12.col-xxl-5of12 -->
        <?php endforeach; ?>

      </ul>
      <!-- .bus-types-grid__list.no-bullet.row.text-center -->

    </div><!-- .col.col-md-6of12.col-lg-5of12.col-xl-5of12.col-xxl-5of12 -->

  <?php endif; ?>

  </div><!-- .container.row -->

</section>