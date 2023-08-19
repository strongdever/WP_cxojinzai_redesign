!(function ($) {
    "use strict";    
    var curr_Index = 0;
    $(".picker-before").click(function() {
        curr_Index--;
        if( curr_Index < 0 ) curr_Index += 3;
        $(".pickup img").prop('src', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('src')).prop('srcset', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('srcset'));
    })
    
    $(".picker-next").click(function() {
        curr_Index++;
        curr_Index = curr_Index % 3;
        $(".pickup img").prop('src', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('src')).prop('srcset', $(".picker img:nth-child(" + (curr_Index + 1) + ")").prop('srcset'));
    })

    // picker
    function pickupImage() {
        const $this = $(this);
        const currentIndex = $this.data('index');
        curr_Index = currentIndex;
        const $imagePicker = $this.parent();
        const $images = $imagePicker.find('img');
        const maxIndex = $imagePicker.data('max-index');
        const $target = $('.' + $imagePicker.data('target'));
        var newIndex = currentIndex;

        if ($target.length > 0) {
            $target.prop('src', $this.prop('src')).prop('srcset', $this.prop('srcset'));
        }
    }
    $('.picker').each(function (index, element) {
        const $imagePicker = $(element);
        var lastIndex = 0;

        $imagePicker.find('img').each(function (index, img) {
            $(img).data('index', index);
            lastIndex = index;
        });
        $imagePicker.data('maxIndex', lastIndex);
    });
    $('.picker img').on('click', pickupImage);

    // lightbox
    const $lightbox = $('#lightbox');
    const $lightboxImage = $('#lightbox img');
    const $lightboxSource = $('.photos .pickup img, img.lightbox');

    $lightboxSource.on('click', function () {
        const $this = $(this);

        $('body').css({ 'overflow-y': 'hidden' });
        $lightboxImage.css({ opacity: 0.0 }).prop('src', $this.prop('src')).prop('srcset', $this.prop('srcset'));
        $lightbox.css({ display: 'flex' });
        $lightboxImage.css({ opacity: 1.0 });
    });
    $lightbox.on('click', function () {
        $('body').css({ 'overflow-y': 'scroll' });
        $lightbox.css({ display: 'none' });
        $lightboxImage.css({ opacity: 0.0 });
    });
})(jQuery);