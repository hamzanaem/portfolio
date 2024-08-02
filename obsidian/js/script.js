$(function() {
    initHeaderToggle();
    initMenuToggle();
});

function initHeaderToggle() {
    $(window).on('scroll',function(){
        if ($(this).scrollTop() > 70) {
            $('#header').addClass('active');
        } else {
            $('#header').removeClass('active');
        }
    });
}

function initMenuToggle() {
    $('#header .toggle-menu').on('click',function(){
        $('#header .nav-links').toggleClass('active');
        $('#header').toggleClass('custom');
        $(this).toggleClass('active');
    });
}