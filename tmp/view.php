<!DOCKTYPE HTML>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>view.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <!--
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v4.css" />
        <link type="text/css" rel="stylesheet" href="css/top_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/slider_menu.css" />
        <link title="deafult" rel="stylesheet" type="text/css" href="css/bg.css" media="screen" />
        -->
        <script type="text/javascript" >
        </script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script type="text/javascript">
        $(function() {
            //$( "#sq1" ).tabs();
            $( "#sq2" ).tabs();
            $( "#sq3" ).tabs();
            $( "#sq4" ).tabs();
            //$( "#sq5" ).tabs();
            //$( "#sq6" ).tabs();
        });
        </script>
        <script type="text/javascript" >
        $(document).ready(function(){
            var speed = 100;
            $(".prev").click(function() {
                var now = $(this).parent().next("ul.gallery").children(":visible"),
                    last = $(this).parent().next("ul.gallery").children(":last"),
                    prev = now.prev();
                    prev = prev.index() == -1 ? last : prev;
                now.fadeOut(speed, function() {prev.fadeIn(speed);});
            });

            $(".next").click(function() {
                var now = $(this).parent().next("ul.gallery").children(':visible'),
                    first = $(this).parent().next("ul.gallery").children(':first'),
                    next = now.next();
                    next = next.index() == -1 ? first : next;
                now.fadeOut(speed, function() {next.fadeIn(speed);});
            });

            $(".gallery li").click(function() {
                var first = $(this).parent().children(':first'),
                    next = $(this).next();
                    next = next.index() == -1 ? first : next;
                $(this).fadeOut(speed, function() {next.fadeIn(speed);});
            });
        });
        // High Hair Site
        //$(document).ready(function($) {
            // function foo() {
                // var lolPrev = $('.product-img').parent().parent().parent().parent().parent().next().find('.product-img').attr('src');
                // var lol = $(this).attr('src');
                // var lolNext = $('.product-img').parent().parent().next().find('.product-img').attr('src');
                // $('.show-prev').append('Tu - '+lolPrev);
                // $('.show').append('Tu - '+lol);
                // $('.show-next').append('Tu - '+lolNext);
            // }
        //});
        //$(document).ready(function($) {
        // function myFoo(what) {
            // var what = $('.product-img');
            // $(what).eq(0).on( 'load', function() {
                // //alert($(':first', this).attr('src'));
                // var lol = $(this).attr('src');
                // $('.show').append('This - '+lol+' ');
            // });
            // $(what).parent().parent().prev(':first').find('.product-img').on( 'load', function() {
                // //alert($(this).attr('src'));
                // var lolPrev = $(this).attr('src');
                // $('.show-prev').append('Prev - '+lolPrev);
            // });
            // $(what).parent().parent().next(':first').find('.product-img').on( 'load', function() {
                // //alert($(this).attr('src'));
                // var lolNext = $(this).attr('src');
                // $('.show-next').append('Next - '+lolNext);
            // });
        // }
        //});
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
                }
            });
        </script>
        <style type="text/css">
        .prev, .next {position: relative; padding: 3px; font-size:50px; font-weight: 900; cursor:pointer;}

        .gallery li{display:none; list-style:none;}
        .gallery li:first-child {display:block;}

        .gallery img {max-height:550px}
        /**********************************/
        .content-img{
            width:23.125em;
            background:rgba(255,255,255,1.0);
            padding:0.5em;
            margin:0.5em 3em;
            #position:absolute;
            text-align:center;
        }
        .content-img .product-img{
            width:100%;
            height:auto;
        }
        .content-round{
            width:23.125em;
            padding:0em 0.5em;
            margin:0.5em 3em;
            #position:absolute;
            text-align:center;
            bottom:0em;
        }
        .content-round .product-thumb{
            width:30%;
            height:auto;
            padding:0.3em;
            #margin:0 1.25%;
            background:rgba(255,255,255,1.0);
        }
        /*************************/
        .product-thumb{
            width:4em;
            height:4em;
        }
        </style>
    </head>
    <body>       
        <div class="media">
            <div class="slideButtons">
                <span class="prev"><</span>
                <span class="next">/ ></span>
            </div>
            <ul class="gallery">
                <li><img class="product-thumb" src="http://i.imgur.com/8aA7W.jpg" /></li>
                <li><img class="product-thumb" src="http://i.imgur.com/jE7vj.jpg" /></li>
                <li><img class="product-thumb" src="http://i.imgur.com/L7lVg.jpg" /></li>
            </ul>
            <div class="slideButtons">
                <span class="prev"><<</span>
                <span class="next">/ >></span>
            </div>
            <ul class="gallery">
                <li><img class="product-thumb" src="images/care.png" /></li>
                <li><img class="product-thumb" src="images/jedn.png" /></li>
                <li><img class="product-thumb" src="images/wypos.png" /></li>
            </ul>
        </div>
        <div class="show-prev"></div>
        <div class="show"></div>
        <div class="show-next"></div>
        <!--*--><br />-----------------------------------------------------------------------------------------------------<br />
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
                                <img class="product-img" src="images/background/t1.jpg" />
                            </div>                            
                            <div class="content-round">
                                <img class="product-thumb 1-0" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-0" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-0" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                        <div id="sq2-2" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t2.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-1" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-1" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-1" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                        <div id="sq2-3" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t3.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-2" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-2" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-2" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                    </div>             
                </div>
            </div>
            <div class="scroll cat3">
                <div id="sq3" class="product-square-big square3">
                    <div class="left-menu-div">
                        <ul><img src="images/care.png" /><span>Care Line</span>
                            <li><a href="#sq3-1">Repair Mask</a></li>
                            <li><a href="#sq3-2">Banana Mask</a></li>
                            <li><a href="#sq3-3">Argan Oil</a></li>
                        </ul>
                        <div class="menu-links">
                            <a class="anch2"></a>
                            <a class="anch3"><img class="links-img" src="images/jedn.png" />Jednorazowe</a>
                            <a class="anch4"><img class="links-img" src="images/akces.png" />Akcesoria</a>
                            <a class="anch5"><img class="links-img" src="images/wypos.png" />Wposażenie</a>
                        </div>
                    </div>
                    <div class="product-content-big">
                        <div id="sq3-1" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t4.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-3" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-3" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-3" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                        <div id="sq3-2" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t5.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-4" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-4" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-4" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                        <div id="sq3-3" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t6.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-5" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-5" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-5" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                    </div>             
                </div>
            </div>
            <div class="scroll cat4">
                <div id="sq4" class="product-square-big square4">
                    <div class="left-menu-div">
                        <ul><img src="images/care.png" /><span>Care Line</span>
                            <li><a href="#sq4-1">Repair Mask</a></li>
                            <li><a href="#sq4-2">Banana Mask</a></li>
                            <li><a href="#sq4-3">Argan Oil</a></li>
                        </ul>
                        <div class="menu-links">
                            <a class="anch2"></a>
                            <a class="anch3"><img class="links-img" src="images/jedn.png" />Jednorazowe</a>
                            <a class="anch4"><img class="links-img" src="images/akces.png" />Akcesoria</a>
                            <a class="anch5"><img class="links-img" src="images/wypos.png" />Wposażenie</a>
                        </div>
                    </div>
                    <div class="product-content-big">
                        <div id="sq4-1" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t7.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-6" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-6" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-6" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                        <div id="sq4-2" class="content-div">
                            <div class="content-img">
                                <img id="dd2" class="product-img" src="images/background/t8.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-7" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-7" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-7" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                        <div id="sq4-3" class="content-div">
                            <div class="content-img">
                                <img class="product-img" src="images/background/t9.jpg" />
                            </div>
                            <div class="content-round">
                                <img class="product-thumb 1-8" src="images/background/brak.jpg" />
                                <img class="product-thumb 2-8" src="images/background/brak.jpg" />
                                <img class="product-thumb 3-8" src="images/background/brak.jpg" />
                            </div>
                            <div class="content-text">

                            </div>
                        </div>
                    </div>             
                </div>
            </div>
    </body>
</html>