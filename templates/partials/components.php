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
        //Pretty much every page
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
          'style'       => get_sub_field('lr_w_image_style'),
          'image'       => get_sub_field('lr_w_image_image'),
          'content'     => get_sub_field('lr_w_image_content'),
          'background'  => get_sub_field('lr_w_image_background')
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
        $images = array(
          'heading' => get_sub_field('icon_grid_heading'),
          'content' => get_sub_field('icon_grid_content'),
          'icons'   => get_sub_field('icon_grid_images')
        );

        $components .= ll_include_component(
          'icon-grid',
          $images,
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
      case 'location_grid' :
        //Form Template, Services
        $locations = array(
          'heading'       => get_sub_field('location_heading'),
          'content'       => get_sub_field('location_content'),
          'num_locations' => get_sub_field('location_num_locations')
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
      case 'member-grid' :
        //About Us”
        $members = array(
          'supertitle'  => get_sub_field('member_grid_supertitle'),
          'heading'     => get_sub_field('member_grid_heading'),
          'num_members' => get_sub_field('member_number')
        );

        $components .= ll_include_component(
          'member-grid',
          $members,
          array(),
          true
        );
      break;
      case 'two-col-w-heading' :
        //Home, About, all Locations
        $blocks = array(
          'title'     => get_sub_field('two-col-w-heading-title'),
          'l_content' => get_sub_field('two-col-w-heading-l_content'),
          'r_content' => get_sub_field('two-col-w-heading-r_content')
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
