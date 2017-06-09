<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings      = array(
  'menu_title' => 'Theme Options',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'theme-options',
  'ajax_save'  => true,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'Home page Options',
  'icon'   => 'fa fa-bookmark',
  'fields' => array(
      array(
        'id' => 'home_bold_text', 
        'title' => 'Homepage Bold Text', 
        'type' => 'text', 
        'desc' => 'Change Homepage Bold Text from here',
          'default' => 'WORKSPACE',

      ),
      array(
        'id' => 'home_semibold_text', 
        'title' => 'Homepage Semi Bold Text', 
        'type' => 'text', 
        'desc' => 'Change Homepage Semi Bold Text from here', 
          'default' => 'TO SUIT YOU',
      ),
      array(
        'id' => 'enquire_btn_text', 
        'title' => 'Enquire Button Text', 
        'type' => 'text', 
        'desc' => 'Change Enquire Button Text here', 
          'default' => 'ENQUIRE NOW',
      ),
      array(
        'id' => 'enquire_btn_link', 
        'title' => 'Enquire Button link', 
        'type' => 'text', 
        'desc' => 'Give Enquire Button link here', 
      ),
  )
);
$options[] = array(
  'name'   => 'seperator_2',
  'title'  => 'Workspace Options',
  'icon'   => 'fa fa-bookmark',
  'fields' => array(
      array(
        'id' => 'workspace_heading_bold_text', 
        'title' => 'Workspace Heading Bold Text', 
        'type' => 'text', 
        'desc' => 'Change Workspace Heading Bold Text from here',
          'default' => 'Looking for an office workspace?',
      ),
      array(
        'id' => 'workspace_heading_small_text', 
        'title' => 'Workspace Heading Small Text', 
        'type' => 'textarea', 
        'desc' => 'Change Workspace Heading Small Text from here',
          'default' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
      ),
      array(
        'id' => 'whoarewe_heading', 
        'title' => 'Who Are We Heading', 
        'type' => 'text', 
        'desc' => 'Change Who Are We Heading from here',
          'default' => 'Who Are We',
      ),
      array(
        'id' => 'whoarewe_p', 
        'title' => 'Who Are We Paragraph', 
        'type' => 'textarea', 
        'desc' => 'Change Who Are We Paragraph text from here',
          'default' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
      ),
      
  )
);
$options[] = array(
  'name'   => 'seperator_3',
  'title'  => 'footer Options',
  'icon'   => 'fa fa-bookmark',
  'fields' => array(
      array(
        'id' => 'footer_address', 
        'title' => 'Footer Address', 
        'type' => 'text', 
        'desc' => 'Change Footer Address from here',
          'default' => 'First Floor 89 - 93 Fonthill Road Islington N4 3JH',
      ),
      array(
        'id' => 'footer_email', 
        'title' => 'Footer Email ID', 
        'type' => 'text', 
        'desc' => 'Change Footer Email ID from here',
          'default' => 'INFO@OFFICEHUBS.CO.UK',
      ),
      array(
        'id' => 'footer_cell', 
        'title' => 'Footer Cell No', 
        'type' => 'text', 
        'desc' => 'Change Footer Cell No from here',
          'default' => '020 345 495',
      ),
      array(
        'id' => 'footer_copyright', 
        'title' => 'Footer Copyright Text', 
        'type' => 'textarea', 
        'desc' => 'Change Footer Copyright Text from here',
          'default' => 'Copyright © 2016 OFFICE HUBS. All Rights Reserved. DESIGN & DEVELOPMENT BY GRAPHIC STUDIOS',
      ),
      
  )
);
$options[] = array(
  'name'   => 'seperator_4',
  'title'  => 'Contact Page Options',
  'icon'   => 'fa fa-bookmark',
  'fields' => array(
      array(
        'id' => 'contact_header', 
        'title' => 'Contact Form Header Text', 
        'type' => 'text', 
        'desc' => 'Change Contact Form Header Text from here',
          'default' => 'Get In Touch',
      ),
      array(
        'id' => 'contact_desc', 
        'title' => 'Contact Description', 
        'type' => 'textarea', 
        'desc' => 'Change Contact Description from here',
          'default' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem",
      ),
      
  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);



CSFramework::instance( $settings, $options );
