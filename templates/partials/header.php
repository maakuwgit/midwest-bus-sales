<?php
  $phone  = get_field('contact_phone_number', 'options');
?>
<header class="navbar top" role="banner">
  <div class="navbar__topbar">
    <nav class="navbar__topbar__nav container row end centered">

      <form class="navbar__topbar__search iflex" role="search" method="get" id="search" action="<?php echo home_url(); ?>" data-component="search-form">
        <input type="text" value="" name="s" id="s" placeholder="Search">
        <label>
          <svg class="icon icon-search">
            <use xlink:href="#icon-search"></use>
          </svg>
        </label>
      </form>

      <?php if( $phone ) : ?>
        <a class="navbar__topbar__phone iflex" href="tel:+1<?php echo $phone; ?>"><?php echo format_phone($phone, false, '.'); ?></a>
      <?php endif; ?>
    </nav>
  </div>
  <div class="navbar-header container">

    <?php $logo = get_field( 'global_logo', 'option' ); ?>

    <?php if ( $logo ) : ?>

      <a class="flex" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="logo logo--header" src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name'); ?>">
      </a>

    <?php else : ?>

      <a class="logo__brand flex" href="<?php echo esc_url(home_url('/')); ?>">
        <?php echo ll_get_logo(); ?>
      </a>

    <?php endif; ?>

    <?php if (has_nav_menu('secondary_navigation')) : ?>

    <div class="secondary-nav" id="secondary-nav" role="navigation">

      <div class="container row">

        <?php
        wp_nav_menu( array(
          'theme_location' => 'secondary_navigation',
          'menu_class'     => 'nav navbar-nav col col-sm-9of12 col-md-9of12 col-lg-9of12 col-xl-9of12'
        ));
        ?>

        <?php echo get_sidebar(); ?>

      </div><!-- .container -->

    </div><!-- .secondary-nav -->

    <?php endif; ?>

    <?php if (has_nav_menu('primary_navigation')) : ?>
    <nav class="primary-nav flex" id="primary-nav" role="navigation">
      <?php
      if ( has_nav_menu('primary_navigation') ) {
        wp_nav_menu( array(
          'theme_location'  => 'primary_navigation',
          'menu_class'      => 'nav navbar-nav'
        ) );
      }
      ?>
    </nav><!-- .primary-nav -->
    <?php endif; ?>

    <?php if (has_nav_menu('primary_navigation')) : ?>
    <button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#primary-nav">

      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggle__box">
        <span class="navbar-toggle__inner"></span>
      </span><!-- .navbar-toggle__box -->

    </button><!-- .navbar-toggle -->
    <?php endif; ?>

  </div>

</header>