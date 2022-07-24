$(function () {
    const ham = $('.home-btn');
    ham.on('click', function () {
        ham.toggleClass('active');
    });

    $('.content').on('click', function () {
        if (ham.hasClass('active')) {
            ham.removeClass('active');
        }
    });
});
