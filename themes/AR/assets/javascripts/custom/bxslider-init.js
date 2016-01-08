/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {

		
    $('.bxslider').bxSlider({
      pagerCustom: '#bx-pager',
      controls: false
    });

    $('.agency-slider-triggers a').on('click', function() {
      $('.agency-slider-triggers a').removeClass('agency-triggered');
      $(this).addClass('agency-triggered');
    })
   		
        
   
});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends







	

