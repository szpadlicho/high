<!DOCTYPE html>
<html>
    <head>
        <title>HIGH HAIR KONTAKT</title>
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
            var both2 = function () {

            };
            $(document).ready(both2);
            $(window).resize(both2);
        </script>
    </head>
    <body>
        <!-- top menu -->
        <header>
            <nav class="top-menu-div">
                <ul>
                    <li><a class="" href="offer.php#sq0">Marka</a></li>
                    <li><a href="offer.php#sq1">Oferta</a>
                        <ul>
                            <li><a class="" href="offer.php#sq2">Care Line</a></li>
                            <li><a class="" href="offer.php#sq3">Jednorazowe</a></li>
                            <li><a class="" href="offer.php#sq4">Akcesoria</a></li>
                            <li><a class="" href="offer.php#sq5">Wyposażenie</a></li>
                        </ul>
                    </li>
                    <li><img class="logo" alt="Logo High Hair" title="High Hair" src="images/LogoHigh.png" /></li>
                    <li><a class="" href="http://www.twojewlosy.pl/search.php?text=high+hair" target="_blank">Sklep</a></li>
                    <li><a class="" href="contact.php">Kontakt</a>
                        <ul>
                            <li id="count_l2"></li>
                            <li id="count_r2"></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- top menu end-->
        <section class="product-square-big">
            <!--one-->
            <div id="content6-1" class="content-div">
                <div class="map-div">
                    <?php include_once 'map.php'; ?>
                </div>
                <div class="contact-div">
                    <?php include_once 'email_check.php'; ?>
                </div>
                <div class="address-div">
                    <strong>Numery kontaktowe:</strong><br />
                    tel. 34 314 48 96 <br />
                    mob. 513 187 096<br />
                    mob. 503 901 016<br />
                    <strong>Adres e-mail:</strong><br />
                    <a href="mailto:bok@hihair.pl">bok@hihair.pl</a><br />

                    <strong>F.H. BOSE</strong><br />
                    Hurtownia Hi Hair<br />
                    Nowowiejskiego 5C <br />
                    Częstochowa <br />
                    Polska <br />
                </div>
                <div class="link-div">
                    <div>
                        <a href="http://www.twojewlosy.pl" target="_blank"><img alt="Logo sklepu fryzjersko-kosmetycznego Twoje Włosy" title="Logo Twojewlosy" src="images/logo_tw.jpg" /><br />TwojeWłosy</a>
                    </div>
                    <div>
                        <a href="http://www.meble24h.com.pl" target="_blank"><img alt="Logo sklepu z wyposażeniem do salonów fryzjerskich Twoje Włosy" title="Logo Meble24h" src="images/logo_m24h.jpg" /><br />Meble24h</a>
                    </div>
                    <div>
                        <a href="http://www.hihair.pl" target="_blank"><img alt="Logo blogu firmy HiHair" title="Logo HiHair" src="images/logo_hihair.jpg" /><br />HiHair</a>
                    </div>
                    <div>
                        <a href="http://www.meblefryzjerskie.info" target="_blank"><img alt="Logo strony poradnika jak mądrze wybrać meble do salonu fryzjerskiego" title="Logo Meblefryzjerskie" src="images/logo_mfi.jpg" /><br />MebleFryzjerskie</a>
                    </div>
                    <div>
                        <a href="http://www.facebook.pl" target="_blank"><img alt="Logo facebook TwojeWlosy" title="Logo TwojeWlosy" src="images/logo_ftw.jpg" /><br />Facebook</a>
                    </div>
                    <div>
                        <a href="http://www.facebook.pl" target="_blank"><img alt="Logo facebook Meble24h" title="Logo Meble24h" src="images/logo_fh.jpg" /><br />Facebook</a>
                    </div>
                </div>
            </div>     
        </section>
    </body>
</html>