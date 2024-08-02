$(function() {
    $(window).scroll(function() {
      var $header = $('#header');
      if ($(window).width() >= 768 && $(window).scrollTop() > 50) { 
        $header.addClass('scrolled');
      } else {
        $header.removeClass('scrolled');
      } 
    });
    $('a.light-box').on('click', function(event) {
      event.preventDefault();
      var imageUrl = $(this).attr('href'); // Get the href attribute
      var titleText = $(this).closest('.s-product').find('.p-title').text() + ' '+ $(this).closest('.s-product').find('.p-info').text(); // Get the title and info text
      $('#lightbox-container .lightbox .title').text(titleText); // set the title
      $('#lightbox-container').find('img').attr('src', imageUrl); // Set the image src
      $('#lightbox-container .lightbox').css('display', 'block');
      $('#lightbox-container').fadeIn(); // Show the container
    });
    
    $('.close-lightbox').on('click', function() {
      const lightbox = $(this).closest('.lightbox');
      lightbox.css('display', 'none');
      $('#lightbox-container').fadeOut(); // Hide the container
    });

});