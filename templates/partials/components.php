<?php
if( have_rows( 'components' ) ) {
  //We're gonna dump it into a string, so let's define it
  $components = '';

  while( have_rows( 'components' ) ) {
    the_row();

    switch( get_row_layout() ) {
      case 'bus-types-grid' :
        //About Us”
        $buses = array(
          'heading'    => get_sub_field('bus_grid_heading'),
          'content'    => get_sub_field('bus_grid_content'),
          'cards'      => get_sub_field('bus_grid_cards')
        );

        $components .= ll_include_component(
          'bus-types-grid',
          $buses,
          array(),
          true
        );
      case 'bus-comparison' :
        //About Us”
        $buses = array(
          'heading'           => get_sub_field('comparison_bus_heading'),
          'content'           => get_sub_field('comparison_bus_content'),
          'bus_left'          => get_sub_field('comparison_bus_left'),
          'bus_right'         => get_sub_field('comparison_bus_right')
        );

        $components .= ll_include_component(
          'specs-comparison',
          $buses,
          array(),
          true
        );
      break;
      case 'customizable' :
        //New Buses
        $customizable = array(
          'content'     => get_sub_field('customizable_content'),
          'image'       => get_sub_field('customizable_image'),
          'features'    => get_sub_field('customizable_features'),
        );

        $components .= ll_include_component(
          'customizables',
          $customizable,
          array(),
          true
        );
      break;
      case 'hero' :
        //The Blog Archive and Blog Single pages
        $hero = array(
          'supertitle'  => get_sub_field('hero_supertitle'),
          'heading'     => get_sub_field('hero_heading'),
          'image'       => get_sub_field('hero_image'),
          'video'       => get_sub_field('hero_video'),
          'overlay'     => get_sub_field('overlay_strength')
        );

        $components .= ll_include_component(
          'hero',
          $hero,
          array(),
          true
        );
      break;
      case 'call-to-action':
        //New Buses
        $form = array(
          'form_id'  => get_sub_field('cta_form_id')
        );

        $components .= ll_include_component(
          'call-to-action',
          $form,
          array(),
          true
        );
      break;
      case 'lr-block' :
        //Home, Services, New Buses, All Locations
        $block = array(
          'style'       => get_sub_field('lr_blocks_style'),
          'image'       => get_sub_field('lr_blocks_image'),
          'content'     => get_sub_field('lr_blocks_content'),
          'has_bg'      => get_sub_field('lr_blocks_background')
        );

        $components .= ll_include_component(
          'lr-blocks',
          $block,
          array(),
          true
        );
      break;
      case 'lr-w-gradient' :
        //Home
        $block = array(
          'style'       => get_sub_field('lr_w_gradient_style'),
          'image'       => get_sub_field('lr_w_gradient_image'),
          'content'     => get_sub_field('lr_w_gradient_content'),
          'has_bg'      => get_sub_field('lr_w_gradient_background')
        );

        $components .= ll_include_component(
          'lr-w-gradient',
          $block,
          array(),
          true
        );
      break;
      case 'icon-grid' :
        //About Us”
        $icons = array(
          'heading' => get_sub_field('icon_grid_heading'),
          'content' => get_sub_field('icon_grid_content'),
          'icons'   => get_sub_field('icon_grid_icons')
        );

        $components .= ll_include_component(
          'icon-grid',
          $icons,
          array(),
          true
        );
      break;
      case 'image-grid' :
        //About Us”
        $images = array(
          'heading' => get_sub_field('image_grid_heading'),
          'images'  => get_sub_field('image_grid_images')
        );

        $components .= ll_include_component(
          'image-grid',
          $images,
          array(),
          true
        );
      break;
      case 'image-slider' :
        //All buses
        $slides = array(
          'slides'      => get_sub_field('image_slider_slides')
        );

        $components .= ll_include_component(
          'image-slider',
          $slides,
          array(),
          true
        );
      break;
      case 'location-grid' :
        //Form Template, Services
        $locations = array(
          'heading'       => get_sub_field('location_grid_heading'),
          'content'       => get_sub_field('location_grid_content'),
          'num_locations' => get_sub_field('location_grid_number')
        );

        $components .= ll_include_component(
          'location-grid',
          $locations,
          array(),
          true
        );
      break;
      case 'location_map' :
        //Form Template
        $locations = array(
          'heading'       => get_sub_field('map_heading'),
          'content'       => get_sub_field('map_content'),
          'locations'     => get_sub_field('map_locations')
        );

        $components .= ll_include_component(
          'location-map',
          $locations,
          array(),
          true
        );
      break;
      case 'logo_grid' :
        //Form Template, Services
        $logos = array(
          'heading'       => get_sub_field('logo_grid_heading'),
          'content'       => get_sub_field('logo_grid_content'),
          'logos'         => get_sub_field('logo_grid_logos')
        );

        $components .= ll_include_component(
          'logo-grid',
          $logos,
          array(),
          true
        );
      break;
      case 'member_grid' :
        //About Us”
        $members = array(
          'heading'     => get_sub_field('member_grid_heading'),
          'content'  => get_sub_field('member_grid_content'),
          'num_members' => get_sub_field('member_number')
        );

        $components .= ll_include_component(
          'member-grid',
          $members,
          array(),
          true
        );
      break;
      case 'three-col-w-heading' :
        //Home, About, all Locations
        $blocks = array(
          'heading'     => get_sub_field('three_col_heading_heading'),
          'content' => get_sub_field('three_col_heading_content'),
          'column_1' => get_sub_field('three_col_heading_content_1'),
          'column_2' => get_sub_field('three_col_heading_content_2'),
          'column_3' => get_sub_field('three_col_heading_content_3')
        );

        $components .= ll_include_component(
          'three-col-w-heading',
          $blocks,
          array(),
          true
        );
      break;
      case 'timeline' :
        //Home
        $milestones = array(
          'milestones' => get_sub_field('timeline_milestones')
        );

        $components .= ll_include_component(
          'timeline',
          $milestones,
          array(),
          true
        );
      break;
      case 'two-col-w-heading' :
        //Home, About, all Locations
        $blocks = array(
          'title'     => get_sub_field('two_col_heading_title'),
          'l_content' => get_sub_field('two_col_heading_l_content'),
          'r_content' => get_sub_field('two_col_heading_r_content')
        );

        $components .= ll_include_component(
          'two-col-w-heading',
          $blocks,
          array(),
          true
        );
      break;
      case 'two-col-w-icons' :
        //About Us”
        $images = array(
          'style'      => get_sub_field('two_col_icons_style'),
          'type'       => get_sub_field('two_col_icons_type'),
          'content'    => get_sub_field('two_col_icons_content'),
          'has_bg'     => get_sub_field('two_col_icons_background'),
          'list'       => get_sub_field('two_col_icons_list')
        );

        $components .= ll_include_component(
          'two-col-w-icons',
          $images,
          array(),
          true
        );
      break;
      default:
      break;
    }
  }
  echo $components;
}
?>
<?php // wp_link_pages(array('before' => '<nav class='pagination'>', 'after' => '</nav>')); ?>
