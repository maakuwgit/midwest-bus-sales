<?php
/**
* customizables
* -----------------------------------------------------------------------------
*
* customizables component
*/

$defaults = [
  'heading'    => false,
  'content'    => false,
  'features'      => false
];

$args = [
  'id'      => uniqid('customizables-'),
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
$image              = $component_data['image'];
$content            = $component_data['content'];
$features           = $component_data['features'];

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-customizables<?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="customizables">

  <div class="container row stretch center">

    <div class="customizables__content col col-md-6of12 col-lg-6of12 col-xl-6of12 col-xxl-6of12">

    <?php if( $content ) : ?>
      <div class="customizables__caption">
        <?php echo $content; ?>
      </div><!-- .customizables__caption -->
    <?php endif; ?>

    <?php if ( $features ) : ?>

      <dl class="customizables__feature_list">

        <?php
          $t = 0;
          foreach( $features as $trigger ) :
            $active = ( $t == 0 ? ' active' : '' );
        ?>
          <dt class="customizables__feature_title<?php echo $active; ?>" data-feature="<?php echo $t; ?>">
            <?php echo $trigger['title']; ?>
          </dt>
          <!-- .customizables__feature_title -->

          <dd class="customizables__feature_description">
            <?php echo $trigger['description']; ?>
          </dd>
          <!-- .customizables__feature_description -->

        <?php
          $t++;
          endforeach;
        ?>

      </dl>
      <!-- .customizables__feature_list -->

    <?php endif; ?>

    </div><!-- .customizables__content.col.col-md-6of12.col-lg-6of12.col-xl-6of12.col-xxl-6of12 -->

    <?php if( $image ) : ?>

    <div class="customizables__visuals col col-md-6of12 col-lg-6of12 col-xl-6of12 col-xxl-6of12" data-backgrounder>

      <div class="feature">

        <?php echo ll_format_image($image); ?>

      </div><!-- .feature -->

      <?php if( $features ) : ?>
      <ul class="customizables__list no-bullet row centered">

        <?php
          $v = 0;
          foreach( $features as $visual ) :
            $active = ( $v == 0 ? ' active' : '' );
        ?>

          <li data-trigger="<?php echo $v; ?>" class="customizables__block<?php echo $active; ?>">
            <?php echo ll_format_image( $visual['image'] ); ?>
          </li><!-- .customizables-block.col.col-md-6of12.col-lg-5of12.col-xl-5of12.col-xxl-5of12 -->

        <?php
          $v++;
          endforeach;
        ?>

      </ul>
      <!-- .customizables__list.no-bullet.row.text-center -->
      <?php endif; ?>

    </div><!-- .customizables__visuals.col.col-md-6of12.col-lg-6of12.col-xl-6of12.col-xxl-6of12 -->

    <?php endif; ?>

  </div><!-- .container.row -->

</section>