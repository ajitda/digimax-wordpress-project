<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'ppm_quickstart_page_options',
  'title'     => 'Custom Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'ppm_quickstart_page_section_1',
      'title' => 'Page Options',
      'icon'  => 'fa fa-cog',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'page_alternative_title',
          'type'  => 'text',
          'title' => 'Page alternative title',
        ),

      ), // end: fields
    ), // end: a section

  ),
);


CSFramework_Metabox::instance( $options );
