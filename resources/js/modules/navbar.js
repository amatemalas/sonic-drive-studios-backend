const navbar = $('.c-nav');
const pre = $('.c-prenav');

$(window).scroll(function () {
    if (navbar.offset().top > 10) {
        pre.slideUp(300);
        $('.navbar-brand img').prop('width', '100');
        navbar.addClass('bg-dark');
        navbar.addClass('border-bottom border-gray-dark');
    } else {
        pre.slideDown(300);
        navbar.removeClass('border-bottom border-gray-dark');
        $('.navbar-brand img').prop('width', '120');
        if (!navbar.hasClass('navbar-inner') && $('.navbar-toggler').hasClass('collapsed')) {
            navbar.removeClass('bg-dark');
        }
    }
});

$('.navbar-toggler').click(function () {
    if (!$('.navbar-toggler').hasClass('collapsed')) {
        navbar.addClass('bg-dark');
    } else {
        if (navbar.offset().top < 10) {
            navbar.removeClass('bg-dark');
        }
    }
});