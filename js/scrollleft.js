$(function() {
    $('.top-menu-div ul li a , .menu-links a , .offer-a li a').bind('click',function(event){
        var $anchor = $(this);
        /*
        // if you want to use one of the easing effects:
        $('html, body').stop().animate({
            scrollLeft: $($anchor.attr('href')).offset().left
        }, 1500,'easeOutBounce');
        */
        // if you don't want to use one of the easing effects:
        $('html, body').stop().animate({
            scrollLeft: $($anchor.attr('href')).offset().left
        }, 250);
        event.preventDefault();
        location.hash = $anchor.attr('href');
    });
});