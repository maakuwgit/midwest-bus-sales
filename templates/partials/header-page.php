<?php
  $btn        = get_field('hero_btn_link');
  $supertitle = get_field('supertitle');
?>
<header class="hdg">

  <div class="container">

  <?php if( $supertitle ) : ?>
    <h1 class="hdg__supertitle col col-md-8of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 end"><?php echo $supertitle; ?></h1><!-- .hdg__supertitle.col -->
  <?php endif; ?>

    <h2 class="hdg__title col col-md-8of12 col-lg-8of12 col-xl-8of12 col-xxl-8of12 end"><?php the_title(); ?></h2><!-- .hdg__title.col -->

  <?php if( get_the_content() !== '' ) : ?>
    <div class="hdg__content col col-md-8of12 col-lg-6of12 col-xl-6of12 col-xxl-6of12">
      <?php the_content(); ?>
    </div><!-- .hdg__content -->
  <?php endif; ?>

  <?php if( is_singular('bus') ) : ?>
    <a class="hdg__nav icon-link row centered start" href="#gform_2">
      <svg class="icon icon-triangle-down iflex">
        <use xlink:href="#icon-triangle-down"></use>
      </svg>
      <span class="icon-link__text iflex">Request Pricing</span>
    </a><!-- .icon-link.row.centered.start -->
  <?php endif; ?>

  <?php if( $btn ) : ?>
    <a class="btn btn--secondary hero_btn_link" href="<?php echo $btn['url']; ?>"><?php echo $btn['title']; ?></a>
    <!-- .btn -->
  <?php endif; ?>

  </div><!-- .container -->

</header><!-- .hdg -->