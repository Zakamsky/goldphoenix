// $.noConflict();
jQuery.noConflict();
jQuery( document ).ready(function( $ ) {

// === sticky menu ===
    const headerHeight = $('#site-header').height();
    // const navHeight = $('.sticky-js').height() + 16;
    // const navOffset = headerHeight - navHeight;

    $(window).scroll(function() {
        // if (window.pageYOffset > navOffset){
        if (window.pageYOffset > headerHeight){
            $('.sticky-js').addClass('fixed-top-js')
        } else {
            $('.sticky-js').removeClass('fixed-top-js');
        }

    });

// === сокрытие меню на мобилках по клику ===
    $(document).on('click', function(){
        $('.collapse').collapse('hide');
    });

// === back to top button ===
    $('.gototop-js').on('click', function(){
        console.log('here')
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });

    });

    $(window).scroll(function() {
        if (window.pageYOffset > 300){
            $('.gototop-js').addClass('show-js')
        } else {
            $('.gototop-js').removeClass('show-js');
        }

    });


});
