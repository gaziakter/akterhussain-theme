(function($) {
	$(document).ready(function(){

       //START HERE JQUERY CODE


	  // search button
	 $(".search-option").click(function(){
	    $(".search-content").slideToggle("slow");
	  });

	 $(".search-option").click(function(){
	    $(".mobiile-menu-area").slideUp("slow");
	  });

	$(".search-hide").click(function(){
	    $(".search-content").slideUp("slow");
	  });


	// search button
	$(".menu-option").click(function(){
	    $(".mobiile-menu-area").slideToggle("slow");
	  });

	$(".menu-option").click(function(){
	    $(".search-content").slideUp("slow");
	  });

	$(".menu-hide").click(function(){
	    $(".mobiile-menu-area").slideUp("slow");
	  });



       // END JQUERY CODE
   });
}(jQuery));


