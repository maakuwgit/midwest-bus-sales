<?php
  $bus_types  = get_terms('ownership');
  $mileage    = get_field('filterables_mileage');
  $unit       = get_field('filterables_unit_number');
  $luggage    = get_field('filterables_luggage');
  $engine     = get_field('filterables_engine');
  $location   = get_field('filterables_location');
  $seating    = get_field('filterables_seating');
  $lift       = get_field('filterables_lift');
  $image      = has_post_thumbnail();

  if( $image ) {
    $bg = ' data-background';
  }else {
    $bg = '';
  }
?>
<article class="bus__row row relative" data-clickthrough>

  <a class="hide" href="<?php the_permalink();?>"></a>

  <header class="bus__row__header">

    <h2 class="bus__row__name"><?php the_title(); ?></h2>
    <!-- .bus__name -->

  </header>
  <!-- .bus__row__header -->

  <figure class="bus__row__figure"<?php echo $bg; ?>>

    <div class="bus__row__feature feature">
      <?php the_post_thumbnail(); ?>
    </div>
    <!-- .bus__row__feature.feature -->

  </figure>

  <dl class="bus__row__details">
    <div>

    <?php if ($bus_types) : ?>

      <dt class="bus__row__details__title">Bus Type</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">

      <?php foreach($bus_types as $type) : ?>

        <?php echo $type->name; ?>

      <?php endforeach; ?>

      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $mileage ) : ?>

      <dt class="bus__row__details__title">Mileage</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $mileage; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $unit ) : ?>

      <dt class="bus__row__details__title">Unit</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $unit; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $luggage ) : ?>

      <dt class="bus__row__details__title">Luggage</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $luggage; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $engine ) : ?>

      <dt class="bus__row__details__title">Engine</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $engine; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $location ) : ?>

      <dt class="bus__row__details__title">Location</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $location; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $seating ) : ?>

      <dt class="bus__row__details__title">Seating</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $seating; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>

    <?php if( $lift ) : ?>

      <dt class="bus__row__details__title">Lift</dt>
      <!-- .bus__row__details__title -->

      <dd class="bus__row__details__description">
        <?php echo $lift; ?>
      </dd>
      <!-- .bus__row__details__description -->

    <?php endif; ?>


    </div>
  </dl>

</article>