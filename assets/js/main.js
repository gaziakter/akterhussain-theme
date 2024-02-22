(function($) {
	$(document).ready(function(){

       //START HERE JQUERY CODE



$('.one-time').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true

});

  // Category menu
 $(".categories-btn").click(function(){
    $(".category-content").slideToggle("slow");
  });

$('.close-btn').click(function(){
	$(".category-content").slideUp("slow");
});


  // Main menu
 $(".main-menu-btn").click(function(){
    $(".main-menu-content").slideToggle("slow");
  });


  // search mobile header
 $(".search-mobile").click(function(){
    $(".mobile-search-content").slideToggle("slow");
  });


  // mobile cateroey menu
 $(".category-mobile").click(function(){
    $(".mobile-category-content").slideToggle("slow");
  });


  // mobile main menu
 $(".menu-mobile").click(function(){
    $(".mobile-main-menu").slideToggle("slow");
  });




/* ========================================== 
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('.header-section').addClass('fixed-header');
    }
    else {
        $('.header-section').removeClass('fixed-header');
    }
});



  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD



       // END JQUERY CODE
   });
}(jQuery));


