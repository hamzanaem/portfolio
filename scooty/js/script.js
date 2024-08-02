$(function() {
    initMenuToggle();
    initCardToggle();
    initNavLevelBaseToggle();
    initNavLevelFirstToggle();
    initAbcToggle();
});


function initMenuToggle() {
    $('#header .toggle-menu').on('click',function(){
        $('#header .nav-top').toggleClass('active');
        $("body").toggleClass("disable-scroll active");
        $(this).toggleClass('active');
    });
}
function initCardToggle() {
    $('.qna .card-holder .card').on('click',function(){
        $(this).toggleClass("active");

        return false;
    });
}

function initNavLevelBaseToggle() {
    $('#header .nav-link.base').on('click',function(){
        var navlinkfirst= $(this).find(".nav-link.first");
        if (navlinkfirst.hasClass("active")) {
            navlinkfirst.removeClass("active");
        }
        $(this).siblings().removeClass("active");
        $(this).siblings().find(".nav-link.first").removeClass("active");
        $(this).toggleClass("active");

        return false;
    });
}
function initNavLevelFirstToggle() {
    $('#header .nav-link.first').on('click',function(){
        $(this).siblings().removeClass("active");
        $(this).toggleClass("active");

        return false;
    });
}
