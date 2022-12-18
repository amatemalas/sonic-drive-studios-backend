$(window).scroll(function () {
    const navbar = $('.c-nav');
    const pre = $('.c-prenav');
    
    if (navbar.offset().top > 10) {
        pre.slideUp(300);
        $('.navbar-brand img').prop('width', '170');
        navbar.addClass('bg-dark');
        navbar.addClass('border-bottom border-gray-dark');
    } else {
        pre.slideDown(300);
        navbar.removeClass('border-bottom border-gray-dark');
        $('.navbar-brand img').prop('width', '230');
        if (!navbar.hasClass('navbar-inner')) {
            navbar.removeClass('bg-dark');
        }
    }
});