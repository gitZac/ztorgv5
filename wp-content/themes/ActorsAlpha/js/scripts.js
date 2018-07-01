(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
        
        $('.main-nav__mobile-icon').on('click', function(){
            $('.main-nav__menu').slideToggle('slow');
            $('.main-nav__social').slideToggle('slow');  
        });
        
	});
	
})(jQuery, this);


//(function ($, root, undefined) {
//	
//	$(function () {
//		
//		'use strict';
//		
//		// DOM ready, take it away
//
//		$('.header__mobile-nav a').on('click', function(){
//            
//			$('.main-nav').slideToggle('slow');
//		 });
//		        
//		var breakpoint = 900;
//		
//		$(window).resize(function() {
//			if ($(document).width() <= breakpoint) {
//				$('.main-nav').hide();
//
//			} else{
//                $('.main-nav').show();
//			}		 
//		});
//                				
//		$('#feature').hover(function(){
//			$('.feature').fadeIn(function(){
//				$(this).toggleClass('active');
//			});			
//		});
//						
//	});	
//})(jQuery, this);