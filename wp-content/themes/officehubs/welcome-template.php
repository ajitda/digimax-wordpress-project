<?php 

/**
 * Template Name: Welcome Template
 *
 * @package WordPress
 * @subpackage Office Hubs
 * 
 */

get_header(); ?>
<!--workspace area start-->
        <div class="workspace_area">
            <div class="container">
                <div class="row">
                  <div class="col-md-1"></div>
                   <div class="col-md-10">
                        <div class="workspace-heading">
                            <h1><?php echo cs_get_option('workspace_heading_bold_text'); ?></h1>
                            <p><?php echo cs_get_option('workspace_heading_small_text'); ?></p>
                        </div>
                    
                    <div class="workspace">
                       <?php 
                        global $post;
                        $args = array( 
                                    'posts_per_page' => '2',
                                    'post_type' => 'workspace',
                                    'orderby' => 'menu_order',
                                    'order' => 'menu_order',
                                    'order' => 'ASC'
                                     );
                        $myposts=get_posts($args);
                        foreach($myposts as $post) : setup_postdata($post);
                        ?>
                        <div class="col-md-6">
                            <div class="single_workspace">
                                <?php the_post_thumbnail('workspace'); ?>
                                <h4><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                  </div>  
                </div>
            </div>
        </div>
<!--workspace area end-->
<!--aboutus area starts-->
        <div class="aboutus_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="about_us text-center">
                            <h1><?php echo cs_get_option('whoarewe_heading'); ?></h1>
                            <p><?php echo cs_get_option('whoarewe_p'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--aboutus area end-->
<?php get_footer(); ?>