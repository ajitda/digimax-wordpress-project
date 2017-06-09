(function ($) {
	"use strict";

    jQuery(document).ready(function($){
$(".navbar-toggle").click(function(){
        $(".header_area").toggleClass('background_black');
    });
    
    
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });

        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();



        


    });


    jQuery(window).load(function(){

        
    });

}(jQuery));	