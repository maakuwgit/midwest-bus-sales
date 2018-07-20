<article <?php post_class('archive-team__article'); ?>>

  <div class="container">

    <ul class="member-grid__list no-bullet row">
    <?php while (have_posts()) : the_post(); ?>
      <?php include( locate_template('templates/partials/member-card.php') ); ?>
    <?php endwhile; ?>
    </ul><!-- .member-grid__list.no-bullet.row -->

  </div><!-- .container -->

</article>