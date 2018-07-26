<?php
  $bus_types  = get_the_terms(get_the_ID(), 'ownership');
  $mileage    = get_field('filterables_mileage');
  $unit       = get_field('filterables_unit_number');
  $luggage    = get_field('filterables_luggage');
  $engine     = get_field('filterables_engine');
  $location   = get_field('filterables_location');
  $seating    = get_field('filterables_seating');
  $lift       = get_field('filterables_lift');
  $make       = get_field('filterables_make');
  $model      = get_field('filterables_model');
  $price      = get_field('filterables_price');
  $brakes     = get_field('filterables_brakes');
  $passengers = get_field('filterables_passengers');
  $fuel       = get_field('filterables_fuel');
  $year       = get_field('filterables_year');
  $air        = get_field('filterables_air');
  $image      = has_post_thumbnail();

  if( $image ) {
    $bg = ' data-backgrounder';
  }else {
    $bg = '';
  }

  if( $_GET['bus_make'] && $_GET['bus_make'] !== $make ) return;
  if( $_GET['bus_model'] && $_GET['bus_model'] !== $model ) return;
  if( $_GET['bus_brakes'] && $_GET['bus_brakes'] !== $brakes ) return;
  if( $_GET['bus_engine'] && $_GET['bus_engine'] !== $engine ) return;
  if( $_GET['bus_fuel'] && $_GET['bus_fuel'] !== $fuel ) return;
  if( $_GET['bus_air'] && $_GET['bus_air'] !== $air ) return;
  if( $_GET['bus_luggage'] && $_GET['bus_luggage'] !== $luggage ) return;
  if( $_GET['bus_lift'] && $_GET['bus_lift'] !== $lift ) return;

  if($_GET['bus_price']){
    $get_price = preg_replace('/\s+/', '', $_GET['bus_price']);

    if( strpos($get_price, '-') ) {
      $from_price = substr($get_price, 0, strpos($get_price, '-'));
    }

    if( strpos($get_price, '<') ) {
      $from_price = substr($get_price, 0, strpos($get_price, '<'));
    }

    if(!$from_price) $from_price = 0;

    $to_price = substr($get_price, strpos($get_price, '-') + 1);

    if( $price < $from_price || $price > $to_price) return;
  }

  if( $_GET['bus_mileage_from'] ){
    $from_miles = str_replace(',', '', $_GET['bus_mileage_from']);
    if( $mileage < $from_miles ) return;
  }

  if( $_GET['bus_mileage_to'] ){
    $to_miles = str_replace(',', '', $_GET['bus_mileage_to']);
    if( $mileage > $to_miles ) return;
  }

  if( $_GET['bus_year_from'] ){
    if( $year < $_GET['bus_year_from'] ) return;
  }

  if( $_GET['bus_year_to'] ){
    if( $year > $_GET['bus_year_to'] ) return;
  }
?>
<section class="bus__row row relative" data-clickthrough>

  <a class="hide" href="<?php the_permalink();?>"></a>

  <header class="bus__row__header">

    <h2 class="bus__row__name"><?php the_title(); ?></h2>
    <!-- .bus__name -->
    <a class="btn" href="<?php bloginfo('url'); ?>/contact-us?bus_unit=<?php echo $unit;?>">Request a Quote</a>

  </header>
  <!-- .bus__row__header -->

  <figure class="bus__row__figure"<?php echo $bg; ?>>

    <div class="bus__row__feature feature">
      <?php the_post_thumbnail(); ?>
    </div>
    <!-- .bus__row__feature.feature -->

  </figure>

  <dl class="bus__row__details row start">

    <?php if ($bus_types) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Bus Type</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">

      <?php foreach($bus_types as $type) : ?>

        <?php echo ucfirst($type->slug); ?>

      <?php endforeach; ?>

      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $mileage ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Mileage</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $mileage; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $unit ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Unit</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $unit; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $luggage ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Luggage</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $luggage === 1 ? 'Yes' : 'No'; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $engine ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Engine</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $engine; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $location ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Location</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $location; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $seating ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Seating</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $seating; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

    <?php if( $lift ) : ?>
    <div class="bus__row__details__wrapper">

      <dt class="bus__row__details__title">Lift</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $lift; ?>
      </dd>
      <!-- .bus__row__details__description -->

    </div>
    <!-- .bus__row__details__wrapper -->
    <?php endif; ?>

  </dl>

</section>