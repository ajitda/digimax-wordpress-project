<?php 

/**
 * Template Name: Contact Us Template
 *
 * @package WordPress
 * @subpackage Office Hubs
 * 
 */

get_header(); ?>


<!--aboutus area starts-->
        <div class="contactus_area">
            <div class="container">
                <div class="row">
                   <h1 class="contact_heading text-center"><?php echo cs_get_option('contact_header'); ?></h1>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 col-sm-6">
                        <div class="contact_us text-center">
                         
                            <p><?php echo cs_get_option('contact_desc'); ?></p>
                            <div class="google_map">
                                <iframe width="325" height="275" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=First%20Floor%20%20%2089%20-%2093%20Fonthill%20Road%20%20%20Islington%20%20%20N4%203JH&key=AIzaSyDI-a5yeZcMs6hESwsci6o1Nw26KijqlAI" allowfullscreen></iframe> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
<!--aboutus area end-->
<?php get_footer(); ?>