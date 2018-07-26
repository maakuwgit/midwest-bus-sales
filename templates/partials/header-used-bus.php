<?php
  $title    = get_the_title();
  $location = get_field('filterables_location');
?>
<header class="bus__hdg">

  <div class="container row start">

    <ul class="bus__hdg__breadcrumb col col-md-7of12">
      <li><a href="../">Used Buses</a></li>
      <li><?php echo $title; ?></li>
    </ul><!-- .bus__breadcrumb.col -->

    <h1 class="bus__hdg__title col col-md-8of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 end">
      <span class="iflex"><?php echo $title; ?></span>
      <span class="iflex bus__hdg__location"><?php echo $location; ?></span>
      <!--. bus__hdg__location -->
    </h1><!-- .bus__hdg__title.col -->

  </div><!-- .container -->

</header><!-- .bus__hdg -->