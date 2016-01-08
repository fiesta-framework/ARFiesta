
// Mobile Navigation
$('.mobile-toggle').on('click', function() {
    if ($('.main-nav').hasClass('open-nav')) {
        $('.mobile-toggle span').removeClass('white-color');
        $('.main-nav').removeClass('open-nav');
        $('.masthead').removeClass('revealed');
            $('.menu-panel').stop().animate({
                                left: '-500px'
                                }, 500, function() {
                                // Animation complete.
                                });
    } else {
        $('.mobile-toggle span').addClass('white-color');
        $('.main-nav').addClass('open-nav');
        $('.masthead').addClass('revealed');
       $('.menu-panel').stop().animate({
                                left: 0
                                }, 500, function() {
                                // Animation complete.
                                });
    }
});




$('.mastwrap, .intro, .standard-header, .mastfoot').on('click', function() {
        $('.mobile-toggle span').removeClass('white-color');
        $('.main-nav').removeClass('open-nav');
        $('.masthead').removeClass('revealed');
            $('.menu-panel').stop().animate({
                                left: '-500px'
                                }, 500, function() {
                                // Animation complete.
                                });
})

    //Navigation Sub Menu Triggering
    $('.trigger-sub-nav').on('click', function() {
        $('.sub-nav').slideUp('fast');
        $(this).find('.sub-nav').slideDown('slow');
    })
    
