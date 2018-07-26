<?php
/**
* member-grid
* -----------------------------------------------------------------------------
*
* member-grid component
*/

$defaults = [
  'heading'     => false,
  'content'     => false,
  'num_members' => -1
];

$args = [
  'id'      => uniqid('member-grid-'),
  'classes' => array(),
];

$component_data = ll_parse_args( $component_data, $defaults );
$component_args = ll_parse_args( $component_args, $args );
?>

<?php
/**
 * Any additional classes to apply to the main component container.
 *
 * @var array
 * @see args['classes']
 */
$classes        = $component_args['classes'];

/**
 * ID to apply to the main component container.
 *
 * @var array
 * @see args['id']
 */
$id            = ' id="' . $component_args['id'] . '"';

/**
 * ACF values pulled into the component from the components.php partial.
 */
$heading       = $component_data['heading'];
$content       = $component_data['content'];
$showposts     = $component_data['num_members'];

$margs = array(
  'posts_per_page' => $showposts,
  'order'          => 'ASC',
  'orderby'        => 'menu_order',
  'post_status'    => 'publish',
  'post_type'      => 'team',
);

$members = new WP_Query( $margs );

?>

<?php if( !$members->have_posts() ) return; ?>
<section class="ll-member-grid <?php echo implode( " ", $classes ); ?>" <?php echo ( $component_id ? 'id="'.$component_id.'"' : '' ) ?> data-component="member-grid">

  <div class="container row centered">

  <?php if( $heading  ) : ?>
    <<?php echo $heading['tag']; ?> class="col col-md-6of12 col-lg-4of12 col-xl-4of12 col-xxl-4of12 member-grid__heading"><?php echo $heading['text']; ?></<?php echo $heading['tag']; ?>><!-- .col-md-6of12.col-lg-4of12.col-xl-4of12.col-xxl-4of12.member-grid__heading -->
  <?php endif; ?>

  <?php if( $content  ) : ?>
    <div class="col col-md-10of12 col-lg-7of12 col-xl-7of12 col-xxl-7of12 member-grid__content">
      <?php echo format_text($content); ?>
    </div><!-- .col-md-10of12.col-lg-8of12.col-xl-8of12.col-xxl-8of12.member-grid__content -->
  <?php endif; ?>

  </div><!-- .container.row.centered -->

  <div class="container">
    <ul class="member-grid__list no-bullet row">

  <?php
    $num_members = wp_count_posts('team');
    $num_members = $num_members->publish;

    while ( $members->have_posts() ) : $members->the_post();

    $positions  = get_the_terms(get_the_ID(), 'team_position');
    $offices    = get_the_terms(get_the_ID(), 'offices');

  ?>
    <li class="member-grid__item col col-sm-6of12 col-md-6of12 col-lg-3of12 col-xl-3of12 col-xxl-3of12">

      <figure id="<?php echo basename(get_permalink()); ?>" class="member-grid__thumb__figure relative">
        <a href="<?php the_permalink(); ?>" data-magnific></a>

        <div class="member-grid__thumb__image" data-backgrounder>
          <div class="feature">
            <?php the_post_thumbnail(); ?>
          </div>
        </div><!-- .member-grid__thumb_image -->

        <figcaption class="member-grid__thumb__caption">

          <div class="member-grid__thumb__title h4"><?php the_title(); ?></div>

        <?php if( $positions && ! is_wp_error( $positions ) ) : ?>

          <div class="member-grid__thumb__position">

          <?php
            $position_names = [];

            foreach( $positions as $position ) {
              $position_names[] = $position->name;
            }

            $position_list = join(', ', $position_names);

            echo format_text($position_list);
          ?>

          </div><!-- .member-grid__thumb__position -->

        <?php endif; ?>

        <?php if( $offices && ! is_wp_error( $offices ) ) : ?>

          <div class="member-grid__thumb__office">

          <?php
            $office_names = [];

            foreach( $offices as $office ) {
              $office_names[] = $office->name;
            }

            $office_list = join(', ', $office_names);

            echo format_text($office_list);
          ?>

          </div><!-- .member-grid__thumb__office -->

        <?php endif; ?>

        </figcaption><!-- .member-grid__thumb__caption -->

      </figure>

    </li><!-- .member-grid__item -->

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
    </ul><!-- .member-grid__list.no-bullet.row -->

  <?php if( $num_members > $showposts && $showposts != -1 ) : ?>
    <nav class="member-grid__nav text-center">
      <a class="btn" href="<?php echo get_bloginfo('url') . '/team'; ?>">View All Members</a>
    </nav><!-- .member-grid__nav -->
  <?php endif; ?>

  </div><!-- .container -->

</section>