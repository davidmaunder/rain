// --------- Global --------- //
// Highlight current nav tab
$(function(){
    var pathname = (window.location.pathname.match(/[^\/]+$/));

    $('.nav a').each(function() {
        if ($(this).attr('href') == pathname)
        {
            $(this).addClass('current');
        }
    });
});

// Scroll to section
$('.scroll').on('click', function (event) {
    event.preventDefault();//stop the browser from jumping to the anchor
    var href  = $(this).attr('href'),    
    oset  = $(href).offset().top;

    $('html, body').stop().animate({
    	scrollTop : oset
    }, 800, function () {
    	location.hash = href;
    });
});

// --------- NAV STICKY --------- //
(function() {
    var header = new Headroom(document.querySelector("#navbar"), {
        tolerance: 3,
        offset : 50,
        classes: {
          initial: "animated",
          pinned: "slideDown",
          unpinned: "slideUp"
      }
  });
    header.init();
}());

// --------- LAZY LOAD --------- //
$(function() {
    $("img.lazy").lazyload();
});