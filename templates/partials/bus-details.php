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
<section class="bus__details">

  <div class="container row stretch">

    <div class="bus__details__wrapper bus_details_specifications col col-4of12">

      <table class="bus__details__table row start">

        <thead class="bus__details__thead">
          <tr>
            <th>Specifications</th>
          </tr>
        </thead>
        <!-- .bus__details__thead -->

        <tbody class="bus__details__tbody">
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
        <!-- .bus__details__tbody -->

      </table>
      <!-- .bus__details__table.row.start -->

    </div>
    <!-- .bus_details_specifications -->

    <div class="bus__details__wrapper bus_details_performance col col-4of12">

      <table class="bus__details__table row start">

        <thead class="bus__details__thead">
          <tr>
            <th>Performance</th>
          </tr>
        </thead>

        <tbody class="bus__details__tbody">
          <?php if( $transmission ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Transmission</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo ucfirst($transmission); ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $horsepower ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Horsepower</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $horsepower; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $lift ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Lift</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $lift === 1 ? 'Yes' : 'No'; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $retail ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Retail</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $retail; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $export ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Export</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $export; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $wholesale ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Wholesale</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $wholesale; ?>
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

          <?php if( $brakes ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Brakes</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $brakes; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $suspension ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Suspension</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $suspension; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

        </tbody>

      </table>

    </div>
    <!-- .bus_details_performance -->

    <div class="bus__details__wrapper bus_details_dealer col col-4of12">

      <table class="bus__details__table row start">

        <thead class="bus__details__thead">
          <tr>
            <th>Dealer Information</th>
          </tr>
        </thead>
        <!-- .bus__details__thead -->

        <tbody class="bus__details__tbody">
          <?php if( $dealer ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Dealer</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo $dealer; ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $phone ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Phone</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo  format_phone($phone); ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $phone2 ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Phone</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo  format_phone($phone2); ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $fax ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Fax</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <?php echo format_phone($fax); ?>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

          <?php if( $address ) : ?>
          <tr class="bus__details__table__row">

            <td class="bus__details__details__title">Address</td>
            <!-- .bus__details__details__title -->

            <td class="bus__details__details__description">
              <address><?php echo $address; ?></address>
            </td>
            <!-- .bus__details__details__description -->

          </tr>
          <!-- .bus__details__table__row -->
          <?php endif; ?>

        </tbody>
        <!-- .bus__details__tbody -->

      </table>

    </div>
    <!-- .bus_details_dealer -->

  </div>
  <!-- .container.row -->

</section>