$(document).ready(function() {  
    var $fade = $('.fade');
    var $quickFade = $('.quick-fade');
    var $slideIn = $('.slide-in');
    var $fancy = $('.fancy');
//header fade
    $($fade).addClass('animated fadeIn');
    $($quickFade).addClass('animated fadeIn');

//slideIn animateion
    
    $($slideIn).addClass('animated slideInUp');
    
//fancy
    
        $($fancy).addClass('animated slideInUp');
        
    
//animations on scroll
    
  $('.js-wp-main').waypoint(function(direction){
     $('.js-wp-main').addClass('animated fadeIn');
      
  }, {
      offset:'85%'
  });
    
    
  $('.js-wp-1').waypoint(function(direction){
     $('.js-wp-1').addClass('animated fadeIn');
      
  }, {
      offset:'65%'
  });
    
  $('.js-wp-2').waypoint(function(direction){
     $('.js-wp-2').addClass('animated fadeIn');
      
  }, {
      offset:'65%'
  });

  $('.js-wp-3').waypoint(function(direction){
     $('.js-wp-3').addClass('animated fadeIn');
      
  }, {
      offset:'60%'
  });
    
  $('.js-wp-4').waypoint(function(direction){
     $('.js-wp-4').addClass('animated fadeIn');
      
  }, {
      offset:'60%'
  });    
    
});