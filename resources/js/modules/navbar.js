$(window).scroll(function () {
    const navbar = $('.c-nav');
    const pre = $('.c-prenav');

    if (navbar.offset().top > 10) {
        navbar.addClass('bg-dark');
        pre.slideUp(300);
        $('.navbar-brand img').prop('width', '170');
    } else {
        navbar.removeClass('bg-dark');
        pre.slideDown(300);
        $('.navbar-brand img').prop('width', '230');
    }
});