$( document ).ready(function() {

//Background slideshow
$.supersized({
    // Functionality
    slide_interval          :   3000,       // Length between transitions
    transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
    transition_speed        :   2000,       // Speed of transition
    // Components   
    horizontal_center       :  1,
    slides: slideImages            
});


$('h2').fitText(0.7, {
  maxFontSize: '34px'
});

//Headline with animation
$('.headline').html('<span class="animated fadeIn">'+ firstLine +'</span><h1 class="animated bounceInLeft">'+ secondLine +'</h1>');

//Countdown
$(function() {
  $('.countdown').countdown(deadline, function(event) {
    var $this = $(this);
    switch(event.type) {
      case "seconds":
      case "minutes":
      case "hours":
      case "days":
      case "weeks":
      case "daysLeft":
        $this.find('span.'+event.type).html(event.value);
        break;
      case "finished":
        $this.fadeTo('slow', 0.5);
        break;
    }
  });
});



// Contact form toggle
$(".icon-envelope, #contact .icon-remove").click(function(){
   $('#contact').fadeToggle(1000);
});

// Correcting height of contact form
if($(window).width() > 767){
  var wHeight = $('#section').height();// + feedHeight;
  $('#contact').css('height', wHeight);
} else {
  $('#contact').css('height', '100%');
}

// Map toggle
$(".icon-map-marker, .gmap .icon-remove").click(function(){
  //Google Map height
  var wHeight = $('.sidebar').height();
  $('#map_canvas').css('height', wHeight - 80);

  //Google map init
  $('.gmap').fadeToggle(function(){
    // Google map settings
    $('#map_canvas').gmap({'zoom':13, 'center': mapCoord , 'scrollwheel': false, 'disableDefaultUI':false});
    $('#map_canvas').gmap('addMarker', { 'position': mapCoord , 'bounds': false}).click(function() {
          $('#map_canvas').gmap('openInfoWindow', { 'content': mapText }, this);
        });
  });
});

//Social tooltip
$('.social i').tooltip();


// Contact Form ajax
$("#contact").submit(function(e){
  e.preventDefault();
  var name = $("#client-name").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var text = $("#text").val();
  var dataString = 'myEmail=' + myEmail + '&clientname=' + name + '&email=' + email +'&phone=' + phone + '&text=' + text;

  function isValidEmail(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
  }

  $('.success, .error').fadeOut();
 
  if (isValidEmail(email) && (text.length > 10) && (name.length > 1)){
    $.ajax({
    type: "POST",
    url: "js/form.php",
    data: dataString,
    success: function(){
      $('.success').fadeIn(1000);
      $('#contact input, #contact textarea, #contact .btn').addClass('disabled').attr('disabled', 'disabled');
    }
    });
  } else{
    $('.error').fadeIn(1000);
  }
 
  return false;
});


//Subscription form
$(".subscription").submit(function(e){
  e.preventDefault();
  var email = $("#email2").val();
  var dataString = 'email=' + email;
  function isValidEmail(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
  }

  $('.thanks-error').fadeOut();
 
  if (isValidEmail(email)){
    $.ajax({
    type: "POST",
    url: "js/subscription.php",
    data: dataString,
    success: function(){
      $('.subscription input, .subscription button').fadeOut(1000);
      $('.thanks').delay(1000).fadeIn(1000);
    }
    });
  } else{
    $('.thanks-error').fadeIn(1000);
  }
 
  return false;
});


//Flickr feed settings
if(feed === 'on') {
  $('.feed').html('<div class="feed-loading"><i class="icon-refresh icon-spin"></i><span>loading...</span></div><ul class="flickr inline unstyled"></ul>');
  $('.feed ul').jflickrfeed({
    limit: 8,
    qstrings: {
      id: flickrID
    },
    itemTemplate:
    '<li class="span3">' +
      '<a rel="prettyPhoto[flickr]" href="{{image}}" title="{{title}}">' +
        '<div class="img-hover"><i class="icon-zoom-in icon-3x"></i></div><img src="{{image_s}}" alt="{{title}}" />' +
      '</a>' +
    '</li>'
  }, function(data) {
    $('.feed-loading').fadeOut();
    $('.feed a').prettyPhoto({
      overlay_gallery: false
    });
    $(".feed li").hover(function() {
        $(this).find(".img-hover").fadeIn(500);
      }, function(){
        $(".img-hover").stop().fadeOut();
    });
  });
}

var winHeight = $(window).height();
$('.sidebar').css('min-height', winHeight);

if($(window).width() < 768){
    var sWidth = $(window).width();
    $('.gmap').css('width', sWidth );
    var sideHeight = $('.sidebar').height();
    $('#contact').css('height', '100%');

}

if($(window).width() > 767){
  //Correcting the height of modals
  window.onload=function(){
    var wHeight = $('.feed li img').height();
    var contactHeight = $('#contact').height();
    $('#contact').css('height', (wHeight * 2)+ contactHeight);
  };

  $('.gmap').css('width', '100%' );
}

//Changing dimensions on resizing
$(window).resize( function(event) {

    var winHeight = $(window).height();
    $('.sidebar').css('min-height', winHeight);

    var wHeight = $('.sidebar').height();
    $('#map_canvas').css('height', wHeight - 80);
    

    if($(window).width() > 767){
      var wHeight = $('.feed li img').height();
      var sidebarHeight = $('.sidebar').height();
      $('#contact').css('height', sidebarHeight);
      $('.gmap').css('width', '100%' );
    }

    if($(window).width() < 768){
      var sWidth = $(window).width();
      $('.gmap').css('width', sWidth );
      $('#contact').css('height', '100%');
    }
});






});// End of document.ready
