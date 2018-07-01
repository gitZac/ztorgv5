<?php $args = array(
        'post_type' => 'promo',							
        'posts_per_page' => 1,							
        'orderby' => 'title',
        'order' => 'ASC',
    ); ?>

<?php $promo = new WP_Query($args); while($promo->have_posts()): $promo->the_post(); ?>

<?php endwhile; wp_reset_postdata(); ?>

<div class="promo">
   
    <div class="row">
      
       <div class="col-2-of-3">
         
          <div class="promo__text-container">
                <h4 class="promo__title">Need a hand on a project?</h4>
                <p class="promo__text"> If you have an ongoing web project that needs an extra freelancers, shoot me an email. I'll help you out.</p>
          </div>
           
       </div>
       
       <div class="col-1-of-3">
         
          <div class="promo__button-container">
                <a href="#" class="btn btn--white btn--medium btn--darktext">Talk me up.</a>         
          </div>
   
       </div>
        
    </div>
    
</div>

