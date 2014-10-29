<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Background</title>
        <!--
        <link type="text/css" rel="stylesheet" href="css/bg_v2.css" />
        -->
        <link type="text/css" rel="stylesheet" href="css/bg-slider.css" />
        <!--
        <script src="https://code.jquery.com/jquery-1.6.2.min.js"></script>
        <script src="js/lightbox_tmp.js"></script>
        -->
        <style>
        *{padding:0; margin:0;}
        </style>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript">
        $( "#clickme" ).click(function() {
            $( "#book" ).animate({
                opacity: 0.25,
                left: "+=50",
                height: "toggle"
            }, 5000, function() {
                // Animation complete.
            });
        });
        $(document).ready(function(){
            $('html,body').smoothWheel()
            
        });
        </script>
    </head>
    <body>
        <div class="place-holder">
            <!--
            <ul class="cb-slideshow">
                <li><span class="image-bg">Image 01</span><div class="title-bg"><h3>High Hair <br />Wita</h3></div></li>
                <li><span class="image-bg">Image 02</span><div class="title-bg"><h3>Artykuły Jednorazowe</h3></div></li>
                <li><span class="image-bg">Image 03</span><div class="title-bg"><h3>Care Line</h3></div></li>
                <li><span class="image-bg">Image 04</span><div class="title-bg"><h3>Akcesoria</h3></div></li>
                <li><span class="image-bg">Image 05</span><div class="title-bg"><h3>Wyposażenie</h3></div></li>
                <li><span class="image-bg">Image 06</span><div class="title-bg"><h3>Jakość</h3></div></li>
            </ul>
            -->
            <div class="bg-slider-overflow">
                <ul class="bg-slider">
                    <li><img src="images/bg/1.jpg" /></li>
                    <li><img src="images/bg/2.jpg" /></li>
                    <li><img src="images/bg/3.jpg" /></li>
                    <!--
                    <li><img src="images/bg/4.jpg" /></li>
                    <!--
                    <li><img src="images/bg/5.jpg" /></li>
                    <li><img src="images/bg/6.jpg" /></li>
                    -->
                </ul>
            </div>
            <div id="long"></div>
        </div>
    </body>
</html>