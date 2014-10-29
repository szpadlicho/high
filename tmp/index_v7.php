<!DOCTYPE html>
<html>
    <head>
        <title>HIGH HAIR OFERTA</title>
        <meta charset="UTF-8"/>
        
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/slider_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/bg-slider.css" />
        <link type="text/css" rel="stylesheet" href="css/google_map.css" />
        <link type="text/css" rel="stylesheet" href="css/contact.css" />
        <!--*-->
        <link type="text/css" rel="stylesheet" href="css/top_menu_v7.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu_v7.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v7.css" />
        <!-- The JavaScript -->
        <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/scrollleft.js" ></script>
        <script type="text/javascript" src="js/javascript.js" ></script>
        <script type="text/javascript">
            $(function() {
                $('.top-menu-div ul li a').bind('click',function(event){
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
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                //$('.content-text').hide();
                $('.left-menu-div ul li a').click(function() {
                    //$('sq2-2').hide();
                    //$('.content-text').show('explode');
                });
            });
            var both = function () {
                // This is debugger and size set for elements
                var htt = $(window).height();
                var wtt = $(window).width();//debugger
                var allwtt = (wtt * 5);
                //$('body').css('height', allhtt+'px' );
                $('#count_r2').text(allwtt+'/'+wtt+'/'+htt);//debugger
                $('.content-div, .product-square-big').css({'width': wtt+'px', 'height': htt+'px'});
                $('.place-holder-div').css({'width': allwtt+'px', 'height': htt+'px'});
            };
            $(document).ready(both);
            $(window).resize(both);
            $(document).ready(function() {
                $('a').click(function() {
                    $('a').removeClass('active');
                    $(this).addClass('active');
                });
            });
            $(document).ready(function() {
                $(".logo").click(function() {
                   window.location = 'http://localhost';
                });
            });
        </script>
    </head>
    <body>
        <div class="top-menu-div">
            <ul>
                <li><a class="" href="#sq1">Marka</a></li>
                <li><a href="#sq2">Oferta</a>
                    <ul>
                        <li><a class="" href="#sq2">Care Line</a></li>
                        <li><a class="" href="#sq3">Jednorazowe</a></li>
                        <li><a class="" href="#sq4">Akcesoria</a></li>
                        <li><a class="" href="#sq5">Wyposażenie</a></li>
                    </ul>
                </li>
                <li><img class="logo" src="images/LogoHigh.png" /></li>
                <li><a class="" href="http://www.twojewlosy.pl" target="_blank">Sklep</a></li>
                <li><a class="" href="contact.php">Kontakt</a>
                    <ul>
                        <li id="count_l2"></li>
                        <li id="count_r2"></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="place-holder-div">
            <!--start category-->
            <div id="sq1" class="product-square-big cat1">
                <!--one-->
                <script type="text/javascript">
                    $(document).ready(function($) {
                        $('.content-div').css( 'display' , 'none' );
                        $('#content1-1').css( 'display' , 'block' );
                    });
                </script>
                <div id="content1-1" class="content-div">
                    <div class="content-text">
                        <p>Marka</p>
                    </div>
                </div>     
            </div>
            
            <div id="sq2" class="product-square-big cat2">
                <!--two-->
                <script type="text/javascript">
                    $(document).ready(function($) {
                        //$('.content-div').css( 'display' , 'none' );
                        $('#content2-1').css( 'display' , 'block' );
                        $('a[id^="trigger2-"]').click(function(){
                            $('[id^="content2-"]').hide(); // hide the other divs
                            $('#content2-'+this.id.slice(9)).show();
                        });
                    });
                </script>
                <div class="left-menu-div">
                    <ul><img src="images/care.png" /><span>Care Line</span>
                        <li><a id="trigger2-1">Repair Mask</a></li>
                        <li><a id="trigger2-2">Banana Mask</a></li>
                        <li><a id="trigger2-3">Argan Oil</a></li>
                    </ul>
                </div>
                <div id="content2-1" class="content-div">
                    <div class="content-text">
                        <p>Repair Mask to produkt przeznaczony do suchych i zniszczonych włosów, które potrzebują natychmiastowej regeneracji.
                        <br />
                        Jej działanie opiera się na proteinach mleka, które są bogatym źródłem składników odżywczych - dzięki nim kosmyki stają się elastyczne, miękkie i błyszczące.
                        <br />
                        Maseczka skutecznie uzupełnienia braki w zewnętrznej strukturze włosa, ale także silnie nawilża go od środka. Polecamy ją szczególnie do włosów osłabionych zabiegami fryzjerskimi, głównie chemicznymi, takimi jak trwała ondulacja czy farbowanie.
                        <br />
                        Repair Mask jest lekka i nie obciąża włosów. Wręcz przeciwnie. Delikatna konsystencja sprawia, że nie spływa z włosów ułatwiając aplikację i wnikanie wgłąb włosa, a przyjemny zapach, jest czystą ucztą dla zmysłów.
                        <br />
                        Maska R to produkt do profesjonalnego użytku, który można stosować w domu. Polecamy zwłaszcza przy zabiegach z pielęgnicą.</p>
                    </div>
                </div>
                <div id="content2-2" class="content-div">
                    <div class="content-text">
                        <p>Maska o najnowszej formule pozwalającej każdemu na intensywną regenerację i wygładzenie zniszczonych włosów w domu. Ma przyjemny, bananowym zapach .
                        <br />
                        <strong>Skąd się wzięła?</strong>
                        <br />
                        Włoscy specjaliści ulepszyli znaną maskę marki High Hair (Repair Mask), by jeszcze lepiej zaspokoić Wasze wymagania i zająć się zniszczonymi włosami.
                        <br />
                        <strong>Dlaczego jest wyjątkowa?</strong>
                        <br />
                        Najnowsza formuła pozwala każdemu na intensywną regenerację i wygładzenie zniszczonych włosów. Zabezpiecza je także przed uszkodzeniami mechanicznymi. Ponadto maska ma BANANOWY zapach, który pokochają wszyscy miłośnicy wakacji! Banana Mask to przede wszystkim proteiny jedwabiu, migdałów i pszenicy - idealne zestawienie składników, które odbudowują suche kosmyki i uzupełniają braki w zewnętrznej warstwie włosa. Nowością jest tak zwany Glossing System zapewniający wygładzenie i intensywne nabłyszczenie włosów pozbawionych blasku. Proteiny pszenicy przenikają głęboko w strukturę włosa, dostarczając mu niezbędnych składników i wzmacniając go od środka. Migdały znane są ze swoich właściwości nawilżających i zmiękczających, dlatego odpowiedają za sypkość i odpowiednie nawilżenie kosmyków. Proteiny jedwabiu natomiast uelastycznieniają włos i wygładzają jego powierzchnię sprawiając, że nabiera on zdrowego wyglądu i sprężystości.
                        <br />
                        <strong>Dla jakich włosów?</strong>
                        <br />
                        Maseczka przeznaczona jest do włosów suchych, szorstkich i zniszczonych, zwłaszcza zabiegami chemicznymi, takimi jak farbowanie, trwała ondulacja itp. Ze względu na swoje właściwości wygładzające i nabłyszczające idealnie sprawdzi się również na włosach matowych, z predyspozycjami do puszenia, nad którymi ciężko zapanować. Banana Mask to produkt w pełni profesjonalny, dlatego polecamy go nie tylko do użytku domowego, ale szczególnie do salonów fryzjerskich.</p>
                    </div>
                </div>
                <div id="content2-3" class="content-div">
                    <div class="content-text">
                        <p>Olejek arganowy to cenny dar natury pozyskiwany z owoców arganowca – długowiecznego drzewa występującego w pustynnych okolicach południowo- zachodniego Maroka, zwany jest również „płynnym złotem Maroka”. Drzewa arganowe są wiecznie zielone i potrafią żyć nawet 400 lat. Na pierwsze owoce drzewa trzeba jednak poczekać około 50 lat. Owoce drzewa arganowego przypominają zielone oliwki, jednak same są niejadalne. W celach kosmetycznych i zdrowotnych wykorzystuje się jedynie pestkę, z której tłoczy się cenny olej. Tradycja marokańska nakazuje, by rytuałem tym zajmowały się wyłącznie kobiety.
                        <br />
                        idealny jest do wszystkich rodzajów włosów,
                        ma silne działanie regenerujące,
                        odżywia, wzmacnia włosy,
                        chroni włosy przed agresywnym działaniem słońca i wiatru,
                        chroni kolor,
                        nadaje włosom połysk i miękkość,
                        chroni przed przedwczesnym starzeniem się włosów, jest tzw. „eliksirem młodości”.
                        <br />
                        Argan Oil fantastycznie odżywia włosy i sprawia, że są mocniejsze, grubsze i lśniące. Aplikowany na końcówki zapobiega rozdwajaniu, wmasowywany w skórę głowy poprawia żywotność i stan włosów.</p>
                    </div>
                </div>       
            </div>
            
            <div id="sq3" class="product-square-big cat3">
                <!--two-->
                <script type="text/javascript">
                    $(document).ready(function($) {
                        //$('.content-div').css( 'display' , 'none' );
                        $('#content3-1').css( 'display' , 'block' );
                        $('a[id^="trigger3-"]').click(function(){
                            $('[id^="content3-"]').hide(); // hide the other divs
                            $('#content3-'+this.id.slice(9)).show();
                        });
                    });
                </script>
                <div class="left-menu-div">
                    <ul><img src="images/jedn.png" /><span>Jednorazowe</span>
                        <li><a id="trigger3-1">Folia</a>
                            <ul>
                                <li><a id="trigger3-2">Aluminiowa</a></li>
                                <li><a id="trigger3-3">Ochronna</a></li>
                                <li><a id="trigger3-4">i jakaś</a></li>
                            </ul>
                        </li>
                        <li><a id="trigger3-5">Ręcznik</a></li>
                        <li><a id="trigger3-6">Rękawiczki</a></li>
                        <li><a id="trigger3-7">Pelerynki</a></li>
                        <li><a id="trigger3-8">Waciki</a></li>
                        <li><a id="trigger3-9">Kołnierze na puszkę</a></li>
                        <li><a id="trigger3-10">Prześcieradła i podkłady</a></li>
                        <li><a id="trigger3-11">Dla kosmetyczek</a>
                            <ul>
                                <li><a id="trigger3-12">Stringi</a></li>
                                <li><a id="trigger3-13">Japonki</a></li>
                                <li><a id="trigger3-14">Waciki do henny</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="content3-1" class="content-div">
                    <div class="content-text">
                        <p>1</p>
                    </div>
                </div>
                <div id="content3-2" class="content-div">
                    <div class="content-text">
                        <p>2</p>
                    </div>
                </div>
                <div id="content3-3" class="content-div">
                    <div class="content-text">
                        <p>3</p>
                    </div>
                </div>       
            </div>
            
            <div id="sq4" class="product-square-big cat4">
                <!--four-->
                <script type="text/javascript">
                    $(document).ready(function($) {
                        //$('.content-div').css( 'display' , 'none' );
                        $('#content4-1').css( 'display' , 'block' );
                        $('a[id^="trigger4-"]').click(function(){
                            $('[id^="content4-"]').hide(); // hide the other divs
                            $('#content4-'+this.id.slice(9)).show();
                        });
                    });
                </script>
                <div class="left-menu-div">
                    <ul><img src="images/akces.png" /><span>Akcesoria</span>
                        <li><a id="trigger4-1">Wsuwki</a></li>
                        <li><a id="trigger4-2">Kokówki</a></li>
                        <li><a id="trigger4-3">Peleryny fryzjerskie</a></li>
                    </ul>
                </div>
                <div id="content4-1" class="content-div">
                    <div class="content-text">
                        <p>1</p>
                    </div>
                </div>
                <div id="content4-2" class="content-div">
                    <div class="content-text">
                        <p>2</p>
                    </div>
                </div>
                <div id="content4-3" class="content-div">
                    <div class="content-text">
                        <p>3</p>
                    </div>
                </div>       
            </div>
            
            <div id="sq5" class="product-square-big cat5">
                <!--five-->
                <script type="text/javascript">
                    $(document).ready(function($) {
                        //$('.content-div').css( 'display' , 'none' );
                        $('#content5-1').css( 'display' , 'block' );
                        $('a[id^="trigger5-"]').click(function(){
                            $('[id^="content5-"]').hide(); // hide the other divs
                            $('#content5-'+this.id.slice(9)).show();
                        });
                    });
                </script>
                <div class="left-menu-div">
                    <ul><img src="images/wypos.png" /><span>Wyposażenie</span>
                        <li><a id="trigger5-1">Podnóżki</a>
                            <ul>
                                <li><a id="trigger5-2">Wolno stojący</a></li>
                                <li><a id="trigger5-3">Przykręcany</a></li>
                                <li><a id="trigger5-4">Drabinka</a></li>
                                <li><a id="trigger5-5">Tuk</a></li>
                            </ul>
                        </li>
                        <li><a id="trigger5-6">Uchwyty na suszarkę</a>
                            <ul>
                                <li><a id="trigger5-7">Jake</a></li>
                                <li><a id="trigger5-8">Zig Zag</a></li>
                            </ul>
                        </li>
                        <li><a id="trigger5-9">Uchwyty na ręcznik</a>
                            <ul>
                                <li><a id="trigger5-10">Wiszący</a></li>
                                <li><a id="trigger5-11">Wolno stojący</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="content5-1" class="content-div">
                    <div class="content-text">
                        <p>1</p>
                    </div>
                </div>
                <div id="content5-2" class="content-div">
                    <div class="content-text">
                        <p>2</p>
                    </div>
                </div>
                <div id="content5-3" class="content-div">
                    <div class="content-text">
                        <p>3</p>
                    </div>
                </div>
                <div id="content5-4" class="content-div">
                    <div class="content-text">
                        <p>4</p>
                    </div>
                </div>
                <div id="content5-5" class="content-div">
                    <div class="content-text">
                        <p>5</p>
                    </div>
                </div>
                <div id="content5-6" class="content-div">
                    <div class="content-text">
                        <p>6</p>
                    </div>
                </div>
            </div>
            <!--end category-->
        </div>
    </body>
</html>