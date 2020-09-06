$(document).ready(function () {
    $(window).resize(function () {
        var message = $('.message');
        $('.message').css({
            'margin-top' : '-' + Math.round(message.height() / 2) + 'px' ,
            'margin-right' : '-' + Math.round(message.width() /2) + 'px'
        });
    }).trigger('resize');
});