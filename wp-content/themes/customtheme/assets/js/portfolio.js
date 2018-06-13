$(document).ready(function() {
    var $goarmy = $('#goarmy');
    var $iconGA = $('#icon-ga');
    var $textGA = $('#well-expand-ga');

    var $iconGAZ = $('#icon-gaz');
    var $textGAZ = $('#well-expand-gaz');

    var $iconDev = $('#icon-dev');
    var $textDev = $('#well-expand-dev');

    var alreadyExpanded = false;
    var alreadyExpanded2 = false;
    var alreadyExpanded3 = false;
    
    

	$('#ga-well').on('click',function() {
		$goarmy.slideToggle("2000");
    	alreadyExpanded = !alreadyExpanded
       
        if(alreadyExpanded){
        	$iconGA.removeClass('fa-plus-square');
        	$iconGA.addClass('fa-minus-square');
        	$textGA.html("<p>Click to Collapse</p>");
        }

        if (alreadyExpanded === false){
        	$iconGA.removeClass('fa-minus-square');
        	$iconGA.addClass('fa-plus-square');
        	$textGA.html("<p>Click to Expand</p>");
        }
	});
	
	$('#gaz-well').on('click',function() {
		$('#gazette').slideToggle("2000");
		alreadyExpanded2 = !alreadyExpanded2


		if(alreadyExpanded2){
        	$iconGAZ.removeClass('fa-plus-square');
        	$iconGAZ.addClass('fa-minus-square');
        	$textGAZ.html("<p>Click to Collapse</p>");
        }

        if (alreadyExpanded2 === false){
        	$iconGAZ.removeClass('fa-minus-square');
        	$iconGAZ.addClass('fa-plus-square');
        	$textGAZ.html("<p>Click to Expand</p>");
        }
	});

	$('#web-dev-well').on('click',function() {
		$('#web-development').slideToggle("2000");
		alreadyExpanded3 = !alreadyExpanded3

		if(alreadyExpanded3){
        	$iconDev.removeClass('fa-plus-square');
        	$iconDev.addClass('fa-minus-square');
        	$textDev.html("<p>Click to Collapse</p>");
        }

        if (alreadyExpanded3 === false){
        	$iconDev.removeClass('fa-minus-square');
        	$iconDev.addClass('fa-plus-square');
        	$textDev.html("<p>Click to Expand</p>");
        }
	});
    
    //Check Window Width on page load.
     
    //Check width on resize
//    $(window).resize(function(){
//        var $windowWidth = $(window).width();
//        var $innerRow = $('.inner-row');
//        var $portfolioGrid = $('.portfolio-grid');
//        
//        if ($windowWidth <= 991){
//            $innerRow.removeClass('row');
//            $portfolioGrid.addClass('row');
//        }
//    });
    
    
});