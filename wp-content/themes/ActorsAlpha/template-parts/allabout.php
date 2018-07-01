<?php $args = array(
        'post_type' => 'allabout',							
        'posts_per_page' => 1,							
        'orderby' => 'title',
        'order' => 'ASC',
    ); ?>

<?php $allabout = new WP_Query($args); while($allabout->have_posts()): $allabout->the_post(); ?>

<div class="allabout">
   
    <h2 class="section__title u-text-center"><?php the_title(); ?></h2>
    
    <div class="row">
      
        <div class="col-1-of-3">

            <div class="allabout__content-container">
                <i class="allabout__icon _mi <?php the_field('col-1-icon'); ?>" aria-hidden="true" style="font-size:3em;"></i>
                <h3 class="allabout__subheader"><?php the_field('col-1-title'); ?></h3>
                <p class="allabout__text"><?php the_field('col-1-text'); ?></p>
                <a href="<?php the_field('col-1-link'); ?>" class="btn btn--darktext btn--secondary btn--medium"><?php the_field('col-1-btn-text'); ?></a>
            </div>

        </div>

        <div class="col-1-of-3">

            <div class="allabout__content-container">
                <i class="allabout__icon _mi <?php the_field('col-2-icon'); ?>" aria-hidden="true" style="font-size:3em;"></i>
                <h3 class="allabout__subheader"><?php the_field('col-2-title'); ?></h3>
                <p class="allabout__text"><?php the_field('col-2-text'); ?></p>
                <a href="<?php the_field('col-2-link'); ?>" class="btn btn--darktext btn--secondary btn--medium"><?php the_field('col-2-btn-text'); ?></a>
            </div>

        </div>

        <div class="col-1-of-3">

            <div class="allabout__content-container">
                <i class="allabout__icon _mi <?php the_field('col-3-icon'); ?>" aria-hidden="true" style="font-size:3em;"></i>
                <h3 class="allabout__subheader"><?php the_field('col-3-title'); ?></h3>
                <p class="allabout__text"><?php the_field('col-3-text'); ?></p>
                <a href="<?php the_field('col-3-link'); ?>" class="btn btn--darktext btn--secondary btn--medium"><?php the_field('col-3-btn-text'); ?></a>
            </div>
            
        </div>

  </div><!--/ROW-->
  
</div><!--/allabout-->

<?php endwhile; wp_reset_postdata(); ?>