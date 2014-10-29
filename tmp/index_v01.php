<!DOCKTYPE HTML>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>HIGH HAIR V4</title>        
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v4.css" />
        <link type="text/css" rel="stylesheet" href="css/top_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/slider_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/bg.css" />
        <link type="text/css" rel="stylesheet" href="css/lightbox.css" />
        <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/lightbox.js" ></script>
        <script type="text/javascript" >
            // Auto Scroll To Next Div
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
            // Anchor 
            function scrollToAnchor(aid){
                var aTag = $("a[name='"+ aid +"']");
                $('html,body').animate({scrollTop: aTag.offset().top},1000);
            }
            $(document).ready(function() {
                $(".anch0").click(function() {
                   scrollToAnchor('anch0');
                });
                $(".anch1").click(function() {
                   scrollToAnchor('anch1');
                });
                $(".anch2").click(function() {
                   scrollToAnchor('anch2');
                });
                $(".anch3").click(function() {
                   scrollToAnchor('anch3');
                });
                $(".anch4").click(function() {
                   scrollToAnchor('anch4');
                });
                $(".anch5").click(function() {
                   scrollToAnchor('anch5');
                });
                $(".anch6").click(function() {
                   scrollToAnchor('anch6');
                });
                $(".anch").click(function() {
                   //window.location = 'http://www.twojewlosy.pl/search.php?text=high+hair';
                   window.open('http://www.twojewlosy.pl/search.php?text=high+hair', '_blank');
                });
                <?php if (isset($_POST['send_l'])) { ?>
                    scrollToAnchor('anch6'); 
                <?php } ?>
            });
        </script>
        <script type="text/javascript" >
            $(document).scroll(function () {
                var htt = $(window).height();
                var y = $(this).scrollTop();
                if (y > 80) {
                    $('.top-menu-div').fadeIn();
                    $('.cb-slideshow li span , .cb-slideshow li div').css('-webkit-animation-play-state','paused');
                    $('.cb-slideshow li span , .cb-slideshow li div').css('-moz-animation-play-state','paused');
                    $('.cb-slideshow li span , .cb-slideshow li div').css('-ms-animation-play-state','paused');
                    $('.cb-slideshow li span , .cb-slideshow li div').css('animation-play-state','paused');
                    //$('.rectangle-div , .rectangle-div-bg , .rectangle-div-text').fadeOut();
                } else {
                    $('.top-menu-div').fadeOut();
                    $('.cb-slideshow li span , .cb-slideshow li div').css('-webkit-animation-play-state','running');
                    $('.cb-slideshow li span , .cb-slideshow li div').css('-moz-animation-play-state','running');
                    $('.cb-slideshow li span , .cb-slideshow li div').css('-ms-animation-play-state', 'running');
                    $('.cb-slideshow li span , .cb-slideshow li div').css('animation-play-state', 'running');
                    //$('.rectangle-div , .rectangle-div-bg , .rectangle-div-text').fadeIn();
                }
                if (y > 160) {
                    //$('.top-menu-div').fadeIn();
                    $('.rectangle-div , .rectangle-div-bg , .rectangle-div-text').fadeOut();
                } else {
                    //$('.top-menu-div').fadeOut();
                    $('.rectangle-div-bg , .rectangle-div-text').fadeIn();
                    $('.rectangle-div').delay( 400 ).fadeIn();//dopracować
                }
                // if (y > (htt * 0.9) && y < (htt * 1.4)) {
                    // $('.square1').fadeIn();
                // } else {
                    // $('.square1').fadeOut();
                // }
                // if (y > (htt * 1.9) && y < (htt * 2.4)) {
                    // $('.square2').fadeIn();
                // } else {
                    // $('.square2').fadeOut();
                // }
                // if (y > (htt * 2.9) && y < (htt * 3.4)) {
                    // $('.square3').fadeIn();
                // } else {
                    // $('.square3').fadeOut();
                // }
                // if (y > (htt * 3.9) && y < (htt * 4.4)) {
                    // $('.square4').fadeIn();
                // } else {
                    // $('.square4').fadeOut();
                // }
                // if (y > (htt * 4.4)) {
                    // $('.square5').fadeIn();
                // } else {
                    // $('.square5').fadeOut();
                // }
            });
            $(window).scroll(function() {
                // Debugger
                var fmx = $(this).scrollTop();
                var fmy = $(this).scrollLeft();
                document.getElementById('count_l2').innerHTML='X = '+fmx+'<br />Y = '+fmy;
            });
            $(window).scroll(function() {
                // background scroll
                var pos1=($(this).scrollTop()/2.5);
                var pos0=(416+pos1);
                $('.place-holder-div').css('background-position', 'center -'+pos0+'px');
            });
            var both = function () {
                // This is debugger and size set for elements
                var htt = $(window).height();
                var wtt = $(window).width();//debugger
                var allhtt = (htt * 6);
                $('body').css('height', allhtt+'px' );
                $('#count_r2').text(allhtt+'/'+wtt+'/'+htt);//debugger
                $('.slider,.cat1,.cat2,.cat3,.cat4,.cat5,.footer').css({'width':'100%','height': htt+'px'});
                // This is rectangle in slider
                $('.rectangle-div').css('height',(htt/1.5)+'px');
                $('.rectangle-div-bg').css('height',(htt/1.5)+'px');
                $('.rectangle-div-text').css('height',(htt/1.5)+'px');
                //animation
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
            };
            $(document).ready(both);
            $(window).resize(both);
            $(document).ready(function() {
                $('a').click(function() {
                    $('a').removeClass('active');
                    $(this).addClass('active');
                });
            });
        </script>
        <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script type="text/javascript">
            $(function() {
                //$( "#sq1" ).tabs();
                $( "#sq2" ).tabs();
                //$( "#sq3" ).tabs();
                //$( "#sq4" ).tabs();
                //$( "#sq5" ).tabs();
                //$( "#sq6" ).tabs();
            });
        </script>
        <script type="text/javascript">
            
            function fooMy(nr) {
                //var nr = 0;
                //console.log(nr);
                var prev = $('.scroll').parent().find('.product-img').eq(nr - 1);
                var now = $('.scroll').parent().find('.product-img').eq(nr);
                var next = $('.scroll').parent().find('.product-img').eq(nr + 1);
                //alert(prev.attr('src'));
                //alert(now.attr('src'));
                //alert(next.attr('src'));
                $('.product-thumb.1-'+nr).attr('src', prev.attr("src"));
                $('.product-thumb.2-'+nr).attr('src', now.attr("src"));
                $('.product-thumb.3-'+nr).attr('src', next.attr("src"));
            };
            $(document).ready(function($) {
                var numItems = $('.content-round').length;
                //alert(numItems)
                for ( var i = 0; i < numItems; i++ ) {
                    fooMy(i);
                };
            });
            //----------------------
            function scrollToAnchorSecond(imgSrc){
                var imgSrc = $("img[src='"+ imgSrc +"']");
                //$('html,body').animate({scrollTop: imgSrc.offset().top - 200},1000);
                $('html,body').animate({scrollTop: imgSrc.offset().top},1000);
            }
            $(document).ready(function(){
                $('.product-thumb').click(function(){
                   var imgSrc = $(this).attr('src');
                   //$('#gallery').scrollTo( $("img[src='" + relation + "']"), 800);
                   scrollToAnchorSecond(imgSrc);
                });
            });
            /**/
        </script>
        <script src="js/jquery.smoothwheel.js"></script>
        <?php include_once 'browser.php'; ?>
        <?php if ($browser == 'Opera' OR $browser == 'Chrome' OR $browser == 'Safari' OR $browser == 'MSIE') { ?>
            <script>
                $(document).ready(function(){
                    $('html,body').smoothWheel()
                });
            </script> <!--Meble fryzjerskie - hurtownia. Najwięksi polscy producenci Panda , Ayala. W ofercie posiadamy fotele, myjnie, konsolety, recepcje, poczekalnie, i wiele innych.-->
        <?php } ?>
        <style type="text/css"></style>
        <!--<link type="text/css" rel="stylesheet" href="css/bg-slider.css" />-->
    </head>
    <body>       
        <div class="top-menu-div">
            <ul>
                <li><a class="anch1">Marka</a></li>
                <li><a>Oferta</a>
                    <ul>
                        <li><a class="anch2">Care Line</a></li>
                        <li><a class="anch3">Jednorazowe</a></li>
                        <li><a class="anch4">Akcesoria</a></li>
                        <li><a class="anch5">Wyposażenie</a></li>
                    </ul>
                </li>
                <li><img class="anch0" src="images/LogoHigh.png" /></li>
                <li><a class="anch">Sklep</a></li>
                <li><a class="anch6">Kontakt</a>
                    <ul>
                        <li id="count_l2"></li>
                        <li id="count_r2"> </li>
                    </ul>
                </li>
            <ul>
        </div>        
        
        <a name="anch0"></a>
        <div class="scroll slider">
            <div class="rectangle-div anch1"></div>
            <div class="rectangle-div-bg"></div>
            <div class="rectangle-div-text"><h2>Marka</h2></div>
            <div class="rectangle-div anch2"></div>
            <div class="rectangle-div-bg"></div>
            <div class="rectangle-div-text"><h2>Oferta</h2></div>
            <div class="rectangle-div anch"></div>
            <div class="rectangle-div-bg"></div>
            <div class="rectangle-div-text"><h2>Sklep</h2></div>
            <div class="rectangle-div anch6"></div>
            <div class="rectangle-div-bg"></div>
            <div class="rectangle-div-text"><h2>Kontakt</h2></div>
            
            <ul class="cb-slideshow">
                <li><span class="image-bg">Image 01</span><div class="title-bg"><h3>High Hair <br />Wita</h3></div></li>
                <li><span class="image-bg">Image 02</span><div class="title-bg"><h3>Artykuły Jednorazowe</h3></div></li>
                <li><span class="image-bg">Image 03</span><div class="title-bg"><h3>Care Line</h3></div></li>
                <li><span class="image-bg">Image 04</span><div class="title-bg"><h3>Akcesoria</h3></div></li>
                <li><span class="image-bg">Image 05</span><div class="title-bg"><h3>Wyposażenie</h3></div></li>
                <li><span class="image-bg">Image 06</span><div class="title-bg"><h3>Jakość</h3></div></li>
            </ul>
            
            <!--
            <div class="bg-slider-overflow">
                <ul class="bg-slider">
                    <li><img src="images/bg/1.jpg" /></li>
                    <li><img src="images/bg/2.jpg" /></li>
                    <li><img src="images/bg/3.jpg" /></li>
                    <li><img src="images/bg/4.jpg" /></li>
                    <li><img src="images/bg/5.jpg" /></li>
                    <li><img src="images/bg/6.jpg" /></li>
                </ul>
            </div>
            -->
        </div>
        
        
        <div class="place-holder-div">
        <div class="break" style="background:white; width:100%; height:4em; text-align:center; font-weight: bold; text-transform:uppercase;"><h1 style="line-height:2em;">High Hair - razem kreujemy piękno</h1></div>
        
            <a name="anch1"></a>
            <div class="scroll cat1">
                <div id="sq1" class="product-square-big square1">
                    <div class="left-menu-div">
                        <ul><img src="images/jedn.png" /><span>Marka</span>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch2"></a>
            <div class="scroll cat2">
                <div id="sq2" class="product-square-big square2">
                    <div class="left-menu-div">
                        <ul><img src="images/care.png" /><span>Care Line</span>
                            <li><a href="#sq2-1">Repair Mask</a></li>
                            <li><a href="#sq2-2">Banana Mask</a></li>
                            <li><a href="#sq2-3">Argan Oil</a></li>
                        </ul>
                        <div class="menu-links">
                            <a class="anch2"></a>
                            <a class="anch3"><img class="links-img" src="images/jedn.png" />Jednorazowe</a>
                            <a class="anch4"><img class="links-img" src="images/akces.png" />Akcesoria</a>
                            <a class="anch5"><img class="links-img" src="images/wypos.png" />Wposażenie</a>
                        </div>
                    </div>
                    <div class="product-content-big">
                        <div id="sq2-1" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t4.jpg" />
                            </div>
                            <div class="content-round">

                                <img class="product-thumb 1-0" src="images/background/t2.jpg" />
                                <img class="product-thumb 2-0" src="images/background/t2.jpg" />
                                <img class="product-thumb 3-0" src="images/background/t2.jpg" />

                            </div>
                            <div class="content-text">
                                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                            </div>
                        </div>
                        <div id="sq2-2" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t3.jpg" />
                            </div>
                            <div class="content-round">
                               
                                <img class="product-thumb 1-1" src="images/background/t4.jpg" />
                                <img class="product-thumb 2-1" src="images/background/t4.jpg" />
                                <img class="product-thumb 3-1" src="images/background/t4.jpg" />
                               
                            </div>
                            <div class="content-text">
                                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                            </div>
                        </div>
                        <div id="sq2-3" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t2.jpg" />
                            </div>
                            <div class="content-round">
                               
                                <img class="product-thumb 1-2" src="images/background/t3.jpg" />
                                <img class="product-thumb 2-2" src="images/background/t3.jpg" />
                                <img class="product-thumb 3-2" src="images/background/t3.jpg" />
                               
                            </div>
                            <div class="content-text">
                                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                            </div>
                        </div>
                    </div>             
                </div>
            </div>
            
            <a name="anch3"></a>
            <div class="scroll cat3">
                <div id="sq3" class="product-square-big square3">
                    <div class="left-menu-div">
                        <ul><img src="images/jedn.png" /><span>Jednorazowe</span>
                            <li><a>Folia</a>
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
                            <li><a>Dla kosmetyczek</a>
                                <ul>
                                    <li><a href="#">Stringi</a></li>
                                    <li><a href="#">Japonki</a></li>
                                    <li><a href="#">Waciki do henny</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-links">
                            <a class="anch2"><img class="links-img" src="images/care.png" />Care line</a>
                            <a class="anch3"></a>
                            <a class="anch4"><img class="links-img" src="images/akces.png" />Akcesoria</a>
                            <a class="anch5"><img class="links-img" src="images/wypos.png" />Wposażenie</a>
                        </div>
                    </div>                   
                </div>
            </div>
            
            <a name="anch4"></a>
            <div class="scroll cat4">
                <div id="sq4" class="product-square-big square4">
                    <div class="left-menu-div">
                        <ul><img src="images/akces.png" /><span>Akcesoria</span>
                            <li><a href="#">Wsuwki</a></li>
                            <li><a href="#">Kokówki</a></li>
                            <li><a href="#">Peleryny fryzjerskie</a></li>
                        </ul>
                        <div class="menu-links">
                            <a class="anch2"><img class="links-img" src="images/care.png" />Care line</a>
                            <a class="anch3"><img class="links-img" src="images/jedn.png" />Jednorazowe</a>
                            <a class="anch4"></a>
                            <a class="anch5"><img class="links-img" src="images/wypos.png" />Wposażenie</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <a name="anch5"></a>
            <div class="scroll cat5">
                <div id="sq5" class="product-square-big square5">
                    <div class="left-menu-div">
                        <ul><img src="images/wypos.png" /><span>Wyposażenie</span>
                            <li><a href="#">Podnóżki</a>
                                <ul>
                                    <li><a href="#">Wolno stojący</a></li>
                                    <li><a href="#">Przykręcany</a></li>
                                    <li><a href="#">Drabinka</a></li>
                                    <li><a href="#">Tuk</a></li>
                                </ul>
                            </li>
                            <li><a>Uchwyty na suszarkę</a>
                                <ul>
                                    <li><a href="#">Jake</a></li>
                                    <li><a href="#">Zig Zag</a></li>
                                </ul>
                            </li>
                            <li><a>Uchwyty na ręcznik</a>
                                <ul>
                                    <li><a href="#">Wiszący</a></li>
                                    <li><a href="#">Wolno stojący</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-links">
                            <a class="anch2"><img class="links-img" src="images/care.png" />Care line</a>
                            <a class="anch3"><img class="links-img" src="images/jedn.png" />Jednorazowe</a>
                            <a class="anch4"><img class="links-img" src="images/akces.png" />Akcesoria</a>
                            <a class="anch5"></a>
                        </div>
                    </div> 
                </div>
            </div>

            <a name="anch6"></a>
            <div class="scroll footer">
                <div id="sq6" class="product-square-big square6">
                    <!--
                    <div class="left-menu-div">
                        <ul><img src="images/jedn.png" /><span>Kontakt</span>
 
                        </ul>
                    </div>
                    -->
                    <div class="footer-div">
                        <div class="contact-div">
                            <?php include_once 'email_check.php'; ?>
                        </div>
                        <div class="link-div">
                            <div>
                            <!--
                            <strong>Sklep internetowy:</strong><br />
                            <a title="www.meble24h.com.pl" target="_blank" href="http://www.meble24h.com.pl"> www.meble24h.com.pl </a><br />
                            -->
                            <a href="http://www.twojewlosy.pl" target="_blank"><img src="images/care.png" /><br />TwojeWłosy</a>
                            <a href="http://www.meble24h.com.pl" target="_blank"><img src="images/care.png" /><br />Meble24h</a>
                            <a href="http://www.hihair.pl" target="_blank"><img src="images/care.png" /><br />HiHair</a>
                            </div>
                            <div>
                            <a href="http://www.meblefryzjerskie.info" target="_blank"><img src="images/care.png" /><br />MebleFryzjerskie</a>
                            <a href="http://www.facebook.pl" target="_blank"><img src="images/care.png" /><br />Facebook 1</a>
                            <a href="http://www.facebook.pl" target="_blank"><img src="images/care.png" /><br />Facebook 2</a>
                            </div>
                        </div>
                        <div class="map-div">
                            <?php include_once 'map.php'; ?>
                        </div>
                        <div class="address-div">
                            <strong>Doradcy:</strong><br />
                            513 187 096<br />
                            503 901 016<br />

                            <strong>Adres e-mail:</strong><br />
                            <a href="mailto:info@meble24h.com.pl">info@meble24h.com.pl</a><br />

                            <strong>Sklep stacjonarny:</strong><br />
                            hurtownia Hi Hair<br />
                            Nowowiejskiego 5C <br />
                            Częstochowa <br />
                            Polska <br />
                            tel. 34 314 48 96 <br />
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="light-box-container"></div><!-- Lightbox -->
    </body>
</html>