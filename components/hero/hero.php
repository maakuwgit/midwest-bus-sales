<?php
/**
* hero
* -----------------------------------------------------------------------------
*
* hero component
*/

$defaults = [
  'supertitle'  => false,
  'heading'     => false,
  'image'       => false,
  'video'       => false,
  'overlay'     => 0.5
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
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('hero-') );

$supertitle         = $component_data['supertitle']['text'];
$supertitle_tag     = $component_data['supertitle']['tag'];
$heading            = $component_data['heading']['text'];
$heading_tag        = $component_data['heading']['tag'];
$video              = $component_data['video'];
$overlay            = $component_data['overlay'];
$image              = $component_data['image'];

if( $image ) {
  $bg = ' data-backgrounder';
}else{
  $bg = '';
}

?>

<?php if ( ll_empty( $component_data ) ) return; ?>

<header class="ll-hero<?php echo implode( " ", $classes ); ?>"<?php echo ' id="'.$id.'"'; ?> data-component="hero"<?php echo $bg; ?>>

  <?php if( $bg ) : ?>
  <style>
    #<?php echo $id; ?>:before {
      position: absolute;
      content: '';
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0,0,0, <?php echo $overlay; ?>);
    }
  </style>
<?php endif; ?>

  <?php if ($image ) : ?>

    <div class="hero__feature feature">
      <?php
      if( is_array($image) ) {
        echo ll_format_image($image);
      }else{
        echo $image;
      } ?>
    </div><!-- .hero__feature.feature -->

  <?php endif; ?>

  <?php
    if( $video ) {

      $loop_video = array(
        'video' => $video,
        'fallback' => wp_get_attachment_url($bg)
      );

      ll_include_component(
        'loop-video',
        $loop_video
      );
    }
  ?>

  <div class="container centered start row">

  <?php if( $supertitle ) : ?>

    <<?php echo $supertitle_tag; ?> class="hero__supertitle col">
      <?php echo $supertitle; ?>
    </<?php echo $supertitle_tag; ?>>
    <!-- .hero__supertitle.hdg__supertitle -->

  <?php endif; ?>

  <?php if( $heading ) : ?>

    <<?php echo $heading_tag; ?> class="hero__heading col">
      <?php echo $heading; ?>
    </<?php echo $heading_tag; ?>>
    <!-- .hero__title.hdg__title -->

  <?php endif; ?>

  </div>

</header>