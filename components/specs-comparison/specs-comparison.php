<?php
/**
* specs-comparison
* -----------------------------------------------------------------------------
*
* specs-comparison component
*/

$defaults = [
  'heading'   => false,
  'content'   => false,
  'bus_left'  => false,
  'bus_right' => false
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
$id = ( $component_args['id'] ? $component_args['id'] : uniqid('specs-comparison-') );

/**
 * ACF values pulled into the component from the components.php partial.
 */
$heading      = $component_data['heading'];
if( $heading ) {
  $heading_tag  = $heading['tag'];
  $heading      = $heading['text'];
}else{
  $heading = $heading_tag = false;
}

$content      = $component_data['content'];
$bus_left     = $component_data['bus_left'];
$bus_right    = $component_data['bus_right'];

if( $bus_left ) {
  $bus_specs_l = array(
    'capacity'          => get_field('bus_capacity', $bus_left->ID),
    'wheelbase'         => get_field('bus_wheelbase', $bus_left->ID),
    'weight_rating'     => get_field('bus_weight_rating', $bus_left->ID),
    'engine'            => get_field('bus_engine', $bus_left->ID),
    'telematics'        => get_field('bus_telematics', $bus_left->ID),
    'available_options' => get_field('bus_available_options', $bus_left->ID),
    'safety'            => get_field('bus_safety', $bus_left->ID),
    'brochure'          => get_field('bus_brochure', $bus_left->ID)
  );
}else{
  $bus_specs_l = false;
}

if( $bus_right ) {
  $bus_specs_r = array(
    'capacity'          => get_field('bus_capacity', $bus_right->ID),
    'wheelbase'         => get_field('bus_wheelbase', $bus_right->ID),
    'weight_rating'     => get_field('bus_weight_rating', $bus_right->ID),
    'engine'            => get_field('bus_engine', $bus_right->ID),
    'telematics'        => get_field('bus_telematics', $bus_right->ID),
    'available_options' => get_field('bus_available_options', $bus_right->ID),
    'safety'            => get_field('bus_safety', $bus_right->ID),
    'brochure'          => get_field('bus_brochure', $bus_right->ID)
  );
}else{
  $bus_specs_r = false;
}

?>

<?php if ( ll_empty( $component_data ) ) return; ?>
<section class="ll-specs-comparison <?php echo implode( " ", $classes ); ?>"<?php echo ' id="' . $id . '"'; ?> data-component="specs-comparison">

  <div class="container row center centered text-center">

    <?php if( $heading ) : ?>
    <div class="specs-comparison__heading col col-md-10of12 col-lg-10of12 col-xl-11of12">
      <<?php echo $heading_tag; ?> class="specs-comparison__header"><?php echo $heading; ?></<?php echo $heading_tag; ?>>
      <!-- .specs-comparison__header -->
    </div>
    <!-- .specs-comparison__heading -->
    <?php endif; ?>

    <?php if( $content ) : ?>
    <div class="specs-comparison__content col col-md-10of12 col-lg-10of12 col-xl-11of12">
      <?php echo format_text($content); ?>
    </div>
    <!-- .specs-comparison__content -->
    <?php endif; ?>

  </div><!-- .container -->

  <div class="row stretch">

  <?php if( $bus_left ) : ?>

    <div class="specs-comparison__col">

      <table class="specs-comparison__table">

        <thead class="specs-comparison__thead">
          <tr>
            <th class="text-left"><?php echo $bus_left->post_title; ?></th>
          </tr>
        </thead>
        <!-- .specs-comparison__tfoot -->

        <?php if( $bus_specs_l['brochure'] ) : ?>
        <tfoot class="specs-comparison__tfoot">
          <tr>
            <td>
              <a href="<?php echo $bus_specs_l['brochure']; ?>" target="_blank" class="btn">Download Brochure</a>
            </td>
          </tr>
        </tfoot>
        <!-- .specs-comparison__tfoot -->
        <?php endif; ?>

        <tbody class="specs-comparison__tbody">
          <?php if( $bus_specs_l['capacity'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-capacity">
              <strong class="block">Passenger Capacity</strong>
              <?php echo $bus_specs_l['capacity']; ?>
            </td>
            <!-- .specs-comparison__spec-capacity -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_l['wheelbase'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-wheelbase">
              <strong class="block">Wheelbase</strong>
              <?php echo $bus_specs_l['wheelbase']; ?>
            </td>
            <!-- .specs-comparison__spec-wheelbase -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_l['weight_rating'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-weight_rating">
              <strong class="block">Gross Vehicle Weight Rating</strong>
              <?php echo $bus_specs_l['weight_rating']; ?>
            </td>
            <!-- .specs-comparison__spec-weight_rating -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_l['engine'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-engine">
              <strong class="block">Engine</strong>
              <?php echo $bus_specs_l['engine']; ?>
            </td>
            <!-- .specs-comparison__spec-engine -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_l['telematics'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-telematics">
              <strong class="block">Telematics</strong>
              <?php echo $bus_specs_l['telematics']; ?>
            </td>
            <!-- .specs-comparison__spec-telematics -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_l['available_options'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-available_options">
              <strong class="block">Available Options</strong>
              <?php echo $bus_specs_l['available_options']; ?>
            </td>
            <!-- .specs-comparison__spec-avialable_options -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_l['safety'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-safety">
              <strong class="block">Safety</strong>
              <?php echo $bus_specs_l['safety']; ?>
            </td>
            <!-- .specs-comparison__spec-safety -->
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
      <!-- .specs-comparison__table -->
    </div>
    <!-- .specs-comparison__col -->

  <?php endif; ?>

  <?php if( $bus_left ) : ?>

    <div class="specs-comparison__col">

      <table class="specs-comparison__table">

        <thead class="specs-comparison__thead">
          <tr>
            <th class="text-left"><?php echo $bus_right->post_title; ?></th>
          </tr>
        </thead>
        <!-- .specs-comparison__tfoot -->

        <?php if( $bus_specs_r['brochure'] ) : ?>
        <tfoot class="specs-comparison__tfoot">
          <tr>
            <td>
              <a href="<?php echo $bus_specs_r['brochure']; ?>" target="_blank" class="btn">Download Brochure</a>
            </td>
          </tr>
        </tfoot>
        <!-- .specs-comparison__tfoot -->
        <?php endif; ?>

        <tbody class="specs-comparison__tbody">
          <?php if( $bus_specs_r['capacity'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-capacity">
              <strong class="block">Passenger Capacity</strong>
              <?php echo $bus_specs_r['capacity']; ?>
            </td>
            <!-- .specs-comparison__spec-capacity -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_r['wheelbase'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-wheelbase">
              <strong class="block">Wheelbase</strong>
              <?php echo $bus_specs_r['wheelbase']; ?>
            </td>
            <!-- .specs-comparison__spec-wheelbase -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_r['weight_rating'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-weight_rating">
              <strong class="block">Gross Vehicle Weight Rating</strong>
              <?php echo $bus_specs_r['weight_rating']; ?>
            </td>
            <!-- .specs-comparison__spec-weight_rating -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_r['engine'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-engine">
              <strong class="block">Engine</strong>
              <?php echo $bus_specs_r['engine']; ?>
            </td>
            <!-- .specs-comparison__spec-engine -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_r['telematics'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-telematics">
              <strong class="block">Telematics</strong>
              <?php echo $bus_specs_r['telematics']; ?>
            </td>
            <!-- .specs-comparison__spec-telematics -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_r['available_options'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-available_options">
              <strong class="block">Available Options</strong>
              <?php echo $bus_specs_r['available_options']; ?>
            </td>
            <!-- .specs-comparison__spec-avialable_options -->
          </tr>
          <?php endif; ?>

          <?php if( $bus_specs_r['safety'] ) : ?>
          <tr>
            <td class="specs-comparison__spec-safety">
              <strong class="block">Safety</strong>
              <?php echo $bus_specs_r['safety']; ?>
            </td>
            <!-- .specs-comparison__spec-safety -->
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
    <!-- .specs-comparison__table -->

    </div>
    <!-- .specs-comparison__col -->

  <?php endif; ?>

  </div><!-- .container.row -->

</section>