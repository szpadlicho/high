<!DOCKTYPE HTML>
<html lang="pl-PL">
    <head>
        <meta charset="utf-8" />
        <title>HIGH HAIR V4</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v5.css" />
        <link type="text/css" rel="stylesheet" href="css/top_menu.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu.css" />
        <link title="deafult" rel="stylesheet" type="text/css" href="css/bg.css" media="screen" />
        <script type="text/javascript" >
            // function scrollToAnchor(aid){
                // var aTag = $("a[name='"+ aid +"']");
                // $('html,body').animate({scrollTop: aTag.offset().top},'slow');
            // }
            // $("#link").click(function() {
               // scrollToAnchor('id1');
            // });          
            $(window).scroll(function() {
                var fmx = $(this).scrollTop();
                var fmy = $(this).scrollLeft();
                document.getElementById('count_l2').innerHTML='X = '+fmx+'<br />Y = '+fmy;
            });
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
                    }, 1200);
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
                var wtt = $(window).width();
                var allhtt = (htt * 6);
                $('body').css('height', allhtt+'px' );
                $('#count_r2').text(allhtt+'/'+wtt);
            });
            $(window).resize(function () {
                var htt = $(window).height();
                var wtt = $(window).width();
                var allhtt = (htt * 6);
                $('body').css('height', allhtt+'px' );
                $('.place-holder-div').css('height', allhtt+'px' );
                $('#count_r2').text(allhtt+'/'+wtt);
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
            .slider{width:100%; height: 16.7%}
            .cat1{width:100%; height: 16.7%}
            .cat2{width:100%; height: 16.7%}
            .cat3{width:100%; height: 16.7%}
            .cat4{width:100%; height: 16.7%}
            .cat5{width:100%; height: 16.7%}
            .footer{width:100%; height: 16.7%}
        </style>
    </head>
    <body>       
        <div class="top-menu-div">I'm Menu in future :)
            <a href="#anch1">slider</a>
            <a href="#anch2">cat1</a>
            <a href="#anch3">cat2</a>
            <a href="#anch4">cat3</a>
            <a href="#anch5">cat4</a>
            <a href="#anch6">footer</a>
            <div id="count_l2"></div>
            <div id="count_r2"></div>            
        </div>        
        <div class="place-holder-div"><!--<body style="background: #000 url(../images/bg.jpg) center 0px no-repeat; background-attachment:fixed; background-size: cover;">-->
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
                        <ul>
                            <li><a href="#">Folia</a></li>
                            <li><a href="#">Ręcznik</a></li>
                            <li><a href="#">Rękawiczki</a></li>
                            <li><a href="#">Pelerynki</a></li>
                            <li><a href="#">Waciki</a></li>
                            <li><a href="#">Kołnierze na puszkę</a></li>
                            <li><a href="#">Prześcieradła i podkłady</a></li>
                            <li><a href="#">Dla kosmetyczek</a></li>
                                <ol>
                                    <li><a href="#">Stringi</a></li>
                                    <li><a href="#">Japonki</a></li>
                                    <li><a href="#">Waciki do henny</a></li>
                                </ol>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a name="anch3"></a>
            <div class="scroll cat2">
                Chromowane
                <div class="product-square-big square2"></div>
            </div>
            
            <a name="anch4"></a>
            <div class="scroll cat3">
                CareLine
                <div class="product-square-big square3"></div>
            </div>
            
            <a name="anch5"></a>
            <div class="scroll cat4">
                Akcesoria
                <div class="product-square-big square4"></div>
            </div>
            
            <a name="anch6"></a>
            <div class="scroll footer">
                Hello I'm Footer
                <div class="product-square-big square5"></div>
            </div>            
        </div>
    </body>
</html>