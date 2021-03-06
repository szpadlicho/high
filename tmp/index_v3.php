<!DOCKTYPE HTML>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>HIGH HAIR V3</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v3.css" />
        <link type="text/css" rel="stylesheet" href="css/top_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu.css" />
        <link title="deafult" rel="stylesheet" type="text/css" href="css/bg.css" media="screen" />
        <!--<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
        <script type="text/javascript" >
            // function scrollToAnchor(aid){
                // var aTag = $("a[name='"+ aid +"']");
                // $('html,body').animate({scrollTop: aTag.offset().top},'slow');
            // }
            // $("#link").click(function() {
               // scrollToAnchor('id1');
            // });
            // debuger function
            $(window).scroll(function() {
                var fmx = $(this).scrollTop();
                var fmy = $(this).scrollLeft();
                document.getElementById('count_l2').innerHTML='X = '+fmx+'<br />Y = '+fmy;
            });
            // scroll function
            $(document).ready(function () {
                var divs = $('.scroll');
                var dir = 'up'; // wheel scroll direction
                var div = 0; // current div
                $(document.body).on('DOMMouseScroll mousewheel', function (e) {
                    if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
                        dir = 'down';
                    } else {
                        dir = 'up';
                    }
                    // find currently visible div :
                    div = -1;
                    divs.each(function(i){
                        if (div < 0 && ($(this).offset().top >= $(window).scrollTop())) {
                            div = i;
                        }
                    });
                    if (dir == 'up' && div > 0) {
                        div--;
                    }
                    if (dir == 'down' && div < divs.length) {
                        div++;
                    }
                    //console.log(div, dir, divs.length);
                    $('html,body').stop().animate({
                        scrollTop: divs.eq(div).offset().top
                    }, 500);
                    return false;
                });
                $(window).resize(function () {
                    $('html,body').scrollTop(divs.eq(div).offset().top);
                });
            });            
        </script>
        <script type="text/javascript" >
            $(document).ready(function () {
                var htt = $(window).height();
                var wtt = $(window).width();//debuger
                var allhtt = (htt * 6);
                $('body').css('height', allhtt+'px' );
                $('#count_r2').text(allhtt+'/'+wtt+'/'+htt);//debuger
                $('.slider,.cat1,.cat2,.cat3,.cat4,.cat5,.footer').css({'width':'100%','height': htt+'px'});
            });
            $(window).resize(function () {
                var htt = $(window).height();
                var wtt = $(window).width();//debuger
                var allhtt = (htt * 6);
                $('body').css('height', allhtt+'px' );
                $('#count_r2').text(allhtt+'/'+wtt+'/'+htt);//debuger
                $('.slider,.cat1,.cat2,.cat3,.cat4,.cat5,.footer').css({'width':'100%','height': htt+'px'});
            });
            $(document).scroll(function () {
                var htt = ($(window).height() - 20);
                var y = $(this).scrollTop();
                if (y > 80) {
                    $('.top-menu-div').fadeIn();
                } else {
                    $('.top-menu-div').fadeOut();
                }
                if (y > (htt) && y < (htt * 1.1)) {
                    $('.square1').fadeIn();
                } else {
                    $('.square1').fadeOut();
                }
                if (y > (htt * 2) && y < (htt * 2.1)) {
                    $('.square2').fadeIn();
                } else {
                    $('.square2').fadeOut();
                }
                if (y > (htt * 3) && y < (htt * 3.2)) {
                    $('.square3').fadeIn();
                } else {
                    $('.square3').fadeOut();
                }
                if (y > (htt * 4) && y < (htt * 4.2)) {
                    $('.square4').fadeIn();
                } else {
                    $('.square4').fadeOut();
                }
                if (y > (htt * 4.5)) {
                    $('.square5').fadeIn();
                } else {
                    $('.square5').fadeOut();
                }
            });
        </script>
        <style type="text/css">
            /*
            .slider{width:100%; height: 16.7%}
            .cat1{width:100%; height: 16.7%}
            .cat2{width:100%; height: 16.7%}
            .cat3{width:100%; height: 16.7%}
            .cat4{width:100%; height: 16.7%}
            .cat5{width:100%; height: 16.7%}
            .footer{width:100%; height: 16.6%}
            */
        </style>
    </head>
    <body>       
        <div class="top-menu-div">
            <a href="#anch1">Start</a>
            <a href="#anch2">Jednorazowe</a>
            <a href="#anch3">Wyposażenie</a>
            <img src="images/LogoHigh.png" />
            <a href="#anch4">Care Line</a>
            <a href="#anch5">Akcesoria</a>
            <a href="#anch6">Kontakt</a>

            <div id="count_l2" class="debuger"></div>
            <div id="count_r2" class="debuger"></div>

        </div>        
        <div class="place-holder-div">
            <a name="anch1"></a>
            <div class="scroll slider">
                <ul class="cb-slideshow">
                    <li><span class="image-bg">Image 01</span><div class="title-bg"><h3>WELCOME</h3></div></li>
                    <li><span class="image-bg">Image 02</span><div class="title-bg"><h3>TO MY</h3></div></li>
                    <li><span class="image-bg">Image 03</span><div class="title-bg"><h3>GREAT</h3></div></li>
                    <li><span class="image-bg">Image 04</span><div class="title-bg"><h3>WORLD</h3></div></li>
                    <li><span class="image-bg">Image 05</span><div class="title-bg"><h3>OF</h3></div></li>
                    <li><span class="image-bg">Image 06</span><div class="title-bg"><h3>PROGRAMMING</h3></div></li>
                </ul>
            </div>
            
            <a name="anch2"></a>
            <div class="scroll cat1">
                Jednorazowe
                <div class="product-square-big square1">
                    <div class="left-menu-div">
                        <ul><img src="images/jedn.png" /><span>Jednorazowe</span>
                            <li><a href="#">Folia</a>
                                <ul>
                                    <li><a href="#">Aluminiowa</a></li>
                                    <li><a href="#">Ochronna</a></li>
                                    <li><a href="#">i jakaś</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Ręcznik</a></li>
                            <li><a href="#">Rękawiczki</a></li>
                            <li><a href="#">Pelerynki</a></li>
                            <li><a href="#">Waciki</a></li>
                            <li><a href="#">Kołnierze na puszkę</a></li>
                            <li><a href="#">Prześcieradła i podkłady</a></li>
                            <li><a href="#">Dla kosmetyczek</a>
                                <ul>
                                    <li><a href="#">Stringi</a></li>
                                    <li><a href="#">Japonki</a></li>
                                    <li><a href="#">Waciki do henny</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch3"></a>
            <div class="scroll cat2">
                Chromowane
                <div class="product-square-big square2">
                    <div class="left-menu-div">
                        <ul><img src="images/wypos.png" /><span>Wposażenie</span>
                            <li><a href="#">Podnóżki</a>
                                <ul>
                                    <li><a href="#">Wolno stojący</a></li>
                                    <li><a href="#">Przykręcany</a></li>
                                    <li><a href="#">Drabinka</a></li>
                                    <li><a href="#">Tuk</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Uchwyty na suszarkę</a>
                                <ul>
                                    <li><a href="#">Jake</a></li>
                                    <li><a href="#">Zig Zag</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Uchwyty na ręcznik</a>
                                <ul>
                                    <li><a href="#">Wiszący</a></li>
                                    <li><a href="#">Wolno stojący</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch4"></a>
            <div class="scroll cat3">
                CareLine
                <div class="product-square-big square3">
                    <div class="left-menu-div">
                        <ul><img src="images/care.png" /><span>Care Line</span>
                            <li><a href="#">Repair Mask</a></li>
                            <li><a href="#">Banana Mask</a></li>
                            <li><a href="#">Argan Oil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch5"></a>
            <div class="scroll cat4">
                Akcesoria
                <div class="product-square-big square4">
                    <div class="left-menu-div">
                        <ul><img src="images/akces.png" /><span>Akcesoria</span>
                            <li><a href="#">Wsuwki</a></li>
                            <li><a href="#">Kokówki</a></li>
                            <li><a href="#">Peleryny fryzjerskie</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch6"></a>
            <div class="scroll footer">
                Hello I'm Footer
                <div class="product-square-big square5"></div>
            </div>            
        </div>
    </body>
</html>