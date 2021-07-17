$(window).load(function() {
    $('#preload').delay(1000).fadeOut('fast', function() {
        $('body').removeClass('preloading');
    });
});