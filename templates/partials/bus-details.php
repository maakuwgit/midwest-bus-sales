<?php

  //Specifications
  $serial     = get_field('filterables_serial');
  $po_window  = get_field('filterables_po_window');
  $make       = get_field('filterables_make');
  $model      = get_field('filterables_model');
  $mileage    = get_field('filterables_mileage');
  $fuel       = get_field('filterables_fuel');
  $year       = get_field('filterables_year');
  $capacity   = get_field('filterables_passengers');
  $hatch      = get_field('filterables_roof_hatch');
  $seating    = get_field('filterables_seating');
  $luggage    = get_field('filterables_luggage');
  $air        = get_field('filterables_air');
  $unit_type  = get_field('filterables_unit_type');

  //Performance
  $transmission = get_field('filterables_transmission');
  $horsepower   = get_field('filterables_horsepower');
  $lift         = get_field('filterables_lift');
  $retail       = get_field('filterables_retail');
  $export       = get_field('filterables_export');
  $wholesale    = get_field('filterables_wholesale');
  $engine       = get_field('filterables_engine');
  $brakes       = get_field('filterables_brakes');
  $suspension   = get_field('filterables_suspension');

  //Dealer Info
  $dealer       = get_field('filterables_dealer');
  $phone        = get_field('filterables_phone');
  $phone2       = get_field('filterables_phone_two');
  $fax          = get_field('filterables_fax');
  $address      = get_field('filterables_address');
?>
<section class="bus__details row relative">

  <table class="bus__details__details row start">

    <thead>
      <tr>
        <th>Specifications</th>
      </tr>
    </thead>

    <tbody>
      <?php if( $serial ) : ?>
      <tr class="bus__details__table__row">

        <td class="bus__details__details__title">Serial Number</td>
        <!-- .bus__details__details__title -->

        <td class="bus__details__details__description">
          <?php echo $serial; ?>
        </td>
        <!-- .bus__details__details__description -->

      </tr>
      <!-- .bus__details__table__row -->
      <?php endif; ?>

      <?php if( $mileage ) : ?>
      <tr class="bus__details__table__row">

        <td class="bus__details__details__title">Mileage</td>
        <!-- .bus__details__details__title -->

        <td class="bus__details__details__description">
          <?php echo $mileage; ?>
        </td>
        <!-- .bus__details__details__description -->

      </tr>
      <!-- .bus__details__table__row -->
      <?php endif; ?>

      <?php if( $unit_type ) : ?>
      <tr class="bus__details__table__row">

        <td class="bus__details__details__title">Unit Type</td>
        <!-- .bus__details__details__title -->

        <td class="bus__details__details__description">
          <?php echo $unit_type; ?>
        </td>
        <!-- .bus__details__details__description -->

      </tr>
      <!-- .bus__details__table__row -->
      <?php endif; ?>

      <?php if( $luggage ) : ?>
      <tr class="bus__details__table__row">

        <td class="bus__details__details__title">Luggage</td>
        <!-- .bus__details__details__title -->

        <td class="bus__details__details__description">
          <?php echo $luggage === 1 ? 'Yes' : 'No'; ?>
        </td>
        <!-- .bus__details__details__description -->

      </tr>
      <!-- .bus__details__table__row -->
      <?php endif; ?>

      <?php if( $engine ) : ?>
      <tr class="bus__details__table__row">

        <td class="bus__details__details__title">Engine</td>
        <!-- .bus__details__details__title -->

        <td class="bus__details__details__description">
          <?php echo $engine; ?>
        </td>
        <!-- .bus__details__details__description -->

      </tr>
      <!-- .bus__details__table__row -->
      <?php endif; ?>

    </tbody>

  </table>

</section>