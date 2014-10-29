<!DOCTYPE html>
<html>
    <head>
        <title>High Hair V7</title>
        <meta charset="UTF-8"/>
        
        <link type="text/css" rel="stylesheet" href="css/top_menu_v7.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu_v7.css" />
        <link type="text/css" rel="stylesheet" href="css/left_menu_nested_v7.css" />
        <link type="text/css" rel="stylesheet" href="css/style_v7.css" />
        <!-- The JavaScript -->
        <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <style>
        .content-div{
            display:none;
        }
        #content_1{
            display:block;
        }
        </style>
    </head>
    <body>
            <script type="text/javascript">
            $(document).ready(function($) {
                $('a[id^="trigger_"]').click(function(){
                    $('[id^="Content_"]').hide(); // hide the other divs
                    $('#Content_'+this.id.slice(8)).show();
                });
            });
            </script>
            <div id="sq5" class="product-square-big cat5">
                <!--five-->
                <div class="left-menu-div">
                    <ul><img src="images/wypos.png" /><span>Wyposażenie</span>
                        <li><a id="trigger_1" href="#">Podnóżki</a>
                            <ul>
                                <li><a id="trigger_2" href="#">Wolno stojący</a></li>
                                <li><a id="trigger_3" href="#">Przykręcany</a></li>
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
                <div id="Content_1" class="content-div">
                    <div class="content-text">
                        <p>1</p>
                    </div>
                </div>
                <div id="Content_2" class="content-div">
                    <div class="content-text">
                        <p>2</p>
                    </div>
                </div>
                <div id="Content_3" class="content-div">
                    <div class="content-text">
                        <p>3</p>
                    </div>
                </div>
            </div>

    </body>
</html>