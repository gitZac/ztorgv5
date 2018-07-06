<?php $args = array(
        'post_type' => 'promo',	
        'p'         => '462',
        'posts_per_page' => 1,							
        'orderby' => 'title',
        'order' => 'ASC',
    ); ?>

<?php $promo = new WP_Query($args); while($promo->have_posts()): $promo->the_post(); ?>

<section class="section u-bgcolor-primary">
  
   <div class="l-wrapper">
    
        <div class="promo">

            <div class="row">

               <div class="col-2-of-3">

                  <div class="promo__text-container">
                        <h4 class="promo__title"><?php the_field('title'); ?></h4>
                        <p class="promo__text"> <?php the_field('text'); ?></p>
                  </div>

               </div>

               <div class="col-1-of-3">

                  <div class="promo__button-container">
                        <a href="<?php the_field('button_link'); ?>" class="btn btn--white btn--medium btn--darktext"><?php the_field('button_text'); ?></a>         
                  </div>

               </div>

            </div>

        </div>
    
</div>

</section>


<?php endwhile; wp_reset_postdata(); ?>
