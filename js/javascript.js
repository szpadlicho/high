$(document).ready(function() {
    $('a').click(function() {
        $('a').removeClass('active');
        $(this).addClass('active');
    });
    $('.left-menu-div-marka ul li').click(function() {
        $('.left-menu-div-marka ul li').removeClass('active');
        $(this).addClass('active');
    });
});

$(document).ready(function() {
    $(".marka").click(function() {
       window.location = 'offer.php#sq0';
    });
    $(".oferta").click(function() {
       window.location = 'offer.php#sq1';
    });
    $(".sklep").click(function() {
       window.open('http://www.twojewlosy.pl/search.php?text=high+hair', '_blank');
    });
    $(".kontakt").click(function() {
       window.location = 'contact.php';
    });
    $(".logo").click(function() {
       window.location = 'index.php';
    });
});

var both = function () {
    // debugger
    var htt = $(window).height();
    var wtt = $(window).width();
    var allwtt = (wtt * 6);
    $('#count_r2').text(allwtt+'/'+wtt+'/'+htt);
    // setup
    $('.content-div, .product-square-big').css({'width': wtt+'px', 'height': htt+'px'});
    $('.place-holder-div').css({'width': allwtt+'px', 'height': htt+'px'});
    // rectangle for slider
    $('.rectangle-div').css('height',(htt/1.5)+'px');
    $('.rectangle-div-bg').css('height',(htt/1.5)+'px');
    $('.rectangle-div-text').css('height',(htt/1.5)+'px');
    // animation rectangle for slider
    $('.rectangle-div').hover(function(){
        $(this).next('.rectangle-div-bg').stop(true, false).animate({
                height:(htt/4.5)+'px'
            }, function() {
                $('.rectangle-div').css({'cursor':'pointer'});
        });
    }, function() {
        $(this).next('.rectangle-div-bg').stop(true, false).animate({
                height:(htt/1.5)+'px'
            }, function() {
                $('.rectangle-div').css({'cursor':'default'});
            });
    });
    var hhh = $( '#content0-11' ).height();
    var fff = parseInt($("body").css('font-size'));
    var hfh = hhh+(fff*14);
    //var hfh = (300);
    //$( '#content0-12 , #content0-13' ).text(hhh+'top'+ hfh +'px' + fff);
    $( '#content0-12 , #content0-13' ).css('top', hfh+'px');
};
$(document).ready(both);
$(window).resize(both);
// Head animation
$(document).ready(function($) {
    $( '.left-menu-div a, .top-menu-div a' ).click(function() {
        // Head
        $( ".content-head div" ).stop();
        $( ".content-head div" ).css({'left':'-100%'});
        $( ".content-head div" ).delay(350).animate({
            left: 0
        }, 500, function() {
            // Animation complete.
        });
        // // Content
        // $( ".content-text div" ).stop();
        // $( ".content-text div" ).css({'right':'-100%'});
        // $( ".content-text div" ).animate({
            // right: 0
        // }, 500,  function() {
            // // Animation complete.
        // });
    });
});