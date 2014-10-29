<!DOCKTYPE HTML>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>HIGH HAIR V4</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v4.css" />
        <link type="text/css" rel="stylesheet" href="css/top_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu.css" />
        <link title="deafult" rel="stylesheet" type="text/css" href="css/bg.css" media="screen" />
        <script type="text/javascript" >
            function scrollToAnchor(aid){
                var aTag = $("a[name='"+ aid +"']");
                $('html,body').animate({scrollTop: aTag.offset().top},1000);
            }
            $(document).ready(function() {
                $("#anch0").click(function() {
                   scrollToAnchor('anch0');
                });
                $("#anch1").click(function() {
                   scrollToAnchor('anch1');
                });
                $("#anch2").click(function() {
                   scrollToAnchor('anch2');
                });
                $("#anch3").click(function() {
                   scrollToAnchor('anch3');
                });
                $("#anch4").click(function() {
                   scrollToAnchor('anch4');
                });
                $("#anch5").click(function() {
                   scrollToAnchor('anch5');
                });
                $("#anch6").click(function() {
                   scrollToAnchor('anch6');
                });
            });          
            $(window).scroll(function() {
                var fmx = $(this).scrollTop();
                var fmy = $(this).scrollLeft();
                document.getElementById('count_l2').innerHTML='X = '+fmx+'<br />Y = '+fmy;
            });
            // $(document).ready(function () {
                // var divs = $('.scroll');
                // var dir = 'up'; // wheel scroll direction
                // var div = 0; // current div
                // $(document.body).on('DOMMouseScroll mousewheel', function (e) {
                    // if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) {
                        // dir = 'down';
                    // } else {
                        // dir = 'up';
                    // }
                    // // find currently visible div :
                    // div = -1;
                    // divs.each(function(i){
                        // if (div < 0 && ($(this).offset().top >= $(window).scrollTop())) {
                            // div = i;
                        // }
                    // });
                    // if (dir == 'up' && div > 0) {
                        // div--;
                    // }
                    // if (dir == 'down' && div < divs.length) {
                        // div++;
                    // }
                    // //console.log(div, dir, divs.length);
                    // $('html,body').stop().animate({
                        // scrollTop: divs.eq(div).offset().top
                    // }, 1200);
                    // return false;
                // });
                // $(window).resize(function () {
                    // $('html,body').scrollTop(divs.eq(div).offset().top);
                // });
            // });            
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
                var htt = $(window).height();
                var y = $(this).scrollTop();
                if (y > 80) {
                    $('.top-menu-div').fadeIn();
                } else {
                    $('.top-menu-div').fadeOut();
                }
                // if (y > (htt) && y < (htt * 1.1)) {
                    // $('.square1').fadeIn();
                // } else {
                    // $('.square1').fadeOut();
                // }
                // if (y > (htt * 2) && y < (htt * 2.1)) {
                    // $('.square2').fadeIn();
                // } else {
                    // $('.square2').fadeOut();
                // }
                // if (y > (htt * 3) && y < (htt * 3.1)) {
                    // $('.square3').fadeIn();
                // } else {
                    // $('.square3').fadeOut();
                // }
                // if (y > (htt * 4) && y < (htt * 4.1)) {
                    // $('.square4').fadeIn();
                // } else {
                    // $('.square4').fadeOut();
                // }
                // if (y > (htt * 4.5)) {
                    // $('.square5').fadeIn();
                // } else {
                    // $('.square5').fadeOut();
                // }
            });
            $(window).scroll(function() {
                // background scroll
                var pos1=($(this).scrollTop()/2);
                var pos0=(416+pos1);
                $('.place-holder-div').css('background-position', 'center -'+pos0+'px');
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
            <ul>
                <li><a id="anch1">Marka</a></li>
                <li><a>Oferta</a>
                    <ul>
                        <li><a id="anch2">Jednorazowe</a></li>
                        <li><a id="anch3">Wyposażenie</a></li>
                        <li><a id="anch4">Care Line</a></li>
                        <li><a id="anch5">Akcesoria</a></li>
                    </ul>
                </li>
                <li><img id="anch0" src="images/LogoHigh.png" /></li>
                <li><a id="anch">Sklep</a></li>
                <li><a id="anch6">Kontakt</a></li>
            <ul>
            <div id="count_l2" class="debuger"></div>
            <div id="count_r2" class="debuger"></div>
            
        </div>        
        <div class="place-holder-div">
            <a name="anch0"></a>
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
            
            <a name="anch1"></a>
            <div class="scroll cat1">
                Marka
                <div class="product-square-big square1">
                    <div class="left-menu-div">
                        <ul><img src="images/jedn.png" /><span>Marka</span>
 
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch2"></a>
            <div class="scroll cat2">
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
            <div class="scroll cat3">
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
            <div class="scroll cat4">
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
            <div class="scroll cat5">
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
                Footer
                <div class="product-square-big square5">
                    <div class="left-menu-div">
                        <ul><img src="images/jedn.png" /><span>Kontakt</span>
 
                        </ul>
                    </div>
                </div>
            </div>            
        </div>
    </body>
</html>