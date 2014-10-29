// High Hair Site
jQuery(document).ready(function($) {	
    $('.product-img').click(function(e) {
        e.preventDefault();
        var image_href = $(this).attr("src");
        if ($('#lightbox').length > 0) { // #lightbox exists
            //insert img tag with clicked link's href as src value
            $('#content-images').html('<img src="' + image_href + '" />');
            //show lightbox window - you can use a transition here if you want, i.e. .show('fast')
            $('#lightbox').fadeIn();
        } else { //#lightbox does not exist 
            //create HTML markup for lightbox window
            var lightbox = 
            '<div id="lightbox">' +
                '<p>Klikni aby zamknąć</p>' +
                '<div id="content-images">' + //insert clicked link's href into img src
                    '<img src="' + image_href +'" />' +
                '</div>' +	
            '</div>';
            //insert lightbox HTML into page
            $('#light-box-container').hide().append(lightbox).fadeIn();
            //click function to close lightbox container
            $("#lightbox").click(function() {
                //$('#lightbox').hide();
                $('#lightbox').fadeOut('fast');
            });
        };
    });
});