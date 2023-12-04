!(function ($) {
    "use strict";
    $(document).ready(function () {
        //lightbox
        $('.cards-wrapper').on('click', '.cards-list .card div .lightbox', function() { 
            var imgsrc = $(this).attr('src');
            $("body").append("<div class='img-popup'><div class='img-wrapper'><img src='" + imgsrc + "'></div></div>");
            $(".close-lightbox, .img-popup").click(function () {
                $(".img-popup").fadeOut(500, function () {
                    $(this).remove();
                }).addClass("lightboxfadeout");
            });

        });
        $(".lightbox").click(function () {
            $(".img-popup").fadeIn(500);
        });
    });

})(jQuery);