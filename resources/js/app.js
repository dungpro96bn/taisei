import './bootstrap';
import './UtCookie';
import './UtWindow';

//fadein
$(window).scroll(function () {
    $('.js-fadein').each(function () {
        var ptop = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > ptop - windowHeight) {
            $(this).addClass('scroll-in');
        }
    });
});

$('.js-fadein').each(function () {
    var ptop = $(this).offset().top;
    var firstView = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (firstView > ptop - windowHeight) {
        $(this).addClass('scroll-in');
    }
});
