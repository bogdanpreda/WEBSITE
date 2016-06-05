$(function() {
        $('img').addClass( 'img-responsive');

        $(window).scroll(function(){
            /*if ($(this).scrollTop() > 180) 
                $('.scrolltop').fadeIn();
             else 
                $('.scrolltop').fadeOut();
            */
        });

        $('.scrolltop').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0},500);
        });
    });