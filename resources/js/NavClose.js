$(function () {
    $('.e-side_trigger').on('click', function () {
        var windowSize = window.innerWidth;

        if (windowSize > 850) {
            $('.edit-sidebar').animate({
                width: 'toggle'
            }, 'slow');
        }else{
            $('.edit-sidebar').css('display', '');
        }
    })
});
