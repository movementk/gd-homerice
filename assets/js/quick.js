$('#quick .recent ul').bxSlider({
    mode: 'vertical',
    maxSlides: 3,
    minSlides: 3,
    pager: false,
    slideMargin: 10,
    nextText: '<span class="glyphicon glyphicon glyphicon-menu-right"></span>',
    prevText: '<span class="glyphicon glyphicon glyphicon-menu-left"></span>'
});

$(window).on('scroll', function() {
    if ($(this).scrollTop() >= 855) {
        $('#quick').stop().animate({
            top: $(this).scrollTop() + 30
        }, 'slow');
    } else {
        $('#quick').stop().animate({
            top: 855
        }, 'slow');
    }
});