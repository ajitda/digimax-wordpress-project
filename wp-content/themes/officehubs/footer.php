<!--footer area starts-->
        <footer>
           <div class="footer_top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-2"></div>
                        <div class="footer_top">
                            <div class="col-md-2 col-sm-3">
                                <div class="footer_logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-7">
                               <div class="contact_details">
                                <p><?php echo cs_get_option('footer_address'); ?></p>
                                <p><a href="mailto:<?php echo cs_get_option('footer_email'); ?>"><?php echo cs_get_option('footer_email'); ?> </a>  |  <a href="tel:<?php echo cs_get_option('footer_cell'); ?>"><?php echo cs_get_option('footer_cell'); ?></a></p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="row">
                        <div class="copy_right text-center">
                            <p><?php echo cs_get_option('footer_copyright'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!--footer area end-->
       
        <?php wp_footer(); ?>
    </body>
</html>