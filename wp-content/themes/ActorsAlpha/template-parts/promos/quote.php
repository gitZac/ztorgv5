<?php $args = array(
        'post_type' => 'promo',	
        'p'         => '483',
        'posts_per_page' => 1,							
        'orderby' => 'title',
        'order' => 'ASC',
    ); ?>

<?php $promo = new WP_Query($args); while($promo->have_posts()): $promo->the_post(); ?>

<section class="section">

    <div class="l-wrapper">

        <div class="promo">
           
            <h4 class="promo__title promo__title--large u-text-center"><?php the_field('title'); ?></h4>
            
            <div class="promo__button-container--center">
                <a href="<?php the_field('button_link'); ?>" class="btn btn--secondary btn--master btn--darktext promo__btn-text"><?php the_field('button_text'); ?></a>     
            </div>            

        </div>

    </div>

</section>

<?php endwhile; wp_reset_postdata(); ?>
