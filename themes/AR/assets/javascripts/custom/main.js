// MAIN.JS
//--------------------------------------------------------------------------------------------------------------------------------
//This is main JS file that contains custom JS scipts and initialization used in this template*/
// -------------------------------------------------------------------------------------------------------------------------------
// Template Name: SEVEN.
// Author: Designova.
// Website: http://www.designova.net 
// -------------------------------------------------------------------------------------------------------------------------------

/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {

     
    //Detecting viewpot dimension
     var vH = $(window).height();
     var vW = $(window).width();


     //Adjusting Intro Components Spacing based on detected screen resolution
     $('.fullwidth').css('height',vW);
     $('.fullheight').css('height',vH);
     $('.halfheight').css('height',vH/2);
     $('.halfwidth').css('width',vW/2);
  
   

    //Mobile Menu (multi level)
    $('nav.mobile-nav').meanmenu({
        meanScreenWidth: "1199"
      });


    $(".scroll-indicator").on('click', function() {
        var offset = 0; //Offset of 0px

        $('html, body').animate({
            scrollTop: $("#reveal-section").offset().top + offset
        }, 2000);
    });


    $(".team-carousel").owlCarousel({
        navigation : false,
        pagination: true,
        responsive: true,
        items: 1,
        touchDrag: true,
        navigationText: false,
        mouseDrag: true,
        itemsDesktop: [3000,3],
        itemsDesktopSmall: [1440,3],
        itemsTablet:[1024,3],
        itemsTabletSmall: [640,1],
        itemsMobile: [360,1],
        autoPlay: false,
        autoHeight: false
      });

    $(".intro-07-carousel").owlCarousel({
        navigation : true,
        pagination: false,
        responsive: true,
        items: 1,
        touchDrag: true,
        navigationText: false,
        mouseDrag: true,
        itemsDesktop: [3000,1],
        itemsDesktopSmall: [1440,1],
        itemsTablet:[1024,1],
        itemsTabletSmall: [640,1],
        itemsMobile: [360,1],
        autoPlay: false,
        autoHeight: false
      });


});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends







  

