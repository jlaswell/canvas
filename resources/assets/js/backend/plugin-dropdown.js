$(window).load(function () {
    if ($('.plugin-menu')) {
        var menu = $('.plugin-menu'),
            height = menu.css('height'),
            opacity = menu.css('opacity');

        $('#plugin-menu-toggle').click(function () {
            if (menu.css('height') == 0 || menu.css('opacity') == 0) {
                menu.animate({height: height, opacity: opacity});
                $('.plugin-chevron').removeClass('plugin-chevron__collapsed');
            } else {
                menu.animate({height: 0, opacity: 0});
                $('.plugin-chevron').addClass('plugin-chevron__collapsed');
            }
            return false;
        });
    }
});