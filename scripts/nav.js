(function ($) {
    $('.nav__button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    });

    $(document).ready(function () {
        $("#lightgallery").lightGallery();
    });
})(jQuery);