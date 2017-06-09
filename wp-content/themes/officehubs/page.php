<?php get_header(); ?>
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?> 
 <div class="page_content">
     <div class="container">
         <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8">
              <?php the_content(); ?>
             </div>
         </div>
     </div>
 </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>