// require('./bootstrap');

$(window).on('scroll', function () {
    // scroll to top btn show/hide
    scrollTopBtn = () => {
        const scrollToTop = $('#back-to-top'), scroll = $(window).scrollTop();
        if (scroll >= 50) {
            scrollToTop.fadeIn();
        } else {
            scrollToTop.fadeOut();
        }
    }
    scrollTopBtn();
});

// back to top
backToTop = () => {
    $('#back-to-top').on('click', function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}
backToTop();