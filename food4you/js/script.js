$(function() {
	initSliders();
    initMenuToggle();
});

function initSliders() {
	$('.food-events .gallery-slider').slick({
		infinite: true,
		autoplay: true,
        centerMode: true,
        centerPadding: '0px',
        autoplaySpeed: 2000,
        variableWidth: true,
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
              }
            }]
	});
}

function initMenuToggle() {
    $('#header .toggle-menu').on('click',function(){
        $('.nav-top .nav-links').toggleClass('custom');
        $('#header').toggleClass('active');
        $(this).toggleClass('active');
    });
}