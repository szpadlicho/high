<!DOCTYPE html>
<html>
    <head>
        <title>High Hair V6</title>
        <meta charset="UTF-8"/>
        <link type="text/css" rel="stylesheet" href="css/style_v6.css" />
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>		
        <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    /*
                    if you want to use one of the easing effects:
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1500,'easeInOutExpo');
                     */
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1000);
                    event.preventDefault();
                });
            });
        </script>
    </head>
    <body>
        <div class="section black scroll" id="cat1">
            <h2>Section 1</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
        <div class="section white scroll" id="cat2">
            <h2>Section 2</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
        <div class="section black scroll" id="cat3">
            <h2>Section 3</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
        <div class="section white scroll" id="cat4">
            <h2>Section 4</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
        <div class="section black scroll" id="cat5">
            <h2>Section 5</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
        <div class="section white scroll" id="cat6">
            <h2>Section 6</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
        <div class="section black scroll" id="cat7">
            <h2>Section 7</h2>
            <ul class="nav">
                <li><a href="#cat1">1</a></li>
                <li><a href="#cat2">2</a></li>
                <li><a href="#cat3">3</a></li>
                <li><a href="#cat4">4</a></li>
                <li><a href="#cat5">5</a></li>
                <li><a href="#cat6">6</a></li>
                <li><a href="#cat7">7</a></li>
            </ul>
        </div>
    </body>
</html>