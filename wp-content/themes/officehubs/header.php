<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
       <!--home area start-->
        <div class="home_area <?php if(!is_page_template('welcome-template.php')) : ?>page_background<?php endif; ?>">
            <div class="header_area">
                <div class="container-fluid">
                  <div class="row">
                       <div class="col-md-4">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-8 pull-right">
                            <div class="collapse navbar-collapse" id="myNavbar">
                              <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'menu_id' => 'nav')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider_area">
                <div class="single_slide">
                    <div class="slide_background slide_img "></div>
                    <div class="slide_text">
                       <div class="slide_text_table">
                            <?php if(is_page_template('welcome-template.php')) : ?>
                            <div class="slide_text_table_cell">
                               
                                <h1><?php echo cs_get_option('home_bold_text'); ?></h1>
                                <h3><?php echo cs_get_option('home_semibold_text'); ?> <a href="<?php echo cs_get_option('enquire_btn_link'); ?>" class="enquire_btn"><?php echo cs_get_option('enquire_btn_text'); ?></a></h3>
                            </div>
                            <?php else : ?>
                                <div class="page_title">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--home area end-->