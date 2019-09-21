(function ($) {
    $('.nav__button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    });

    $(document).ready(function () {
        $('#multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveWidth: true
        });
    });
})(jQuery);