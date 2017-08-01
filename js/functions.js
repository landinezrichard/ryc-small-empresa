jQuery('document').ready(function($){


	
	//---------------------------------------------------------------------
	// RESPONSIVE MENU
	//---------------------------------------------------------------------
	$('.menu-trigger').click(function(){
		
	    if ( $('#main-menu').css('display') == 'none' ) {
	
	      $('#main-menu').addClass('open').removeClass('closed');
	
	    } else {
	
	      $('#main-menu').removeClass('open').addClass('closed');
	
	    }
	
	});

});